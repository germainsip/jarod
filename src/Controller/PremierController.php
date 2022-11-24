<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PremierController extends AbstractController
{
    #[Route('/', name: 'app_premier')]
    public function index(): Response
    {
        return $this->render('premier/index.html.twig', [
            'controller_name' => 'Germain',
        ]);
    }

    #[Route('/coucou/{nom}', name: 'app_coucouN')]
    public function coucouN($nom): Response
    {
        return $this->render('premier/index.html.twig', [
            'controller_name' => $nom,
        ]);
    }

    #[Route('/coucou', name: 'app_coucou')]
    public function coucou(): Response
    {
        return $this->render('premier/index.html.twig', [
            'controller_name' => 'gagné',
        ]);
    }

    
}
