<?php

namespace App\Controller;

use App\Entity\Location;
use App\Entity\Partenaire;
use App\Entity\CodePromo;
use App\Form\LocationType;
use App\Repository\LocationRepository;
use App\Repository\CodePromoRepository;
use App\Repository\PartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/location')]
class LocationController extends AbstractController
{
    #[Route('/', name: 'app_location_index', methods: ['GET'])]
    public function index(LocationRepository $locationRepository): Response
    {
        return $this->render('location/index.html.twig', [
            'locations' => $locationRepository->findAll(),
        ]);
    }

    #[Route('/new/{idPartenaire}', name: 'app_location_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, CodePromoRepository $codePromoRepository, ?Partenaire $partenaire = null): Response
    {
        if (!$partenaire) {
            $this->addFlash('error', 'Partenaire non trouvé');
            return $this->redirectToRoute('app_partenaire_index');
        }

        $location = new Location();
        $location->setPartenaire($partenaire);
        
        $form = $this->createForm(LocationType::class, $location, [
            'partenaire' => $partenaire,
            'hide_partenaire' => true
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupération du code promo saisi
            $codePromoText = $form->get('codePromoText')->getData();
            
            if ($codePromoText) {
                $codePromo = $codePromoRepository->findByCode($codePromoText);
                
                if ($codePromo) {
                    // Vérifier si le code promo est valide (date d'expiration et nombre d'utilisations)
                    $dateExpiration = $codePromo->getDateExpiration();
                    $utilisationsMax = $codePromo->getUtilisationsMax();
                    $utilisations = $codePromo->getUtilisations();
                    
                    $isValid = true;
                    
                    if ($dateExpiration && $dateExpiration < new \DateTime()) {
                        $isValid = false;
                        $this->addFlash('error', 'Ce code promo a expiré');
                    }
                    
                    if ($utilisationsMax !== null && $utilisations >= $utilisationsMax) {
                        $isValid = false;
                        $this->addFlash('error', 'Ce code promo a atteint son nombre maximum d\'utilisations');
                    }
                    
                    if ($isValid) {
                        $location->setCodePromo($codePromo);
                        $codePromo->setUtilisations($utilisations + 1);
                        $this->addFlash('success', 'Code promo appliqué avec succès !');
                    }
                } else {
                    $this->addFlash('error', 'Code promo invalide');
                }
            }

            $location->calculatePrixTotal();
            $entityManager->persist($location);
            $entityManager->flush();

            return $this->redirectToRoute('app_location_confirm', ['idLocation' => $location->getIdLocation()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('location/new.html.twig', [
            'location' => $location,
            'form' => $form,
            'partenaire' => $partenaire
        ]);
    }

    #[Route('/{idLocation}/confirm', name: 'app_location_confirm', methods: ['GET', 'POST'])]
    public function confirm(Request $request, Location $location, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            if ($request->request->get('action') === 'confirm') {
                $location->setConfirmed(true);
                $entityManager->flush();
                
                return $this->render('location/success.html.twig', [
                    'location' => $location
                ]);
            }
        }

        return $this->render('location/confirm.html.twig', [
            'location' => $location
        ]);
    }

    #[Route('/{idLocation}', name: 'app_location_show', methods: ['GET'])]
    public function show(Location $location): Response
    {
        if (!$location) {
            $this->addFlash('error', 'Location non trouvée');
            return $this->redirectToRoute('app_location_index');
        }
        return $this->render('location/show.html.twig', [
            'location' => $location,
        ]);
    }

    #[Route('/{idLocation}/edit', name: 'app_location_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Location $location, EntityManagerInterface $entityManager): Response
    {
        if (!$location) {
            $this->addFlash('error', 'Location non trouvée');
            return $this->redirectToRoute('app_location_index');
        }

        $form = $this->createForm(LocationType::class, $location, [
            'partenaire' => $location->getPartenaire(),
            'hide_partenaire' => true
        ]);
        
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $location->calculatePrixTotal();
            $entityManager->flush();
            return $this->redirectToRoute('app_location_confirm', ['idLocation' => $location->getIdLocation()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('location/edit.html.twig', [
            'location' => $location,
            'form' => $form,
            'partenaire' => $location->getPartenaire()
        ]);
    }

    #[Route('/{idLocation}', name: 'app_location_delete', methods: ['POST'])]
    public function delete(Request $request, Location $location, EntityManagerInterface $entityManager): Response
    {
        if (!$location) {
            $this->addFlash('error', 'Location non trouvée');
            return $this->redirectToRoute('app_location_index');
        }

        if ($this->isCsrfTokenValid('delete'.$location->getIdLocation(), $request->request->get('_token'))) {
            $entityManager->remove($location);
            $entityManager->flush();
            $this->addFlash('success', 'Location supprimée avec succès');
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }

        return $this->redirectToRoute('app_location_index', [], Response::HTTP_SEE_OTHER);
    }
}
