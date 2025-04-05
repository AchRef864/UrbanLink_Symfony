<?php

namespace App\Controller\Auth;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class LoginController extends AbstractController
{
    #[Route('/login', name: 'app_login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('auth/login/login.html.twig', [
            'last_username' => $lastUsername,
            'error'         => $error,
        ]);
    }
    /*
   #[Route('/login', name: 'app_login')]
   public function login(
       Request $request,
       AuthenticationUtils $authenticationUtils
   ): Response {
       // Redirect if already logged in
       if ($this->getUser()) {
           return $this->redirectToRoute('app_dashboard');
       }

       // Create form
       $form = $this->createForm(LoginFormType::class);
       $form->handleRequest($request);

       // Get login error if there is one
       $error = $authenticationUtils->getLastAuthenticationError();
       $lastUsername = $authenticationUtils->getLastUsername();

       // Handle form submission and validation
       $formErrors = [];
       if ($form->isSubmitted()) {
           if (!$form->isValid()) {
               // Form validation errors
               foreach ($form->getErrors(true) as $error) {
                   $formErrors[] = $error->getMessage();
               }
           } elseif ($error instanceof AuthenticationException) {
               // Authentication errors
               $formErrors[] = 'Invalid email or password';
           }
       }

       return $this->render('auth/login.html.twig', [
           'loginForm' => $form->createView(),
           'last_username' => $lastUsername,
           'formErrors' => $formErrors,
           'error' => $error
       ]);
   }*/
}