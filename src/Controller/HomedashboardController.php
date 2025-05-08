<?php

namespace App\Controller;

use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomedashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_homedashboard')]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAll();
        
        // Vérifier que les réclamations sont correctement récupérées
        if (empty($reclamations)) {
            // Si pas de réclamations, fournir au moins un tableau vide pour éviter les erreurs dans le template
            $reclamations = [];
            $this->addFlash('info', 'Aucune réclamation trouvée dans la base de données.');
        }
        
        return $this->render('back/homedashboard/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
} 