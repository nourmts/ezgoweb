<?php

namespace App\Controller;

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

class DiscussionController extends AbstractController
{
    #[Route('/reclamation/{idReclamation}/discussion', name: 'app_discussion', methods: ['GET', 'POST'])]
    public function index(
        Request $request, 
        int $idReclamation, 
        ReclamationRepository $reclamationRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Trouver la réclamation
        $reclamation = $reclamationRepository->find($idReclamation);
        
        if (!$reclamation) {
            throw $this->createNotFoundException('Réclamation introuvable.');
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
                return $this->redirectToRoute('app_discussion', ['idReclamation' => $idReclamation]);
            } else {
                $this->addFlash('error', 'Le message ne peut pas être vide.');
            }
        }

        // Récupérer les discussions liées à cette réclamation
        $discussions = $entityManager->getRepository(Discussion::class)
            ->findBy(['reclamation' => $reclamation], ['date' => 'ASC']);

        return $this->render('discussion/index.html.twig', [
            'reclamation' => $reclamation,
            'discussions' => $discussions,
        ]);
    }
} 