<?php

namespace App\Controller;

use App\Entity\Voiture;
use App\Form\VoitureType;
use App\Repository\VoitureRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use App\Repository\ReservationsRepository;

#[Route('/')]
class VoitureController extends AbstractController
{
    // Front-end routes
    #[Route('/cars', name: 'front_voiture_index', methods: ['GET'])]
    public function frontIndex(Request $request, VoitureRepository $voitureRepository): Response
    {
        $etat = $request->query->get('etat');
        $contrat = $request->query->get('contrat');
        
        $voitures = $voitureRepository->findByFilters($etat, $contrat);
        
        return $this->render('voiture/front/index.html.twig', [
            'voitures' => $voitures,
        ]);
    }

    #[Route('/cars/{id}', name: 'front_voiture_show', methods: ['GET'])]
    public function frontShow(Voiture $voiture): Response
    {
        return $this->render('voiture/front/show.html.twig', [
            'voiture' => $voiture,
        ]);
    }

    #[Route('/statistics', name: 'front_voiture_statistics')]
    public function frontStatistics(ReservationsRepository $reservationsRepository): Response
    {
        $mostReservedCars = $reservationsRepository->findMostReservedCars();
        $reservationStats = $reservationsRepository->findReservationStats();

        return $this->render('voiture/front/statistics.html.twig', [
            'mostReservedCars' => $mostReservedCars,
            'reservationStats' => $reservationStats,
        ]);
    }

    // Dashboard routes
    #[Route('/admin/cars', name: 'app_voiture_index', methods: ['GET'])]
    public function index(VoitureRepository $voitureRepository): Response
    {
        return $this->render('voiture/index.html.twig', [
            'voitures' => $voitureRepository->findAll(),
        ]);
    }

    #[Route('/admin/cars/new', name: 'app_voiture_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $voiture = new Voiture();
        $form = $this->createForm(VoitureType::class, $voiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    $imageFile->move(
                        $this->getParameter('cars_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'An error occurred while uploading the image.');
                    return $this->redirectToRoute('app_voiture_new');
                }

                $voiture->setImage($newFilename);
            }

            $entityManager->persist($voiture);
            $entityManager->flush();

            $this->addFlash('success', 'Car has been added successfully.');
            return $this->redirectToRoute('app_voiture_index');
        }

        return $this->render('voiture/new.html.twig', [
            'voiture' => $voiture,
            'form' => $form,
        ]);
    }

    #[Route('/admin/cars/{id}', name: 'app_voiture_show', methods: ['GET'])]
    public function show(Voiture $voiture): Response
    {
        return $this->render('voiture/show.html.twig', [
            'voiture' => $voiture,
        ]);
    }

    #[Route('/admin/cars/{id}/edit', name: 'app_voiture_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Voiture $voiture, EntityManagerInterface $entityManager, SluggerInterface $slugger): Response
    {
        $form = $this->createForm(VoitureType::class, $voiture);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $imageFile = $form->get('image')->getData();
            
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = $slugger->slug($originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                try {
                    // Delete old image if exists
                    if ($voiture->getImage()) {
                        $oldImagePath = $this->getParameter('cars_directory').'/'.$voiture->getImage();
                        if (file_exists($oldImagePath)) {
                            unlink($oldImagePath);
                        }
                    }

                    $imageFile->move(
                        $this->getParameter('cars_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    $this->addFlash('error', 'An error occurred while uploading the image.');
                    return $this->redirectToRoute('app_voiture_edit', ['id' => $voiture->getId()]);
                }

                $voiture->setImage($newFilename);
            }

            $entityManager->flush();

            $this->addFlash('success', 'Car has been updated successfully.');
            return $this->redirectToRoute('app_voiture_index');
        }

        return $this->render('voiture/edit.html.twig', [
            'voiture' => $voiture,
            'form' => $form,
        ]);
    }

    #[Route('/admin/cars/{id}/delete', name: 'app_voiture_delete', methods: ['POST'])]
    public function delete(Request $request, Voiture $voiture, EntityManagerInterface $entityManager): Response
    {
        // Check if car has reservations
        if (!$voiture->getReservations()->isEmpty()) {
            $this->addFlash('error', 'Cannot delete this car because it has existing reservations. Please delete the reservations first.');
            return $this->redirectToRoute('app_voiture_index');
        }

        // Delete the image file if exists
        if ($voiture->getImage()) {
            $imagePath = $this->getParameter('cars_directory').'/'.$voiture->getImage();
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $entityManager->remove($voiture);
        $entityManager->flush();

        $this->addFlash('success', 'Car has been deleted successfully.');

        return $this->redirectToRoute('app_voiture_index');
    }

    #[Route('/admin/statistics', name: 'app_voiture_statistics')]
    public function statistics(ReservationsRepository $reservationsRepository): Response
    {
        $mostReservedCars = $reservationsRepository->findMostReservedCars();
        $reservationStats = $reservationsRepository->findReservationStats();

        return $this->render('voiture/statistics.html.twig', [
            'mostReservedCars' => $mostReservedCars,
            'reservationStats' => $reservationStats,
        ]);
    }
}
