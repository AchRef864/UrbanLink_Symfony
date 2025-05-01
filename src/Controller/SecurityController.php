<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Form\LoginFormType;

class SecurityController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        if ($this->getUser()) {
            // If already logged in, redirect based on role
            if (in_array('ROLE_ADMIN', $this->getUser()->getRoles())) {
                return $this->redirectToRoute('app_admin_dashboard');
            }
            return $this->redirectToRoute('app_dashboard');
        }

        // Get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        $customErrorMessage = null;

        if ($error) {
            // Map security errors to more user-friendly messages
            switch ($error->getMessageKey()) {
                case 'Invalid credentials.':
                    $customErrorMessage = 'Invalid email or password';
                    break;
                case 'Account is disabled.':
                    $customErrorMessage = 'Your account is disabled';
                    break;
                case 'Account is blocked.':
                    $customErrorMessage = 'Your account is blocked. Please contact the administrator.';
                    break;
                default:
                    $customErrorMessage = 'Login failed. Please try again';
            }
        }

        // Last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('auth/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $customErrorMessage,
            'loginForm' => $this->createForm(LoginFormType::class)->createView()
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route('/oauth/check-google', name: 'oauth_check_google')]
    public function checkGoogleCallback(): Response
    {
        // This route is being hit after Google authentication.
        // If HWI/OAuth is correctly configured, it should handle this internally.
        // For now, let's just redirect to the login page.
        return $this->redirectToRoute('app_login'); // Redirect to your login page route
    }
}