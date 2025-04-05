<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin')]
class BackOfficeController extends AbstractController
{
    #[Route('', name: 'back_office_dashboard')]
    public function dashboard(): Response
    {
        return $this->render('back_office/dashboard.html.twig');
    }
}