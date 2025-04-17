<?php

namespace App\Controller\back;

use App\Entity\Discussion;
use App\Entity\Reclamation;
use App\Repository\DiscussionRepository;
use App\Repository\ReclamationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back')]
class DiscussionController extends AbstractController
{
    #[Route('/reclamation/{id}/discussion', name: 'app_back_discussion', methods: ['GET', 'POST'])]
    public function index(
        Request $request, 
        int $id, 
        ReclamationRepository $reclamationRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Trouver la réclamation
        $reclamation = $reclamationRepository->find($id);
        
        if (!$reclamation) {
            $this->addFlash('error', "Réclamation avec ID {$id} introuvable. Veuillez vérifier l'identifiant.");
            throw $this->createNotFoundException("Réclamation avec ID {$id} introuvable.");
        }

        // Traitement du formulaire
        if ($request->isMethod('POST')) {
            $messageContent = $request->request->get('message');

            if (!empty($messageContent)) {
                $discussion = new Discussion();
                $discussion->setMessage($messageContent);
                $discussion->setReclamation($reclamation);
                $discussion->setDate(new \DateTime());
                
                // Définir l'auteur selon le rôle
                if ($this->isGranted('ROLE_ADMIN')) {
                    $discussion->setAuteur('Admin');
                } else {
                    $discussion->setAuteur('Utilisateur');
                }
                
                $entityManager->persist($discussion);
                $entityManager->flush();

                $this->addFlash('success', 'Message envoyé avec succès.');
                
                // Redirection pour éviter la soumission multiple
                return $this->redirectToRoute('app_back_discussion', ['id' => $id]);
            } else {
                $this->addFlash('error', 'Le message ne peut pas être vide.');
            }
        }

        // Récupérer les discussions liées à cette réclamation
        $discussions = $entityManager->getRepository(Discussion::class)
            ->findBy(['reclamation' => $reclamation], ['date' => 'ASC']);

        return $this->render('back/discussion/index.html.twig', [
            'reclamation' => $reclamation,
            'discussions' => $discussions,
        ]);
    }

    #[Route('/reclamation/{id}/start', name: 'reclamation_start', methods: ['POST'])]
    public function startDiscussion(
        Reclamation $reclamation, 
        EntityManagerInterface $entityManager
    ): JsonResponse {
        $reclamation->setEtat('en cours');
        $entityManager->flush();

        return $this->json(['success' => true]);
    }

    #[Route('/reclamation/{id}/traiter', name: 'app_back_reclamation_marquer_traite')]
    public function marquerCommeTraite(
        Reclamation $reclamation, 
        EntityManagerInterface $entityManager
    ): RedirectResponse {
        // Vérifier que l'utilisateur est un administrateur
        if (!$this->isGranted('ROLE_ADMIN')) {
            $this->addFlash('error', 'Vous n\'avez pas les droits pour effectuer cette action.');
            return $this->redirectToRoute('app_back_discussion', ['id' => $reclamation->getIdReclamation()]);
        }

        // Mettre à jour l'état de la réclamation
        $reclamation->setEtat('traité');
        $entityManager->persist($reclamation);
        $entityManager->flush();

        $this->addFlash('success', 'La réclamation a été marquée comme traitée.');

        return $this->redirectToRoute('app_back_discussion', ['id' => $reclamation->getIdReclamation()]);
    }
}