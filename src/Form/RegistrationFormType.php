<?php

namespace App\Form;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Regex;

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
            ->add('phone', TelType::class, [
                'label' => false,
                'constraints' => [
                    new NotBlank(['message' => 'Please enter your phone number']),
                    new Length([
                        'exactMessage' => 'Phone number must be exactly 8 digits',
                        'min' => 8,
                        'max' => 8,
                    ]),
                    new Regex([
                        'pattern' => '/^\d+$/',
                        'message' => 'Phone number must contain only digits'
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
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}