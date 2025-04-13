<?php

namespace App\Form;

use App\Entity\Trajet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('departure', TextType::class, [
            'label' => 'Lieu de départ',
            'required' => true,
            'empty_data' => '', // Default value if the field is left empty
            'constraints' => [
                new NotBlank(['message' => 'Le lieu de départ est obligatoire.']),
            ],
        ])
        ->add('destination', TextType::class, [
            'label' => 'Destination',
            'required' => true,
            'empty_data' => '', // Default value if the field is left empty
            'constraints' => [
                new NotBlank(['message' => 'Le lieu de destination est obligatoire.']),
            ],
        ])
        
            ->add('distance', NumberType::class, [
                'label' => 'Distance (en km)',
                'required' => true,
                
                'scale' => 2,
                'constraints' => [
                    new NotBlank(['message' => 'La distance est obligatoire.']),
                ],
            ])
            ->add('duration', TextType::class, [
                'label' => 'Durée (HH:MM)',
                'required' => true,
                'attr' => [
                    'placeholder' => 'Ex : 02:30'
                ],
                'empty_data' => '',  // Set empty data to an empty string instead of null
                'constraints' => [
                    new NotBlank(['message' => 'La durée est obligatoire.']),
                ],
            ])
            ->add('departureTime', DateTimeType::class, [
                'label' => 'Heure de départ',
                'widget' => 'single_text',
                'required' => true,
                'html5' => true,
                'data' => new \DateTime(),
                'empty_data' => '', 
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i')
                ],
                'constraints' => [
                    new NotBlank(['message' => 'L\'heure de départ est obligatoire.']),
                ],
            ])
            ->add('arrivalTime', DateTimeType::class, [
                'label' => 'Heure d\'arrivée (optionnelle)',
                'widget' => 'single_text',
                'required' => false,
                'html5' => true,
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix (en TND)',
                'required' => true,
                'scale' => 2,
                'empty_data' => 0.0, 
                'constraints' => [
                    new NotBlank(['message' => 'Le prix est obligatoire.']),
                ],
            ])
            ->add('availableSeats', IntegerType::class, [
                'label' => 'Places disponibles',
                'required' => true,
                'empty_data' => 0, 
                'constraints' => [
                    new NotBlank(['message' => 'Le nombre de places est obligatoire.']),
                ],
            ])
            ->add('vehicleId', IntegerType::class, [
                'label' => 'ID du véhicule (optionnel)',
                'required' => false,
            ])
            ->add('typeTransport', ChoiceType::class, [
                'label' => 'Type de transport',
                'choices' => [
                    'Transport Public' => 'PublicTransport',
                    'Covoiturage' => 'Carpooling',
                ],
                'required' => true,
                'placeholder' => 'Choisissez un type',
                'constraints' => [
                    new NotBlank(['message' => 'Le type de transport est obligatoire.']),
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
        ]);
    }
}
