<?php

namespace App\Controller;

use App\Entity\CodePromo;
use App\Entity\User;
use App\Form\CodePromoType;
use App\Repository\CodePromoRepository;
use App\Repository\UserRepository;
use App\Service\SmsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/code-promo', name: 'app_code_promo_')]
class CodePromoController extends AbstractController
{
    private $smsService;
    private $userRepository;

    public function __construct(SmsService $smsService, UserRepository $userRepository)
    {
        $this->smsService = $smsService;
        $this->userRepository = $userRepository;
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(CodePromoRepository $codePromoRepository): Response
    {
        return $this->render('code_promo/index.html.twig', [
            'code_promos' => $codePromoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $codePromo = new CodePromo();
        $form = $this->createForm(CodePromoType::class, $codePromo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($codePromo);
            $entityManager->flush();

            if (!$this->smsService->isConfigured()) {
                $this->addFlash('warning', 'Le code promo a été créé mais Twilio n\'est pas configuré. Les SMS n\'ont pas été envoyés.');
                return $this->redirectToRoute('app_code_promo_index');
            }

            // Récupérer tous les utilisateurs
            $users = $this->userRepository->findAll();
            $smsCount = 0;
            $errorCount = 0;
            
            // Envoyer un SMS à chaque utilisateur ayant un numéro de téléphone
            foreach ($users as $user) {
                if ($user->getNumTel()) {
                    try {
                        $message = sprintf(
                            "Bonjour ! Un nouveau code promo est disponible : %s. Profitez d'une réduction de %s%% !",
                            $codePromo->getCode(),
                            $codePromo->getPourcentage()
                        );
                        
                        $this->smsService->sendSms((string)$user->getNumTel(), $message);
                        $smsCount++;
                    } catch (\Exception $e) {
                        $errorCount++;
                        $this->addFlash('error', "Erreur lors de l'envoi du SMS au {$user->getNumTel()}: {$e->getMessage()}");
                    }
                }
            }

            if ($smsCount > 0) {
                $this->addFlash('success', sprintf(
                    'Le code promo a été créé avec succès. %d SMS envoyé(s), %d erreur(s).',
                    $smsCount,
                    $errorCount
                ));
            } else {
                $this->addFlash('warning', 'Le code promo a été créé mais aucun SMS n\'a été envoyé.');
            }

            return $this->redirectToRoute('app_code_promo_index');
        }

        return $this->render('code_promo/new.html.twig', [
            'code_promo' => $codePromo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(CodePromo $codePromo): Response
    {
        return $this->render('code_promo/show.html.twig', [
            'code_promo' => $codePromo,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, CodePromo $codePromo, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CodePromoType::class, $codePromo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $codePromo->setUtilisations($codePromo->getUtilisations() + 1);
            $entityManager->flush();

            $this->addFlash('success', 'Le code promo a été modifié avec succès.');
            return $this->redirectToRoute('app_code_promo_index');
        }

        return $this->render('code_promo/edit.html.twig', [
            'code_promo' => $codePromo,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, CodePromo $codePromo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$codePromo->getId(), $request->request->get('_token'))) {
            $entityManager->remove($codePromo);
            $entityManager->flush();
            $this->addFlash('success', 'Le code promo a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Une erreur est survenue lors de la suppression du code promo.');
        }

        return $this->redirectToRoute('app_code_promo_index');
    }
} 