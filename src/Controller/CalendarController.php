<?php

namespace App\Controller;

use App\Repository\ReservationsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class CalendarController extends AbstractController
{
    #[Route('/admin/calendar', name: 'app_calendar')]
    public function index(): Response
    {
        return $this->render('calendar/index.html.twig');
    }

    #[Route('/admin/calendar/events', name: 'app_calendar_events')]
    public function events(ReservationsRepository $reservationsRepository): JsonResponse
    {
        $reservations = $reservationsRepository->findAll();
        $events = [];

        foreach ($reservations as $reservation) {
            if (!$reservation->getDateRes()) {
                continue;
            }
            $car = $reservation->getCar();
            $title = ($car ? $car->getMarque() : 'Voiture inconnue') . ' - ' . $reservation->getNameRes();
            $events[] = [
                'title' => $title,
                'start' => $reservation->getDateRes()->format('Y-m-d'),
            ];
        }

        // Add a test event if no reservations exist
        if (empty($events)) {
            $events[] = [
                'title' => 'Test Reservation',
                'start' => (new \DateTime())->format('Y-m-d'),
            ];
        }

        return new JsonResponse($events);
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