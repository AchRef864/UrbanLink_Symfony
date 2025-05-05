<?php
// src/Controller/ReportController.php

namespace App\Controller;

use App\Repository\UserRepository;
use App\Service\ReportService;
use Dompdf\Dompdf;
use Endroid\QrCode\Builder\Builder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ReportController extends AbstractController
{
    // déclaration classique (compatible PHP 7.4+)
    private ReportService $reportService;
    private Dompdf        $dompdf;

    public function __construct(ReportService $reportService, Dompdf $dompdf)
    {
        $this->reportService = $reportService;
        $this->dompdf        = $dompdf;
    }

    /**
     * Génère et renvoie le QR code pour le PDF report de l’utilisateur.
     */
    #[Route('/report/qr/{userId}', name: 'report_qr', methods: ['GET'])]
    public function qr(int $userId): Response
    {
        // ⚠️ Remplace cette URL par celle affichée par ngrok
        $ngrokBaseUrl = 'https://b721-102-156-89-228.ngrok-free.app';
    
        // URL finale pointant vers le rapport PDF
        $pdfUrl = $ngrokBaseUrl . '/report/' . $userId;
    
        // Générer le QR code
        $qr = Builder::create()
            ->data($pdfUrl)
            ->size(200)
            ->margin(5)
            ->build();
    
        return new Response(
            $qr->getString(),
            Response::HTTP_OK,
            ['Content-Type' => $qr->getMimeType()]
        );
    }
    

    /**
     * Génère le PDF et force son téléchargement.
     */
    #[Route('/report/{userId}', name: 'report_pdf', methods: ['GET'])]
public function pdf(int $userId,UserRepository $userRepository): Response
{
    // Récupère le tableau complet
    $coursesData = $this->reportService->getUserCourseReports($userId);
    $user = $userRepository->find($userId);
    // Les autres sections (ratings globales, top taxis) restent inchangées
    $ratings  = $this->reportService->getTaxiRatings();
    $topTaxis = $this->reportService->getTopTaxis();

    $html = $this->renderView('report/report.html.twig', [
        'ratings'     => $ratings,
        'topTaxis'    => $topTaxis,
        'coursesData' => $coursesData,
        'user'        => $user,
        'userId'      => $userId,
    ]);

        // Génération du PDF
        $this->dompdf->loadHtml($html);
        $this->dompdf->setPaper('A4', 'portrait');
        $this->dompdf->render();

        // Récupère le contenu et le renvoie en attachment
        $pdfContent = $this->dompdf->output();

        return new Response(
            $pdfContent,
            Response::HTTP_OK,
            [
                'Content-Type'        => 'application/pdf',
                'Content-Disposition' => "attachment; filename=\"report_user_{$userId}.pdf\""
            ]
        );
    }
}
