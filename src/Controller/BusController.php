<?php

namespace App\Controller;

use App\Entity\Bus;
use App\Form\Bus1Type;
use App\Repository\BusRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/back/bus')]
final class BusController extends AbstractController
{
    #[Route('/', name: 'app_bus_index', methods: ['GET', 'POST'])]
    public function index(Request $request, BusRepository $busRepository, EntityManagerInterface $entityManager): Response
    {
        $bus = new Bus();
        $form = $this->createForm(Bus1Type::class, $bus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bus);
            $entityManager->flush();

            $this->addFlash('success', 'Le bus a été ajouté avec succès.');
            return $this->redirectToRoute('app_bus_index', [], Response::HTTP_SEE_OTHER);
        } elseif ($form->isSubmitted()) {
            $this->addFlash('error', 'Le formulaire contient des erreurs. Veuillez les corriger.');
        }

        return $this->render('back/bus/gestion_bus.html.twig', [
            'buses' => $busRepository->findAll(),
            'form' => $form,
        ]);
    }

    #[Route('/stat', name: 'app_bus_stats', methods: ['GET'])]
    public function stats(BusRepository $busRepository): Response
    {
        try {
            // Get all statistics
            $categoryStats = $busRepository->countByCategorie();
            $stationStats = $busRepository->countByStation();
            $capacityStats = $busRepository->getCapacityStats();
            $statusStats = $busRepository->getBusStatusStats();
            $monthlyStats = $busRepository->getMonthlyStats();
            $detailedStats = $busRepository->getDetailedStats();

            if (empty($categoryStats)) {
                $this->addFlash('warning', 'Aucune donnée disponible pour les statistiques.');
                return $this->redirectToRoute('app_bus_index');
            }

            // Prepare data for charts
            $chartData = [['Categorie', 'Nombre']];
            $totalBuses = array_sum(array_column($categoryStats, 'count'));

            foreach ($categoryStats as $stat) {
                $chartData[] = [$stat['categorie'], (int)$stat['count']];
            }

            // Prepare percentage data
            $percentageData = [['Categorie', 'Pourcentage']];
            foreach ($categoryStats as $stat) {
                $percentage = ($stat['count'] / $totalBuses) * 100;
                $percentageData[] = [$stat['categorie'], round($percentage, 2)];
            }

            // Prepare station data
            $stationData = [['Station', 'Nombre']];
            foreach ($stationStats as $stat) {
                $stationData[] = [$stat['station'], (int)$stat['count']];
            }

            // Prepare capacity data
            $capacityData = [['Categorie', 'Moyenne', 'Minimum', 'Maximum']];
            foreach ($capacityStats as $stat) {
                $capacityData[] = [
                    $stat['categorie'],
                    round($stat['avg_capacity'], 2),
                    (int)$stat['min_capacity'],
                    (int)$stat['max_capacity']
                ];
            }

            return $this->render('back/bus/stat.html.twig', [
                'stats' => json_encode($chartData),
                'percentageStats' => json_encode($percentageData),
                'stationStats' => json_encode($stationData),
                'capacityStats' => json_encode($capacityData),
                'statusStats' => $statusStats,
                'monthlyStats' => $monthlyStats,
                'detailedStats' => $detailedStats
            ]);
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors du calcul des statistiques.');
            return $this->redirectToRoute('app_bus_index');
        }
    }

    #[Route('/new', name: 'app_bus_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bu = new Bus();
        $form = $this->createForm(Bus1Type::class, $bu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bu);
            $entityManager->flush();

            return $this->redirectToRoute('app_bus_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bus/new.html.twig', [
            'bu' => $bu,
            'form' => $form,
        ]);
    }

    #[Route('/show/{imatriculation}', name: 'app_bus_show', methods: ['GET'])]
    public function show(Bus $bu): Response
    {
        return $this->render('bus/show.html.twig', [
            'bu' => $bu,
        ]);
    }

    #[Route('/edit/{imatriculation}', name: 'app_bus_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bus $bu, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Bus1Type::class, $bu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bus_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bus/edit.html.twig', [
            'bu' => $bu,
            'form' => $form,
        ]);
    }

    #[Route('/delete/{imatriculation}', name: 'app_bus_delete', methods: ['POST'])]
    public function delete(Request $request, Bus $bu, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bu->getImatriculation(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($bu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bus_index', [], Response::HTTP_SEE_OTHER);
    }
}
