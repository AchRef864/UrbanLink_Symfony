<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AffichageController extends AbstractController
{
    #[Route('/Admin/affichage', name: 'admin_affichage')]
    public function index(): Response
    {
        return $this->render('Admin/affichage/index.html.twig', [
            'controller_name' => 'AffichageController',
        ]);
    }
}
