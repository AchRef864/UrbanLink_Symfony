<?php
// src/Controller/DashboardController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        $user = $this->getUser();

        if ($this->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('admin_dashboard');
        }

        if ($this->isGranted('ROLE_DRIVER')) {
            return $this->redirectToRoute('driver_dashboard');
        }

        if ($this->isGranted('ROLE_TAXI')) {
            return $this->redirectToRoute('taxi_dashboard');
        }

        // Default for clients/regular users
        return $this->redirectToRoute('client_dashboard');
    }

    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    public function adminDashboard(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');
        return $this->render('dashboard/admin.html.twig');
    }

    #[Route('/client/dashboard', name: 'client_dashboard')]
    public function clientDashboard(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_USER');
        return $this->render('dashboard/client.html.twig' , [
            'user' => $this->getUser()
        ]);

    }

    // Example for DriverController
    #[Route('/driver/dashboard', name: 'driver_dashboard')]
    #[IsGranted('ROLE_DRIVER')]
    public function dashboard(): Response
    {
        if ($this->getUser()->getRole() !== 'driver') {
            throw $this->createAccessDeniedException();
        }

        return $this->render('dashboard/driver.html.twig');
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig');
    }
}