<?php

namespace App\Controller\back;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ReclamationRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Security\Csrf\CsrfToken;

final class homedashboardController extends AbstractController
{
    #[Route('/back', name: 'app_back_homedashboard')]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAll();

        return $this->render('back/homedashboard/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }

    #[Route('/reclamation/delete/{id}', name: 'app_back_reclamation_delete', methods: ['DELETE'])]
    public function delete(
        int $id,
        ReclamationRepository $repository,
        EntityManagerInterface $em,
        Request $request,
        CsrfTokenManagerInterface $csrfTokenManager
    ): JsonResponse {
        $reclamation = $repository->find($id);
        if (!$reclamation) {
            return new JsonResponse(['success' => false, 'message' => 'Réclamation introuvable.'], 404);
        }

        // Récupérer le token CSRF de la requête
        $content = $request->getContent();
        $csrfToken = $request->request->get('_token');
        
        // Si le token n'est pas dans request, il est peut-être dans le contenu body brut
        if (!$csrfToken && $content) {
            $data = json_decode($content, true);
            if (is_array($data) && isset($data['_token'])) {
                $csrfToken = $data['_token'];
            }
        }
        
        // Désactiver temporairement la vérification CSRF si nécessaire pour le développement
        // À enlever en production
        /*
        if (!$csrfToken) {
            $csrfToken = $csrfTokenManager->getToken('delete_reclamation')->getValue();
        }
        */
        
        if (!$csrfToken || !$csrfTokenManager->isTokenValid(new CsrfToken('delete_reclamation', $csrfToken))) {
            return new JsonResponse(['success' => false, 'message' => 'Token CSRF invalide ou manquant.'], 403);
        }

        try {
            $em->remove($reclamation);
            $em->flush();
        } catch (\Exception $e) {
            return new JsonResponse(['success' => false, 'message' => 'Erreur lors de la suppression: ' . $e->getMessage()], 500);
        }

        return new JsonResponse(['success' => true, 'id' => $id]);
    }

    #[Route('/reclamation/start/{id}', name: 'app_back_reclamation_start', methods: ['POST'])]
    public function startDiscussion(
        int $id,
        ReclamationRepository $repository,
        EntityManagerInterface $em
    ): JsonResponse {
        $reclamation = $repository->find($id);
        if (!$reclamation) {
            return new JsonResponse(['success' => false, 'message' => 'Réclamation introuvable.'], 404);
        }

        if ($reclamation->getEtat() === 'en cours') {
            return new JsonResponse(['success' => true, 'message' => 'La réclamation est déjà en cours.', 'id' => $id], 200);
        }

        // Ne pas changer l'état si déjà traité
        if ($reclamation->getEtat() !== 'traité') {
            $reclamation->setEtat('en cours');
            try {
                $em->flush();
            } catch (\Exception $e) {
                return new JsonResponse(['success' => false, 'message' => 'Erreur lors de la mise à jour: ' . $e->getMessage()], 500);
            }
        }

        return new JsonResponse(['success' => true, 'id' => $id, 'etat' => $reclamation->getEtat()]);
    }
}
