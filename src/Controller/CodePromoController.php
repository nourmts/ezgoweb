<?php

namespace App\Controller;

use App\Entity\CodePromo;
use App\Form\CodePromoType;
use App\Repository\CodePromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/code-promo', name: 'app_code_promo_')]
class CodePromoController extends AbstractController
{
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
            $codePromo->setUtilisations($codePromo->getUtilisations() + 1);
            $entityManager->persist($codePromo);
            $entityManager->flush();

            $this->addFlash('success', 'Le code promo a été créé avec succès.');
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