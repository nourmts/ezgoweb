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

        // Récupérer toutes les catégories uniques
        $categories = [];
        foreach ($reclamations as $reclamation) {
            $categorie = $reclamation->getCategorie();
            if ($categorie && !in_array($categorie, $categories)) {
                $categories[] = $categorie;
            }
        }

        return $this->render('back/homedashboard/index.html.twig', [
            'reclamations' => $reclamations,
            'categories' => $categories,
        ]);
    }

    #[Route('/stats/by-status', name: 'app_back_stats_by_status', methods: ['GET'])]
    public function getStatsByStatus(Request $request, ReclamationRepository $reclamationRepository): JsonResponse
    {
        // Récupérer les paramètres de date
        $startDate = $request->query->get('startDate', null);
        $endDate = $request->query->get('endDate', null);
        
        // Convertir les dates si elles sont fournies
        $startDateTime = null;
        $endDateTime = null;
        
        if ($startDate) {
            $startDateTime = \DateTime::createFromFormat('d/m/Y', $startDate);
            $startDateTime->setTime(0, 0, 0);
        }
        
        if ($endDate) {
            $endDateTime = \DateTime::createFromFormat('d/m/Y', $endDate);
            $endDateTime->setTime(23, 59, 59);
        }
        
        // Récupérer les données filtrées
        $reclamations = $reclamationRepository->findByDateRange($startDateTime, $endDateTime);
        
        // Compter les réclamations par état
        $countByStatus = [
            'non traité' => 0,
            'en cours' => 0,
            'traité' => 0
        ];
        
        foreach ($reclamations as $reclamation) {
            $etat = $reclamation->getEtat();
            if (isset($countByStatus[$etat])) {
                $countByStatus[$etat]++;
            }
        }
        
        // Formater les données pour le graphique en camembert
        $result = [];
        foreach ($countByStatus as $etat => $count) {
            $result[] = [
                'etat' => $etat,
                'count' => $count
            ];
        }
        
        return new JsonResponse($result);
    }
    
    #[Route('/stats/by-category', name: 'app_back_stats_by_category', methods: ['GET'])]
    public function getStatsByCategory(ReclamationRepository $reclamationRepository): JsonResponse
    {
        // Récupérer toutes les réclamations
        $reclamations = $reclamationRepository->findAll();
        
        // Compter les réclamations par catégorie
        $countByCategory = [];
        
        foreach ($reclamations as $reclamation) {
            $categorie = $reclamation->getCategorie() ?: 'Non définie';
            
            if (!isset($countByCategory[$categorie])) {
                $countByCategory[$categorie] = 0;
            }
            
            $countByCategory[$categorie]++;
        }
        
        // Formater les données pour le graphique en barres
        $result = [];
        foreach ($countByCategory as $categorie => $count) {
            $result[] = [
                'categorie' => $categorie,
                'count' => $count
            ];
        }
        
        return new JsonResponse($result);
    }
    
    #[Route('/search/reclamations', name: 'app_back_search_reclamations', methods: ['GET'])]
    public function searchReclamations(Request $request, ReclamationRepository $reclamationRepository): JsonResponse
    {
        // Récupérer les paramètres de recherche
        $searchTerm = $request->query->get('q', '');
        $category = $request->query->get('category', '');
        
        // Effectuer la recherche dans le repository
        $reclamations = $reclamationRepository->searchReclamations($searchTerm, $category);
        
        // Formater les données pour la réponse
        $result = [];
        
        foreach ($reclamations as $reclamation) {
            $reclamationText = $reclamation->getReclamation();
            $shortReclamation = strlen($reclamationText) > 50 ? 
                substr($reclamationText, 0, 50) . '...' : 
                $reclamationText;
            
            $result[] = [
                'id' => $reclamation->getIdReclamation(),
                'categorie' => $reclamation->getCategorie(),
                'reclamation' => $reclamationText,
                'reclamationShort' => $shortReclamation,
                'etat' => $reclamation->getEtat(),
                'date' => $reclamation->getDate() ? $reclamation->getDate()->format('d/m/Y') : 'N/A'
            ];
        }
        
        return new JsonResponse($result);
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
