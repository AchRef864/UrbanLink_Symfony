<?php

// src/Controller/Admin/UserPdfController.php
namespace App\Controller\Admin;

use App\Repository\UserRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Knp\Snappy\Pdf;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserPdfController extends AbstractController
{
    private Pdf $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    #[Route('/admin/users/pdf', name: 'admin_users_pdf')]
    public function generatePdf(Request $request, UserRepository $userRepository): PdfResponse
    {
        // Get all users (or implement your own filtering logic)
        $users = $userRepository->findAll();

        $html = $this->renderView('admin/pdf.html.twig', [
            'users' => $users,
            'role' => 'all',  // Default to all roles
            'status' => 'all', // Default to all statuses
            'date' => new \DateTime(),
        ]);

        return new PdfResponse(
            $this->pdf->getOutputFromHtml($html),
            'urbanlink_users_report_'.date('Y-m-d').'.pdf'
        );
    }
}