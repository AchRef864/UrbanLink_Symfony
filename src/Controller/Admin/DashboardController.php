<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/Admin/dashboard', name: 'admin_dashboard')]
    public function index(): Response
    {
        return $this->render('Admin/dashboard/index.html.twig', [
            'controller_name' => 'DashboardController',
        ]);
    }

}
