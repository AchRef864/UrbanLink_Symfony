<?php
// src/Controller/TestController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class voiceController extends AbstractController
{
    #[Route('/voice-test', name: 'voice_test')]
    public function index()
    {
        return $this->render('voice_test.html.twig');
    }
}
