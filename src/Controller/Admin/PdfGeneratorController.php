<?php
// src/Controller/Admin/PdfGeneratorController.php
namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PdfGeneratorController extends AbstractController
{
    #[Route('/admin/pdf-generator', name: 'admin_pdf_generator')]
    public function index(): Response
    {
        return $this->render('admin/pdf_generator.html.twig');
    }
}