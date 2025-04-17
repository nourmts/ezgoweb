<?php

namespace App\Controller;

use App\Repository\StationRepository;
use App\Repository\BusRepository;
use App\Entity\Ticket;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/pi')]

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('fronte/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('fronte/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(): Response
    {
        return $this->render('fronte/pricing.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/our_car', name: 'app_our_car')]
    public function our_car(): Response
    {
        return $this->render('fronte/our_car.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('fronte/blog.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(StationRepository $stationRepository, BusRepository $busRepository): Response
    {
        $stations = $stationRepository->findAll();
        $buses = $busRepository->findAll();
        
        // Debug output
        error_log('Stations: ' . print_r($stations, true));
        error_log('Buses: ' . print_r($buses, true));

        // Convert buses to array format for JavaScript
        $busesArray = array_map(function($bus) {
            return [
                'imatriculation' => $bus->getImatriculation(),
                'idStation' => $bus->getIdStation(),
                'nbPlace' => $bus->getNbPlace(),
                'dateArrive' => $bus->getDateArrive()->format('Y-m-d H:i:s'),
                'dateSortie' => $bus->getDateSortie()->format('Y-m-d H:i:s'),
                'categorie' => $bus->getCategorie()
            ];
        }, $buses);

        return $this->render('fronte/contact.html.twig', [
            'controller_name' => 'HomeController',
            'stations' => $stations,
            'buses' => $busesArray,
        ]);
    }

    #[Route('/get-buses/{stationId}', name: 'app_get_buses', methods: ['GET'])]
    public function getBuses(int $stationId, BusRepository $busRepository): JsonResponse
    {
        $buses = $busRepository->findByStation($stationId);
        return $this->json($buses);
    }

    #[Route('/purchase-ticket/{busId}', name: 'app_purchase_ticket', methods: ['POST'])]
    public function purchaseTicket(Request $request, int $busId, EntityManagerInterface $entityManager, BusRepository $busRepository): JsonResponse
    {
        // Find the Bus entity
        $bus = $busRepository->find($busId);
        if (!$bus) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Bus non trouvé'
            ], 404);
        }

        $ticket = new Ticket();
        $ticket->setBus($bus);
        $ticket->setPrix(30); // Prix par défaut
        $ticket->setDateAchat(new \DateTime());

        try {
            $entityManager->persist($ticket);
            $entityManager->flush();

            return new JsonResponse([
                'success' => true,
                'message' => 'Ticket acheté avec succès!',
                'ticket' => [
                    'id' => $ticket->getTicketid(),
                    'busId' => $ticket->getBusId(),
                    'prix' => $ticket->getPrix(),
                    'dateAchat' => $ticket->getDateAchat()->format('Y-m-d H:i:s')
                ]
            ]);
        } catch (\Exception $e) {
            return new JsonResponse([
                'success' => false,
                'message' => 'Erreur lors de l\'achat du ticket: ' . $e->getMessage()
            ], 500);
        }
    }
}
