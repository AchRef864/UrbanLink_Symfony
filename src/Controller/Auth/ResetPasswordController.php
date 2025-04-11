<?php
// src/Controller/Auth/ResetPasswordController.php
namespace App\Controller\Auth;

use App\Entity\User;
use App\Form\ResetPasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Psr\Log\LoggerInterface;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    #[Route('', name: 'app_forgot_password_request', methods: ['GET', 'POST'])]
    public function request(
        Request $request,
        UserRepository $userRepository,
        MailerInterface $mailer,
        EntityManagerInterface $entityManager
    ): Response {
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            $user = $userRepository->findOneBy(['email' => $email]);

            if ($user) {
                // Generate 6-digit code
                $code = random_int(100000, 999999);
                $user->setCode($code);
                $entityManager->flush();

                try {
                    $email = (new Email())
                        ->from($_ENV['MAILER_FROM'])
                        ->to($user->getEmail())
                        ->subject('Your Password Reset Code')
                        ->html($this->renderView('auth/reset_password/reset_email.html.twig', [
                            'code' => $code,
                            'user' => $user
                        ]));

                    $mailer->send($email);

                    // Store code in session for verification
                    $request->getSession()->set('reset_password_code', $code);
                    $request->getSession()->set('reset_password_email', $user->getEmail());

                    // Redirect to verification page
                    return $this->redirectToRoute('app_verify_code');
                } catch (TransportExceptionInterface $e) {
                    $this->logger->error('Email sending failed: '.$e->getMessage());
                    $this->addFlash('error', 'Failed to send email. Please try again.');
                }
            } else {
                // Delay response to prevent user enumeration
                sleep(1);
            }

            $this->addFlash('success', 'If an account exists, we have sent a reset code.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('auth/reset_password/request.html.twig', [
            'requestForm' => $form->createView()
        ]);
    }

    #[Route('/verify', name: 'app_verify_code', methods: ['GET', 'POST'])]
    public function verifyCode(Request $request, UserRepository $userRepository): Response
    {
        $session = $request->getSession();
        $storedCode = $session->get('reset_password_code');
        $email = $session->get('reset_password_email');

        if (!$storedCode || !$email) {
            $this->addFlash('error', 'Invalid reset request.');
            return $this->redirectToRoute('app_forgot_password_request');
        }

        if ($request->isMethod('POST')) {
            $submittedCode = $request->request->get('code');

            if ($submittedCode == $storedCode) {
                $user = $userRepository->findOneBy(['email' => $email]);
                if ($user) {
                    // Code verified, redirect to password reset
                    return $this->redirectToRoute('app_reset_password', ['code' => $storedCode]);
                }
            }

            $this->addFlash('error', 'Invalid verification code.');
        }

        return $this->render('auth/reset_password/verify_code.html.twig');
    }

    #[Route('/reset/{code}', name: 'app_reset_password', methods: ['GET', 'POST'])]
    public function reset(
        int $code,
        Request $request,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager,
        UserPasswordHasherInterface $passwordHasher
    ): Response {
        $user = $userRepository->findOneBy(['code' => $code]);

        if (!$user) {
            $this->addFlash('error', 'Invalid or expired reset code.');
            return $this->redirectToRoute('app_forgot_password_request');
        }

        $form = $this->createForm(ResetPasswordFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setCode(null);
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $entityManager->flush();

            // Clear session
            $request->getSession()->remove('reset_password_code');
            $request->getSession()->remove('reset_password_email');

            $this->addFlash('success', 'Your password has been reset successfully.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('auth/reset_password/reset_password.html.twig', [
            'resetForm' => $form->createView()
        ]);
    }
}