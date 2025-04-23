<?php

namespace App\Form;

use App\Repository\UserRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Callback;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class LoginFormType extends AbstractType
{
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('_username', EmailType::class, [
                'label' => false,
                'attr' => [
                    'autocomplete' => 'email',
                    'placeholder' => 'Email',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter an email address',
                    ]),
                    new Email([
                        'message' => 'Please enter a valid email address',
                        'mode' => 'strict',
                    ]),
                    new Callback([$this, 'validateEmailExistence']),
                ],
            ])
            ->add('_password', PasswordType::class, [
                'label' => false,
                'attr' => [
                    'autocomplete' => 'current-password',
                    'placeholder' => 'Password',
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 8,
                        'minMessage' => 'Your password must be at least {{ limit }} characters long',
                        'max' => 4096,
                    ]),
                    new Callback([$this, 'validatePasswordStrength']),
                ],
            ])
            ->add('recaptcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(),
                'action_name' => 'login',
                'locale' => 'en',
            ]);
    }

    public function validateEmailExistence($value, ExecutionContextInterface $context)
    {
        if (empty($value)) {
            return;
        }

        $user = $this->userRepository->findOneBy(['email' => $value]);

        if (!$user) {
            $context->buildViolation('No account found with this email address')
                ->addViolation();
        }
    }

    public function validatePasswordStrength($value, ExecutionContextInterface $context)
    {
        if (empty($value)) {
            return;
        }

        if (strlen($value) < 8) {
            $context->buildViolation('Password must be at least 8 characters long')
                ->addViolation();
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'csrf_field_name' => '_csrf_token',
            'csrf_token_id' => 'authenticate',
            'attr' => [
                'novalidate' => 'novalidate', // Disable HTML5 validation
            ],
        ]);
    }
}