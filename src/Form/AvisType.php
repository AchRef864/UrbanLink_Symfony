<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\Taxi;
use App\Entity\Vehicle;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'label' => 'Type of Complaint',
                'choices' => [
                    'Taxi Complaint' => 'taxi complaint',
                    'Vehicle Complaint' => 'vehicle complaint',
                    'Subscription Complaint' => 'subscription complaint',
                ],
                'placeholder' => 'Select a complaint type',
                'required' => true,
            ])
            ->add('taxi', EntityType::class, [
                'class' => Taxi::class,
                'choice_label' => 'immatriculation',
                'label' => 'Taxi Immatriculation',
                'placeholder' => 'Select a taxi',
                'required' => false,
                'mapped' => true,
            ])
            ->add('vehicle', EntityType::class, [
                'class' => Vehicle::class,
                'choice_label' => 'licensePlate',
                'label' => 'Vehicle License Plate',
                'placeholder' => 'Select a vehicle',
                'required' => false,
                'mapped' => true,
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Comment',
                'required' => true,
                'empty_data' => '',
                'attr' => [
                    'placeholder' => 'Enter your comment here...',
                ],
            ])
            ->add('submit', SubmitType::class, [
                'label' => 'Submit',
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
