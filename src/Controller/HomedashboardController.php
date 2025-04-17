<?php

namespace App\Controller;

use App\Repository\ReclamationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomedashboardController extends AbstractController
{
    #[Route('/back', name: 'app_homedashboard')]
    public function index(ReclamationRepository $reclamationRepository): Response
    {
        $reclamations = $reclamationRepository->findAllSorted();
        
        return $this->render('back/homedashboard/index.html.twig', [
            'reclamations' => $reclamations,
        ]);
    }
} 