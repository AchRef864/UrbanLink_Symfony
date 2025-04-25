<?php
// src/Controller/Taxi/DashboardController.php
namespace App\Controller\Taxi;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/taxi')]
class DashboardController extends AbstractController
{
    #[Route('/dashboajrd', name: 'taxi_dashboafrd')]
    #[IsGranted('ROLE_TAXI')]
    public function index(): Response
    {
        return $this->render('dashboard/taxi.html.twig', [
            'user' => $this->getUser()
        ]);
    }
}
