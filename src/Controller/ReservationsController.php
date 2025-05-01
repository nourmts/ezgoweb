<?php

namespace App\Controller;

use App\Entity\Reservations;
use App\Entity\Voiture;
use App\Form\ReservationsType;
use App\Repository\ReservationsRepository;
use App\Repository\VoitureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class ReservationsController extends AbstractController
{
    #[Route('/admin/reservations', name: 'app_reservations_index', methods: ['GET'])]
    public function index(ReservationsRepository $reservationsRepository): Response
    {
        $reservations = $reservationsRepository->findAll();
        
        // Debug information
        dump($reservations); // This will show in the debug toolbar
        
        // Add a flash message with the count
        $this->addFlash('info', sprintf('Found %d reservations', count($reservations)));
        
        return $this->render('reservations/index.html.twig', [
            'reservations' => $reservations,
        ]);
    }

    #[Route('/admin/reservations/search', name: 'app_reservations_search', methods: ['GET'])]
    public function search(Request $request, ReservationsRepository $reservationsRepository): JsonResponse
    {
        try {
            $searchTerm = $request->query->get('q', '');
            error_log('Search request received with term: ' . $searchTerm);
            
            if (empty($searchTerm)) {
                error_log('Empty search term, returning empty array');
                return new JsonResponse([]);
            }

            try {
                $reservations = $reservationsRepository->search($searchTerm);
                error_log('Found ' . count($reservations) . ' reservations');
            } catch (\Exception $e) {
                error_log('Error in repository search: ' . $e->getMessage());
                error_log('Stack trace: ' . $e->getTraceAsString());
                throw $e;
            }
            
            if (empty($reservations)) {
                error_log('No reservations found');
                return new JsonResponse([]);
            }

            $data = [];
            foreach ($reservations as $reservation) {
                try {
                    $car = $reservation->getCar();
                    $data[] = [
                        'idRes' => $reservation->getIdRes(),
                        'nameRes' => $reservation->getNameRes(),
                        'dateRes' => $reservation->getDateRes() ? $reservation->getDateRes()->format('Y-m-d') : null,
                        'statut' => $reservation->getStatut(),
                        'car' => $car ? [
                            'marque' => $car->getMarque(),
                            'immatriculation' => $car->getImmatriculation()
                        ] : null
                    ];
                } catch (\Exception $e) {
                    error_log('Error processing reservation ' . $reservation->getIdRes() . ': ' . $e->getMessage());
                    continue;
                }
            }

            error_log('Returning ' . count($data) . ' processed reservations');
            return new JsonResponse($data);
        } catch (\Exception $e) {
            error_log('Search error: ' . $e->getMessage());
            error_log('Stack trace: ' . $e->getTraceAsString());
            return new JsonResponse(['error' => 'Une erreur est survenue lors de la recherche: ' . $e->getMessage()], 500);
        }
    }

    #[Route('/admin/reservations/{idRes}', name: 'app_reservations_show', methods: ['GET'])]
    public function show(string $idRes, ReservationsRepository $reservationsRepository): Response
    {
        $idRes = (int) $idRes;
        $reservation = $reservationsRepository->find($idRes);
        
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation demandée n\'existe pas.');
        }

        return $this->render('reservations/show.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/admin/reservations/{idRes}/edit', name: 'app_reservations_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, int $idRes, ReservationsRepository $reservationsRepository, EntityManagerInterface $entityManager): Response
    {
        $reservation = $reservationsRepository->find($idRes);
        
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation demandée n\'existe pas.');
        }

        $form = $this->createForm(ReservationsType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Update car status if changed
                $car = $reservation->getCar();
                if ($car) {
                    if ($reservation->getStatut() === 'annulé') {
                        $car->setEtat('disponible');
                    } elseif ($reservation->getStatut() === 'confirmé') {
                        $car->setEtat('réservé');
                    }
                }
                
                $entityManager->flush();
                $this->addFlash('success', 'Réservation mise à jour avec succès.');
                return $this->redirectToRoute('app_reservations_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la mise à jour de la réservation: ' . $e->getMessage());
            }
        }

        return $this->render('reservations/edit.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/reservations/{idRes}/delete', name: 'app_reservations_delete', methods: ['POST'])]
    public function delete(Request $request, int $idRes, ReservationsRepository $reservationsRepository, EntityManagerInterface $entityManager): Response
    {
        $reservation = $reservationsRepository->find($idRes);
        
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation demandée n\'existe pas.');
        }

        try {
            $car = $reservation->getCar();
            if ($car) {
                $car->setEtat('disponible');
            }
            
            $entityManager->remove($reservation);
            $entityManager->flush();
            
            $this->addFlash('success', 'Réservation supprimée avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de la suppression de la réservation.');
        }

        return $this->redirectToRoute('app_reservations_index');
    }

    // Front-end routes
    #[Route('/reservations/{idRes}/cancel', name: 'app_reservations_cancel', methods: ['POST'])]
    public function cancel(Request $request, int $idRes, ReservationsRepository $reservationsRepository, EntityManagerInterface $entityManager): Response
    {
        $reservation = $reservationsRepository->find($idRes);
        
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation demandée n\'existe pas.');
        }

        try {
            $reservation->setStatut('annulé');
            $car = $reservation->getCar();
            if ($car) {
                $car->setEtat('disponible');
            }
            
            $entityManager->flush();
            $this->addFlash('success', 'Réservation annulée avec succès.');
        } catch (\Exception $e) {
            $this->addFlash('error', 'Une erreur est survenue lors de l\'annulation de la réservation.');
        }

        return $this->redirectToRoute('front_voiture_index');
    }

    #[Route('/reservations/{id}/confirmation', name: 'app_reservations_confirmation', methods: ['GET'])]
    public function confirmation(Reservations $reservation): Response
    {
        return $this->render('reservations/front/confirmation.html.twig', [
            'reservation' => $reservation,
        ]);
    }

    #[Route('/reservations/new/{id}', name: 'app_reservations_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, VoitureRepository $voitureRepository, int $id): Response
    {
        $voiture = $voitureRepository->find($id);
        
        if (!$voiture) {
            throw $this->createNotFoundException('La voiture demandée n\'existe pas.');
        }

        // Check if car is available
        if ($voiture->getEtat() !== 'disponible') {
            $this->addFlash('error', 'Cette voiture n\'est pas disponible pour la réservation.');
            return $this->redirectToRoute('front_voiture_show', ['id' => $voiture->getId()]);
        }

        $reservation = new Reservations();
        $reservation->setCar($voiture);
        $reservation->setStatut('en attente');
        
        $form = $this->createForm(ReservationsType::class, $reservation, [
            'hide_car' => true
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $voiture->setEtat('réservé');
                $entityManager->persist($reservation);
                $entityManager->flush();

                $this->addFlash('success', 'Votre réservation a été créée avec succès.');
                return $this->redirectToRoute('app_reservations_confirmation', ['id' => $reservation->getId()]);
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la création de votre réservation. Veuillez réessayer.');
            }
        }

        return $this->render('reservations/front/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
            'selected_car' => $voiture
        ]);
    }

    #[Route('/admin/reservations/new', name: 'app_admin_reservations_new', methods: ['GET', 'POST'])]
    public function newAdmin(Request $request, EntityManagerInterface $entityManager): Response
    {
        $reservation = new Reservations();
        $form = $this->createForm(ReservationsType::class, $reservation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $car = $reservation->getCar();
                if ($car) {
                    $car->setEtat('réservé');
                }
                
                $entityManager->persist($reservation);
                $entityManager->flush();

                $this->addFlash('success', 'Réservation créée avec succès.');
                return $this->redirectToRoute('app_reservations_index');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la création de la réservation.');
            }
        }

        return $this->render('reservations/new.html.twig', [
            'reservation' => $reservation,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/admin/reservations/{idRes}/pdf', name: 'app_reservations_pdf', methods: ['GET'])]
    public function generatePdf(int $idRes, ReservationsRepository $reservationsRepository): Response
    {
        $reservation = $reservationsRepository->find($idRes);
        
        if (!$reservation) {
            throw $this->createNotFoundException('La réservation demandée n\'existe pas.');
        }

        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $pdfOptions->set('isHtml5ParserEnabled', true);
        $pdfOptions->set('isPhpEnabled', true);

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('reservations/pdf/confirmation.html.twig', [
            'reservation' => $reservation
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $output = $dompdf->output();
        
        $response = new Response($output);
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', 'attachment; filename="confirmation-reservation-' . $reservation->getIdRes() . '.pdf"');

        return $response;
    }
} 