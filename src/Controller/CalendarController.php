<?php

namespace App\Controller;

use App\Repository\ReservationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Psr\Log\LoggerInterface;

class CalendarController extends AbstractController
{
    private $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('/admin/calendar', name: 'app_calendar')]
    public function index(): Response
    {
        // Check if user is logged in and has admin role
        if (!$this->getUser()) {
            $this->logger->warning('Unauthorized access attempt to calendar - user not logged in');
            return $this->redirectToRoute('app_login');
        }

        if (!$this->isGranted('ROLE_ADMIN')) {
            $this->logger->warning('Unauthorized access attempt to calendar - user not admin', [
                'user' => $this->getUser()->getUserIdentifier()
            ]);
            throw $this->createAccessDeniedException('You must be an admin to access this page.');
        }

        return $this->render('calendar/index.html.twig');
    }

    #[Route('/admin/calendar/events', name: 'app_calendar_events', methods: ['GET'])]
    public function events(ReservationsRepository $reservationsRepository): JsonResponse
    {
        try {
            // Check if user is logged in and has admin role
            if (!$this->getUser()) {
                $this->logger->warning('Unauthorized API access attempt - user not logged in');
                return new JsonResponse(['error' => 'Authentication required'], Response::HTTP_UNAUTHORIZED, [
                    'Content-Type' => 'application/json',
                    'Access-Control-Allow-Origin' => '*'
                ]);
            }

            if (!$this->isGranted('ROLE_ADMIN')) {
                $this->logger->warning('Unauthorized API access attempt - user not admin', [
                    'user' => $this->getUser()->getUserIdentifier()
                ]);
                return new JsonResponse(['error' => 'Admin access required'], Response::HTTP_FORBIDDEN, [
                    'Content-Type' => 'application/json',
                    'Access-Control-Allow-Origin' => '*'
                ]);
            }

            $this->logger->info('Fetching calendar events');
            
            $reservations = $reservationsRepository->findAll();
            $events = [];

            foreach ($reservations as $reservation) {
                try {
                    if (!$reservation->getDateRes()) {
                        $this->logger->warning('Reservation has no date', ['id' => $reservation->getId()]);
                        continue;
                    }

                    $car = $reservation->getCar();
                    if (!$car) {
                        $this->logger->warning('Reservation has no car', ['id' => $reservation->getId()]);
                        continue;
                    }

                    $title = $car->getMarque() . ' - ' . $reservation->getNameRes();
                    $status = $reservation->getStatut() ?? 'en attente';
                    $color = $this->getStatusColor($status);
                    
                    $event = [
                        'id' => $reservation->getId(),
                        'title' => $title,
                        'start' => $reservation->getDateRes()->format('Y-m-d'),
                        'backgroundColor' => $color,
                        'borderColor' => $color,
                        'textColor' => '#ffffff',
                        'extendedProps' => [
                            'status' => $status,
                            'customer' => $reservation->getNameRes(),
                            'car' => $car->getMarque()
                        ]
                    ];

                    $events[] = $event;
                    $this->logger->debug('Added event', ['event' => $event]);

                } catch (\Exception $e) {
                    $this->logger->error('Error processing reservation', [
                        'id' => $reservation->getId(),
                        'error' => $e->getMessage(),
                        'trace' => $e->getTraceAsString()
                    ]);
                }
            }

            // Add a test event if no reservations exist
            if (empty($events)) {
                $this->logger->info('No events found, adding test event');
                $events[] = [
                    'id' => 'test',
                    'title' => 'Test Reservation',
                    'start' => (new \DateTime())->format('Y-m-d'),
                    'backgroundColor' => '#6c757d',
                    'borderColor' => '#6c757d',
                    'textColor' => '#ffffff',
                    'extendedProps' => [
                        'status' => 'test',
                        'customer' => 'Test Customer',
                        'car' => 'Test Car'
                    ]
                ];
            }

            $this->logger->info('Successfully fetched events', ['count' => count($events)]);
            return new JsonResponse($events, Response::HTTP_OK, [
                'Content-Type' => 'application/json',
                'Access-Control-Allow-Origin' => '*'
            ]);

        } catch (\Exception $e) {
            $this->logger->error('Error in calendar events endpoint', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return new JsonResponse([
                'error' => 'An error occurred while fetching events',
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR, [
                'Content-Type' => 'application/json',
                'Access-Control-Allow-Origin' => '*'
            ]);
        }
    }

    private function getStatusColor(string $status): string
    {
        return match($status) {
            'confirmé' => '#28a745', // green
            'en attente' => '#ffc107', // yellow
            'annulé' => '#dc3545', // red
            default => '#6c757d' // gray
        };
    }
} 