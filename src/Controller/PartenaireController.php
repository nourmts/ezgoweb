<?php

namespace App\Controller;

use App\Entity\Partenaire;
use App\Form\PartenaireType;
use App\Repository\PartenaireRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/partenaire')]
class PartenaireController extends AbstractController
{
    #[Route('/', name: 'app_partenaire_index', methods: ['GET'])]
    public function index(PartenaireRepository $partenaireRepository): Response
    {
        return $this->render('partenaire/index.html.twig', [
            'partenaires' => $partenaireRepository->findAll(),
        ]);
    }

    #[Route('/list', name: 'app_partenaire_list', methods: ['GET'])]
    public function list(PartenaireRepository $partenaireRepository): Response
    {
        return $this->render('partenaire/list.html.twig', [
            'partenaires' => $partenaireRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_partenaire_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $partenaire = new Partenaire();
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($partenaire);
            $entityManager->flush();
            
            $this->addFlash('success', 'Partenaire créé avec succès');
            return $this->redirectToRoute('app_partenaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('partenaire/new.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form,
        ]);
    }

    #[Route('/{idPartenaire}', name: 'app_partenaire_show', methods: ['GET'])]
    public function show(Partenaire $partenaire): Response
    {
        return $this->render('partenaire/show.html.twig', [
            'partenaire' => $partenaire,
        ]);
    }

    #[Route('/{idPartenaire}/edit', name: 'app_partenaire_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Partenaire $partenaire, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(PartenaireType::class, $partenaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Partenaire modifié avec succès');
            return $this->redirectToRoute('app_partenaire_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('partenaire/edit.html.twig', [
            'partenaire' => $partenaire,
            'form' => $form,
        ]);
    }

    #[Route('/{idPartenaire}', name: 'app_partenaire_delete', methods: ['POST'])]
    public function delete(Request $request, Partenaire $partenaire, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$partenaire->getIdPartenaire(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($partenaire);
                $entityManager->flush();
                $this->addFlash('success', 'Partenaire supprimé avec succès');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Impossible de supprimer ce partenaire car il est associé à des locations');
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }

        return $this->redirectToRoute('app_partenaire_index', [], Response::HTTP_SEE_OTHER);
    }
}