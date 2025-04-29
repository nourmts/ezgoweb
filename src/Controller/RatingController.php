<?php

namespace App\Controller;

use App\Entity\Rating;
use App\Entity\Partenaire;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RatingController extends AbstractController
{
    #[Route('/rating/add/{idPartenaire}', name: 'app_rating_add', methods: ['POST'])]
    public function addRating(Request $request, Partenaire $partenaire, EntityManagerInterface $entityManager): JsonResponse
    {
        $user = $this->getUser();
        if (!$user || !$user instanceof User) {
            return new JsonResponse(['success' => false, 'message' => 'Vous devez être connecté pour noter'], 403);
        }

        $ratingValue = $request->request->get('rating');
        if (!$ratingValue || !is_numeric($ratingValue) || $ratingValue < 1 || $ratingValue > 5) {
            return new JsonResponse(['success' => false, 'message' => 'Note invalide'], 400);
        }

        // Vérifier si l'utilisateur a déjà noté ce partenaire
        $existingRating = $entityManager->getRepository(Rating::class)->findOneBy([
            'user' => $user,
            'partenaire' => $partenaire
        ]);

        if ($existingRating) {
            $existingRating->setNote((float)$ratingValue);
        } else {
            $rating = new Rating();
            $rating->setUser($user);
            $rating->setPartenaire($partenaire);
            $rating->setNote((float)$ratingValue);
            $entityManager->persist($rating);
        }

        $entityManager->flush();

        // Calculer la nouvelle moyenne
        $ratings = $entityManager->getRepository(Rating::class)->findBy(['partenaire' => $partenaire]);
        $total = 0;
        $count = count($ratings);
        foreach ($ratings as $r) {
            $total += $r->getNote();
        }
        $newRating = $count > 0 ? $total / $count : 0;

        return new JsonResponse([
            'success' => true,
            'message' => 'Note enregistrée avec succès',
            'newRating' => round($newRating, 1)
        ]);
    }

    #[Route('/rating/submit/{id}', name: 'app_rating_submit')]
    public function submit(Request $request, Partenaire $partenaire, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            $this->addFlash('error', 'Vous devez être connecté pour évaluer un partenaire');
            return $this->redirectToRoute('app_login');
        }

        $isLike = (bool) $request->request->get('isLike');

        // Vérifier si l'utilisateur a déjà évalué ce partenaire
        $existingRating = $entityManager->getRepository(Rating::class)->findOneBy([
            'user' => $user,
            'partenaire' => $partenaire
        ]);

        if ($existingRating) {
            // Mettre à jour l'évaluation existante
            $existingRating->setIsLike($isLike);
        } else {
            // Créer une nouvelle évaluation
            $rating = new Rating();
            $rating->setUser($user);
            $rating->setPartenaire($partenaire);
            $rating->setIsLike($isLike);
            $entityManager->persist($rating);
        }

        $entityManager->flush();

        $message = $isLike ? 'Merci pour votre avis positif !' : 'Merci pour votre retour !';
        $this->addFlash('success', $message);

        return $this->redirectToRoute('app_partenaire_front', ['id' => $partenaire->getIdPartenaire()]);
    }
} 