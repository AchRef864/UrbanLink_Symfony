<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MaintenanceController extends AbstractController
{
    #[Route('/Admin/maintenance', name: 'admin_maintenance')]
    public function index(): Response
    {
        return $this->render('/Admin/maintenance/index.html.twig', [
            'controller_name' => 'MaintenanceController',
        ]);
    }
}
