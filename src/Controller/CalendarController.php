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
        return $this->render('calendar/index.html.twig');
    }

    #[Route('/admin/calendar/events', name: 'app_calendar_events', methods: ['GET'])]
    public function events(ReservationsRepository $reservationsRepository): JsonResponse
    {
        try {
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
            return new JsonResponse($events);

        } catch (\Exception $e) {
            $this->logger->error('Error in calendar events endpoint', [
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return new JsonResponse([
                'error' => 'An error occurred while fetching events',
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
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