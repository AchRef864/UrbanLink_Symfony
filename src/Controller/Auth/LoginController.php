<?php
// src/Controller/Auth/LoginController.php
namespace App\Controller\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Service\RecaptchaValidator;
use App\Entity\User;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class LoginController extends AbstractController
{
    public function __construct(
        private ParameterBagInterface $params
    ) {}

    #[Route('/login', name: 'app_login')]
    public function index(
        Request $request,
        AuthenticationUtils $authenticationUtils,
        RecaptchaValidator $recaptchaValidator
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('app_dashboard');
        }

        if ($request->isMethod('POST') && !$recaptchaValidator->verify($request)) {
            $this->addFlash('error', 'Please complete the reCAPTCHA verification');
            return $this->redirectToRoute('app_login');
        }

        $error = $authenticationUtils->getLastAuthenticationError();
        if ($error && $error->getMessageKey() === 'Your account has been blocked. Please contact support.') {
            $this->addFlash('blocked', $error->getMessage());
        }

        return $this->render('auth/login/login.html.twig', [
            'last_username' => $authenticationUtils->getLastUsername(),
            'error' => $error,
            'recaptcha_site_key' => $this->params->get('recaptcha.site_key'), // Fetch from parameters
        ]);
    }
}