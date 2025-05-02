<?php

namespace App\Form;

use App\Entity\Trajet;
use App\Entity\Vehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('departure', TextType::class, [
                'label' => 'Lieu de départ',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le lieu de départ est obligatoire.']),
                ],
                'attr' => ['placeholder' => 'Ex : Tunis']
            ])
            ->add('destination', TextType::class, [
                'label' => 'Destination',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'La destination est obligatoire.']),
                ],
                'attr' => ['placeholder' => 'Ex : Sousse']
            ])
            ->add('distance', IntegerType::class, [
                'label' => 'Distance (km)',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'La distance est obligatoire.']),
                ],
                'attr' => ['placeholder' => 'Ex : 120']
            ])
            ->add('duration', TextType::class, [
                'label' => 'Durée (HH:MM)',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'La durée est obligatoire.']),
                    new \Symfony\Component\Validator\Constraints\Regex([
                        'pattern' => '/^([01][0-9]|2[0-3]):[0-5][0-9]$/',
                        'message' => 'Le format doit être HH:MM (ex: 02:30)',
                    ]),
                ],
                'attr' => ['placeholder' => 'Ex : 02:30'],
            ])
            ->add('departureTime', DateTimeType::class, [
                'label' => 'Heure de départ',
                'required' => true,
                'widget' => 'single_text',
                'constraints' => [
                    new NotBlank(['message' => 'L\'heure de départ est obligatoire.']),
                ],
                'attr' => ['placeholder' => 'Ex : 2025-04-20 12:00']
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix',
                'required' => true,
                'scale' => 2,
                'constraints' => [
                    new NotBlank(['message' => 'Le prix est obligatoire.']),
                ],
                'attr' => ['placeholder' => 'Ex : 50.00']
            ])
            ->add('availableSeats', IntegerType::class, [
                'label' => 'Places disponibles',
                'required' => true,
                'constraints' => [
                    new NotBlank(['message' => 'Le nombre de places est obligatoire.']),
                ],
                'attr' => ['placeholder' => 'Ex : 4']
            ])
            ->add('typeTransport', ChoiceType::class, [
                'label' => 'Type de transport',
                'choices' => [
                    'Transport public' => 'PublicTransport',
                    'Covoiturage' => 'Carpooling',
                ],
                'constraints' => [
                    new NotBlank(['message' => 'Le type de transport est obligatoire.']),
                ],
            ])
            ->add('vehicle', EntityType::class, [
                'class' => Vehicle::class,
                'choices' => $options['vehicles'], // Pass filtered list if needed
                'choice_label' => 'displayName',
                'choice_attr' => function ($vehicle) {
                    return ['data-max-seats' => $vehicle->getSeats()];
                },
                'label' => 'Véhicule',
                'required' => false,
                'placeholder' => 'Choisir un véhicule',
            ])
            ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
            'vehicles' => [],
            'user' => null, // <-- Ajoutez ceci
        ]);
    }
}
