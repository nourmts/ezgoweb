<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Discussion;
use App\Form\ReclamationType;
use App\Repository\ReclamationRepository;
use App\Repository\DiscussionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/reclamation')]
final class ReclamationController extends AbstractController
{
    #[Route(name: 'app_reclamation_index', methods: ['GET'])]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        return $this->render('/fronte/reclamation/index.html.twig', [
            'reclamations' => $reclamationRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_reclamation_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reclamation = new Reclamation();
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($reclamation);
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('/fronte/reclamation/new.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idReclamation}', name: 'app_reclamation_show', methods: ['GET'])]
    public function show(Reclamation $reclamation): Response
    {
        return $this->render('/fronte/reclamation/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idReclamation}/edit', name: 'app_reclamation_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ReclamationType::class, $reclamation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('/fronte/reclamation/edit.html.twig', [
            'reclamation' => $reclamation,
            'form' => $form,
        ]);
    }

    #[Route('/{idReclamation}/delete', name: 'app_reclamation_delete', methods: ['POST'])]
    public function delete(Request $request, Reclamation $reclamation, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete_reclamation_'.$reclamation->getIdReclamation(), $request->request->get('_token'))) {
            $entityManager->remove($reclamation);
            $entityManager->flush();

            $this->addFlash('success', 'Réclamation supprimée avec succès.');
        }

        return $this->redirectToRoute('app_reclamation_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route('/update-status/{id}', name: 'update_reclamation_status', methods: ['POST'])]
    public function updateStatus(int $id, Request $request, ReclamationRepository $reclamationRepository, EntityManagerInterface $em): JsonResponse
    {
        $reclamation = $reclamationRepository->find($id);

        if (!$reclamation) {
            return new JsonResponse(['success' => false, 'message' => 'Réclamation introuvable.'], 404);
        }

        $data = json_decode($request->getContent(), true);
        $etat = $data['etat'] ?? null;

        $validStates = ['non', 'en cours', 'résolu'];
        if (!in_array($etat, $validStates, true)) {
            return new JsonResponse(['success' => false, 'message' => 'État invalide.'], 400);
        }

        $reclamation->setEtat($etat);
        $em->persist($reclamation);
        $em->flush();

        return new JsonResponse(['success' => true]);
    }

    #[Route('/reclamation/show/{id}', name: 'app_back_reclamation_show', methods: ['GET'])]
    public function showBack(int $id, ReclamationRepository $repository): Response
    {
        $reclamation = $repository->find($id);
        if (!$reclamation) {
            throw $this->createNotFoundException(sprintf('Réclamation avec ID %d introuvable.', $id));
        }

        return $this->render('back/homedashboard/show.html.twig', [
            'reclamation' => $reclamation,
        ]);
    }

    #[Route('/{idReclamation}/discussion', name: 'app_discussion', methods: ['GET', 'POST'])]
    public function discussion(
        Request $request,
        Reclamation $reclamation, 
        DiscussionRepository $discussionRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Récupération des discussions existantes
        $discussions = $discussionRepository->findBy(
            ['reclamation' => $reclamation], 
            ['date' => 'ASC']
        );

        // Traitement du formulaire d'envoi de message
        if ($request->isMethod('POST')) {
            $messageContent = $request->request->get('message');

            if (!empty($messageContent)) {
                $discussion = new Discussion();
                $discussion->setMessage($messageContent);
                $discussion->setReclamation($reclamation);
                $discussion->setDate(new \DateTime());
                
                // Définir l'auteur comme Utilisateur
                $discussion->setAuteur('Utilisateur');
                
                $entityManager->persist($discussion);
                $entityManager->flush();

                $this->addFlash('success', 'Message envoyé avec succès.');
                
                // Redirection pour éviter la soumission multiple
                return $this->redirectToRoute('app_discussion', ['idReclamation' => $reclamation->getIdReclamation()]);
            } else {
                $this->addFlash('error', 'Le message ne peut pas être vide.');
            }
        }

        // Mettre à jour l'état de la réclamation si elle est nouvelle
        if ($reclamation->getEtat() !== 'traité' && $reclamation->getEtat() !== 'en cours') {
            $reclamation->setEtat('en cours');
            $entityManager->flush();
        }

        return $this->render('discussion/index.html.twig', [
            'reclamation' => $reclamation,
            'discussions' => $discussions,
        ]);
    }
}
