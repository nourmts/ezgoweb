<?php

namespace App\Controller;

use App\Entity\Location;
use App\Entity\Partenaire;
use App\Repository\LocationRepository;
use App\Repository\PartenaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;

class StatistiqueController extends AbstractController
{
    private $logger;
    private $locationRepository;
    private $pdf;

    public function __construct(LoggerInterface $logger, LocationRepository $locationRepository, Pdf $pdf)
    {
        $this->logger = $logger;
        $this->locationRepository = $locationRepository;
        $this->pdf = $pdf;
    }

    #[Route('/statistiques', name: 'app_statistiques')]
    public function index(): Response
    {
        return $this->render('statistiques/index.html.twig');
    }

    #[Route('/api/statistiques/locations-par-partenaire', name: 'api_statistiques_locations_par_partenaire', methods: ['GET'])]
    public function getLocationsParPartenaire(LocationRepository $locationRepository): JsonResponse
    {
        try {
            $stats = $locationRepository->getLocationsParPartenaire();
            $this->logger->info('Statistiques locations par partenaire:', ['data' => $stats]);
            
            if (empty($stats)) {
                return $this->json([
                    'data' => [],
                    'message' => 'Aucune donnée disponible'
                ]);
            }

            return $this->json([
                'data' => $stats,
                'type' => 'pie',
                'title' => 'Nombre de locations par partenaire'
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la récupération des statistiques:', ['error' => $e->getMessage()]);
            return $this->json(['error' => 'Une erreur est survenue'], 500);
        }
    }

    #[Route('/api/statistiques/services-par-partenaire', name: 'api_statistiques_services_par_partenaire', methods: ['GET'])]
    public function getServicesParPartenaire(LocationRepository $locationRepository): JsonResponse
    {
        try {
            $stats = $locationRepository->getServicesParPartenaire();
            $this->logger->info('Statistiques services par partenaire:', ['data' => $stats]);
            
            if (empty($stats)) {
                return $this->json([
                    'data' => [],
                    'message' => 'Aucune donnée disponible'
                ]);
            }

            return $this->json([
                'data' => $stats,
                'type' => 'bar',
                'title' => 'Répartition des services par partenaire'
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la récupération des statistiques:', ['error' => $e->getMessage()]);
            return $this->json(['error' => 'Une erreur est survenue'], 500);
        }
    }

    #[Route('/api/statistiques/marques-plus-demandees', name: 'api_statistiques_marques_plus_demandees', methods: ['GET'])]
    public function getMarquesPlusDemandees(LocationRepository $locationRepository): JsonResponse
    {
        try {
            $stats = $locationRepository->getMarquesPlusDemandees();
            $this->logger->info('Statistiques marques plus demandées:', ['data' => $stats]);
            
            if (empty($stats)) {
                return $this->json([
                    'data' => [],
                    'message' => 'Aucune donnée disponible'
                ]);
            }

            return $this->json([
                'data' => $stats,
                'type' => 'column',
                'title' => 'Marques les plus demandées'
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la récupération des statistiques:', ['error' => $e->getMessage()]);
            return $this->json(['error' => 'Une erreur est survenue'], 500);
        }
    }

    #[Route('/api/statistiques/repartition-services', name: 'api_statistiques_repartition_services', methods: ['GET'])]
    public function getRepartitionServices(LocationRepository $locationRepository): JsonResponse
    {
        try {
            $stats = $locationRepository->getRepartitionServices();
            $this->logger->info('Statistiques répartition services:', ['data' => $stats]);
            
            if (empty($stats)) {
                return $this->json([
                    'data' => [],
                    'message' => 'Aucune donnée disponible'
                ]);
            }

            return $this->json([
                'data' => $stats,
                'type' => 'pie',
                'title' => 'Répartition des services'
            ]);
        } catch (\Exception $e) {
            $this->logger->error('Erreur lors de la récupération des statistiques:', ['error' => $e->getMessage()]);
            return $this->json(['error' => 'Une erreur est survenue'], 500);
        }
    }

    #[Route('/api/statistiques/pdf', name: 'app_statistiques_pdf', methods: ['GET'])]
    public function generatePdf(): PdfResponse
    {
        $data = [
            'locationsParPartenaire' => $this->locationRepository->getLocationsParPartenaire(),
            'servicesParPartenaire' => $this->locationRepository->getServicesParPartenaire(),
            'marquesPlusDemandees' => $this->locationRepository->getMarquesPlusDemandees(),
            'repartitionServices' => $this->locationRepository->getRepartitionServices(),
        ];

        $html = $this->renderView('statistiques/pdf.html.twig', [
            'data' => $data,
            'date' => new \DateTime(),
        ]);

        return new PdfResponse(
            $this->pdf->getOutputFromHtml($html),
            'statistiques.pdf'
        );
    }
} 