<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        // Using getRole() as in your original code
        switch ($user->getRole()) {
            case 'admin':
                return $this->redirectToRoute('admin_dashboard');
            case 'driver':
                return $this->redirectToRoute('driver_dashboard');
            case 'taxi':
                return $this->redirectToRoute('taxi_dashboard');
            default: // client or other
                return $this->redirectToRoute('client_dashboard');
        }
    }

    #[Route('/admin/dashboard', name: 'admin_dashboard')]
    #[IsGranted('ROLE_ADMIN')]
    public function adminDashboard(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $this->render('dashboard/admin.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/client/dashboard', name: 'client_dashboard')]
    #[IsGranted('ROLE_USER')]
    public function clientDashboard(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $this->render('dashboard/client.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/driver/dashboard', name: 'driver_dashboard')]
    public function driverDashboard(): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User || $user->getRole() !== 'driver') {
            throw $this->createAccessDeniedException();
        }

        return $this->render('dashboard/driver.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/taxi/dashboard', name: 'taxi_dashboard')]
    public function taxiDashboard(): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User || $user->getRole() !== 'taxi') {
            throw $this->createAccessDeniedException();
        }

        return $this->render('dashboard/taxi.html.twig', [
            'user' => $user
        ]);
    }

    #[Route('/home', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('home/index.html.twig');
    }
}
