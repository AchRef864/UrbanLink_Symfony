<?php

// src/Form/RegistrationFormType.php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your name']),
                ]
            ])
            ->add('email', TextType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your email']),
                    new Email(['message' => 'Please enter a valid email address']),
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your phone number']),
                    new Length([
                        'min' => 8,
                        'max' => 15,
                        'minMessage' => 'Phone number must be at least {{ limit }} digits',
                        'maxMessage' => 'Phone number cannot be longer than {{ limit }} digits',
                    ]),
                    new Regex([
                        'pattern' => '/^\\+[0-9]{8,15}$/',
                        'message' => 'Phone number must start with + followed by 8-15 digits'
                    ])
                ]
            ])
            ->add('plainPassword', PasswordType::class, [
                'label' => false,
                'mapped' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Please enter a password']),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('license', HiddenType::class, [
                'data' => $this->generateLicenseNumber(),
            ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ]);

        // Ensure joining date is set if not already
        $builder->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
            $user = $event->getData();
            if ($user instanceof User && $user->getJoiningDate() === null) {
                $user->setJoiningDate(new \DateTime());
            }
        });
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

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}