<?php


namespace App\Controller\Auth;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request                     $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface      $entityManager
    ): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Set joining date if not already set
            if ($user->getJoiningDate() === null) {
                $user->setJoiningDate(new \DateTime());
            }

            // Set license if not already set
            if (empty($user->getLicense())) {
                $user->setLicense($this->generateLicenseNumber());
            }

            // Hash password
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            try {
                $entityManager->persist($user);
                $entityManager->flush();

                // Redirect after successful registration
                return $this->redirectToRoute('app_home');
            } catch (UniqueConstraintViolationException $e) {
                if (strpos($e->getMessage(), 'users.UNIQ_1483A5E9E7927C74') !== false) {
                    $form->get('email')->addError(
                        new \Symfony\Component\Form\FormError('This email is already in use. Please use a different email.')
                    );
                } else {
                    $this->addFlash('error', 'There was an error with your registration. Please try again.');
                }
            }
        }

        return $this->render('auth/registration/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    private function generateLicenseNumber(): string
    {
        $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $license = 'UL-';
        $max = strlen($characters) - 1;

        for ($i = 0; $i < 8; $i++) {
            $license .= $characters[random_int(0, $max)];
        }

        return $license;
    }
}