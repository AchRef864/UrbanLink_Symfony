<?php
// src/Controller/Client/DashboardController.php
namespace App\Controller\Taxi;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/taxi')]
class DashboardController extends AbstractController
{
    #[Route('/driver/dashboard', name: 'driver_dashboard')]
    #[IsGranted('ROLE_DRIVER')]
    public function index(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_DRIVER');
        return $this->render('dashboard/driver.html.twig');
    }
}