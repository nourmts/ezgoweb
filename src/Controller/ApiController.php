<?php

namespace App\Controller;

use App\Entity\Partenaire;
use App\Repository\PartenaireRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class ApiController extends AbstractController
{
    #[Route('/partenaire/{id}/services', name: 'api_partenaire_services', methods: ['GET'])]
    public function getPartenaireServices(Partenaire $partenaire): JsonResponse
    {
        $services = explode(',', $partenaire->getServices());
        return $this->json(array_map('trim', $services));
    }

    #[Route('/partenaire/{id}/marques', name: 'api_partenaire_marques', methods: ['GET'])]
    public function getPartenaireMarques(Partenaire $partenaire): JsonResponse
    {
        $marques = explode(',', $partenaire->getMarquesDisponibles());
        return $this->json(array_map('trim', $marques));
    }

    #[Route('/partenaire/{id}/tarif', name: 'api_partenaire_tarif', methods: ['GET'])]
    public function getPartenaireTarif(Partenaire $partenaire): JsonResponse
    {
        return $this->json(['tarif' => $partenaire->getTarif()]);
    }
} 