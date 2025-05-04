<?php
// src/Controller/AvatarController.php
namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;

class AvatarController extends AbstractController
{
    #[Route('/user/avatar/{id}', name: 'user_avatar', methods: ['GET'])]
    public function avatar(User $user): BinaryFileResponse
    {
        $relativePath = $user->getImage();
        if (!$relativePath) {
            throw $this->createNotFoundException('Aucun avatar pour cet utilisateur.');
        }

        $projectDir   = $this->getParameter('kernel.project_dir');
        $absolutePath = $projectDir.'/public/'.ltrim($relativePath, '/');
        if (!file_exists($absolutePath)) {
            throw $this->createNotFoundException('Fichier avatar introuvable.');
        }

        $response = new BinaryFileResponse($absolutePath);
        $response->setContentDisposition(
            ResponseHeaderBag::DISPOSITION_INLINE,
            basename($absolutePath)
        );

        return $response;
    }
}
