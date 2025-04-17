<?php

namespace App\Form;

use App\Entity\User;
use App\Entity\Vehicle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('model', TextType::class)
            ->add('brand', TextType::class)
            ->add('licensePlate', TextType::class, [
                'property_path' => 'licensePlate'
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Car' => 'Car',
                    'Van' => 'Van',
                    'Bus' => 'Bus',
                    'Minibus' => 'Minibus',
                    'Motorcycle' => 'Motorcycle',
                ],
                'expanded' => false, // Important for our custom implementation
                'multiple' => false,
                'label' => 'Vehicle Type',
            ])
            ->add('seats', IntegerType::class)
            ->add('image', TextType::class)
            ->add('color', TextType::class, [
                'required' => true
            ])
            ->add('year', IntegerType::class)
            ->add('airConditioning', CheckboxType::class, [
                'property_path' => 'airConditioning',
                'required' => true
            ])
            ->add('isAvailable', CheckboxType::class, [
                'property_path' => 'isAvailable',
                'required' => true
            ])
            ->add('isVerified', CheckboxType::class, [
                'property_path' => 'isVerified',
                'required' => true
            ])
            ->add('driver', EntityType::class, [
                'class' => User::class,
                'choice_label' => 'id',
                'required' => true,
                'property_path' => 'driver'
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Vehicle::class,
        ]);
    }
}