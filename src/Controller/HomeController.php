<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/pi')]

final class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/pricing', name: 'app_pricing')]
    public function pricing(): Response
    {
        return $this->render('home/pricing.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/our_car', name: 'app_our_car')]
    public function our_car(): Response
    {
        return $this->render('home/our_car.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/blog', name: 'app_blog')]
    public function blog(): Response
    {
        return $this->render('home/blog.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }




}
