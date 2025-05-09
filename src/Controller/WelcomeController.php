<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WelcomeController extends AbstractController
{
    #[Route('/', name: 'welcome_index')]
    public function index(): Response
    {
        return $this->redirectToRoute('app_index');
    }

    #[Route('/home', name: 'welcome_home')]
    public function home(): Response
    {
        return $this->redirectToRoute('app_index');
    }

    #[Route('/dashboard', name: 'welcome_dashboard')]
    public function dashboard(): Response
    {
        return $this->redirectToRoute('app_dashbord');
    }
} 