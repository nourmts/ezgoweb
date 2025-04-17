<?php

namespace App\Controller;

use App\Repository\VoitureRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(VoitureRepository $voitureRepository, ReservationRepository $reservationRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        return $this->render('dashboard/index.html.twig', [
            'voitures' => $voitureRepository->findAll(),
            'reservations' => $reservationRepository->findAll(),
        ]);
    }
} 