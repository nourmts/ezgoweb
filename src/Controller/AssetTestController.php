<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AssetTestController extends AbstractController
{
    #[Route('/asset-test', name: 'app_asset_test')]
    public function index(): Response
    {
        return $this->render('asset_test/index.html.twig');
    }
} 