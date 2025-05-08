<?php

namespace App\Controller\Auth;

use App\Entity\User;
use App\Form\RegistrationFormType;
use Doctrine\DBAL\Exception\UniqueConstraintViolationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\String\Slugger\SluggerInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request                     $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface      $entityManager,
        SluggerInterface            $slugger
    ): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                // Handle image upload
                $imageFile = $form->get('image')->getData();
                if ($imageFile) {
                    $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                    $safeFilename = $slugger->slug($originalFilename);
                    $newFilename = $safeFilename.'-'.uniqid().'.'.$imageFile->guessExtension();

                    $uploadDir = $this->getParameter('app.user_image_upload_path');
                    $imageFile->move($uploadDir, $newFilename);
                    $user->setImage('uploads/users/images/' . $newFilename);
                }

                // Hash password
                $user->setPassword(
                    $passwordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );

                // Role & License logic
                $role = $user->getRole();
                if ($role === 'client') {
                    $user->setLicense(null);
                } else {
                    if (empty($user->getLicense())) {
                        $user->setLicense($this->generateLicenseNumber());
                    }
                }

                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('app_home');

            } catch (FileException $e) {
                $this->addFlash('error', 'Could not upload the image. Please try again.');
            } catch (UniqueConstraintViolationException $e) {
                $form->get('email')->addError(
                    new FormError('This email is already in use. Please use a different email.')
                );
            } catch (\Exception $e) {
                $this->addFlash('error', 'There was an error with your registration. Please try again.');
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