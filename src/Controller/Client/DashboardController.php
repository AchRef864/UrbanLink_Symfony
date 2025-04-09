<?php
// src/Controller/Client/DashboardController.php
namespace App\Controller\Client;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/client')]
class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'client_dashboard')]
    #[IsGranted('ROLE_CLIENT')]
    public function index(): Response
    {
        return $this->render('dashboard/client.html.twig', [
            'user' => $this->getUser()
        ]);
    }
}