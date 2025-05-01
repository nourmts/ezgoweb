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
    #[Route(name: 'app_bus_index', methods: ['GET', 'POST'])]
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

    #[Route('/{imatriculation}', name: 'app_bus_show', methods: ['GET'])]
    public function show(Bus $bu): Response
    {
        return $this->render('bus/show.html.twig', [
            'bu' => $bu,
        ]);
    }

    #[Route('/{imatriculation}/edit', name: 'app_bus_edit', methods: ['GET', 'POST'])]
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

    #[Route('/{imatriculation}', name: 'app_bus_delete', methods: ['POST'])]
    public function delete(Request $request, Bus $bu, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bu->getImatriculation(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($bu);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bus_index', [], Response::HTTP_SEE_OTHER);
    }
    #[Route('/stats', name: 'app_stats', )]
    public function stats(BusRepository $bus)
    {
        $stats=$bus->countByType();
        return $this->render('back/bus/gestion_bus.html.twig', ['stats' => $stats]);
    }

}
