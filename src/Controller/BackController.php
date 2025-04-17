<?php

namespace App\Controller;

use App\Entity\Station;
use App\Form\StationType;
use App\Repository\StationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Entity\Bus;
use App\Form\Bus1Type;
use App\Repository\BusRepository;
use App\Entity\Ticket;
use App\Form\TicketType;
use App\Repository\TicketRepository;

#[Route('/back')]
final class BackController extends AbstractController
{
    #[Route('/dashbord', name: 'app_dashbord')]
    public function index(): Response
    {
        return $this->render('back/dashbord.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
   /* #[Route('/bus', name: 'app_bus', methods: ['GET', 'POST'])]
    public function bus(Request $request, EntityManagerInterface $entityManager, BusRepository $busRepository): Response
    {
        $bus = new Bus();
        $form = $this->createForm(Bus1Type::class, $bus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bus);
            $entityManager->flush();

            return $this->redirectToRoute('app_bus', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/bus/gestion_bus.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form,
            'buses' => $busRepository->findAll(),
        ]);
    }*/
    #[Route('/bus', name: 'app_bus', methods: ['GET', 'POST'])]
public function bus(Request $request, EntityManagerInterface $entityManager, BusRepository $busRepository): Response
{
    $bus = new Bus();
    $form = $this->createForm(Bus1Type::class, $bus);
    $form->handleRequest($request);

    if ($form->isSubmitted()) {
        if ($form->isValid()) {
            $entityManager->persist($bus);
            $entityManager->flush();
            $this->addFlash('success', 'Bus créé avec succès!');
            return $this->redirectToRoute('app_bus', [], Response::HTTP_SEE_OTHER);
        } 
        
    }

    return $this->render('back/bus/gestion_bus.html.twig', [
        'form' => $form->createView(),
        'buses' => $busRepository->findAll(),
    ]);
}
    #[Route('/base', name: 'app_base')]
    public function base(): Response
    {
        return $this->render('back/base.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/gestion_station', name: 'app_gestion_station', methods: ['GET', 'POST'])]
    public function gestion_station(Request $request, EntityManagerInterface $entityManager, StationRepository $stationRepository): Response
    {
        $station = new Station();
        $form = $this->createForm(StationType::class, $station);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($station);
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_station', [], Response::HTTP_SEE_OTHER);
        }

        // Get all stations for display
        $stations = $stationRepository->findAll();
        
        // Get the most recent station for detailed view
        $latestStation = !empty($stations) ? $stations[0] : null;

        return $this->render('back/gestion_station.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form,
            'station' => $latestStation,
            'stations' => $stations,
        ]);
    }
    #[Route('/modifier_station/{idS}', name: 'app_modifier_station', methods: ['GET', 'POST'])]
    public function modifier(Request $request, EntityManagerInterface $entityManager, Station $station): Response
    {
        $form = $this->createForm(StationType::class, $station);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_station', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/station_modifier.html.twig', [
            'station' => $station,
            'form' => $form,
        ]);
    }

    #[Route('/modifier_bus/{imatriculation}', name: 'app_modifier_bus', methods: ['GET', 'POST'])]
    public function modifier_bus(Request $request, Bus $bus, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Bus1Type::class, $bus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bus', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/bus/modifier_Bus.html.twig', [
            'bus' => $bus,
            'form' => $form,
        ]);
    }
    


    /////ticket
    #[Route('/ticket', name: 'app_ticket', methods: ['GET', 'POST'])]
    public function ticket(Request $request, EntityManagerInterface $entityManager, TicketRepository $ticketRepository): Response
    {
        $ticket = new Ticket();
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ticket);
            $entityManager->flush();

            return $this->redirectToRoute('app_ticket', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/ticket/gestion_ticket.html.twig', [
            'controller_name' => 'HomeController',
            'form' => $form,
            'tickets' => $ticketRepository->findAll(),
        ]); 
    }
    #[Route('/modifier_ticket/{ticketid}', name: 'app_modifier_ticket', methods: ['GET', 'POST'])]
    public function modifier_ticket(Request $request, Ticket $ticket, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(TicketType::class, $ticket);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_ticket', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/ticket/modifier_ticket.html.twig', [
            'ticket' => $ticket,
            'form' => $form,
        ]);
    }

}
