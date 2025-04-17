<?php
// src/Form/EditUserType.php
namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Full Name'
            ])
            ->add('email', EmailType::class)
            ->add('phone', TextType::class)
            ->add('role', ChoiceType::class, [
                'choices' => [
                    'Client' => 'client',
                    'Driver' => 'driver',  // For future use
                    'Taxi' => 'taxi'       // For future use
                ],
                'label' => 'User Role'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}