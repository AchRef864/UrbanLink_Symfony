<?php
// src/Form/ReservationType.php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Trajet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /** @var Trajet $trajet */
        $trajet = $options['trajet'];
        
        $builder
            ->add('numberOfSeats', IntegerType::class, [
                'label' => 'Nombre de places',
                // Remove 'data' and 'empty_data' as they can interfere with binding
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez entrer un nombre de places'
                    ]),
                    new Assert\Positive([
                        'message' => 'Le nombre de places doit être positif'
                    ]),
                    new Assert\LessThanOrEqual([
                        'value' => $trajet->getAvailableSeats(),
                        'message' => 'Il ne reste que {{ compared_value }} places disponibles'
                    ]),
                    new Assert\Type([
                        'type' => 'integer',
                        'message' => 'Le nombre de places doit être un entier'
                    ])
                ],
                'attr' => [
                    'min' => 1,
                    'max' => $trajet->getAvailableSeats(),
                    'class' => 'form-control',
                    'value' => 1  // Set default value in HTML instead
                ]
            ]);
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'reservation_item',
            // Add this to prevent null values from being accepted
            'allow_extra_fields' => false,
            'by_reference' => false
        ]);
        
        $resolver->setRequired(['trajet']);
        $resolver->setAllowedTypes('trajet', Trajet::class);
    }
}