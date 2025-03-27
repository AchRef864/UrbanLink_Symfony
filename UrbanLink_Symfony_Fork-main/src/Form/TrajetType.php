<?php

namespace App\Form;

use App\Entity\Trajet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class TrajetType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('departure', TextType::class, [
                'label' => 'Lieu de départ',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Paris'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir un lieu de départ']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'Le lieu de départ doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'Le lieu de départ ne peut excéder {{ limit }} caractères'
                    ]),
                    new Assert\Regex([
                        'pattern' => "/^[a-zA-ZÀ-ÿ\s\-']+$/",
                        'message' => 'Seules les lettres, espaces et tirets sont autorisés'
                    ])
                ]
            ])
            ->add('destination', TextType::class, [
                'label' => 'Destination',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: Lyon'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir une destination']),
                    new Assert\Length([
                        'min' => 2,
                        'max' => 100,
                        'minMessage' => 'La destination doit contenir au moins {{ limit }} caractères',
                        'maxMessage' => 'La destination ne peut excéder {{ limit }} caractères'
                    ]),
                    new Assert\Regex([
                        'pattern' => "/^[a-zA-ZÀ-ÿ\s\-']+$/",
                        'message' => 'Seules les lettres, espaces et tirets sont autorisés'
                    ])
                ]
            ])
            ->add('distance', NumberType::class, [
                'label' => 'Distance (km)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 150.5',
                    'step' => '0.1'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir une distance']),
                    new Assert\Positive(['message' => 'La distance doit être positive']),
                    new Assert\LessThan([
                        'value' => 1000,
                        'message' => 'La distance ne peut excéder {{ compared_value }} km'
                    ])
                ]
            ])
            ->add('duration', TextType::class, [
                'label' => 'Durée (HH:MM)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 02:30',
                    'pattern' => '^([01][0-9]|2[0-3]):[0-5][0-9]$'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir une durée']),
                    new Assert\Regex([
                        'pattern' => '/^([01][0-9]|2[0-3]):[0-5][0-9]$/',
                        'message' => 'Le format doit être HH:MM (ex: 02:30)'
                    ])
                ]
            ])
            ->add('departureTime', DateTimeType::class, [
                'label' => 'Heure de départ',
                'widget' => 'single_text',
                'html5' => true,
                'data' => new \DateTime(),
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i')
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir une heure de départ']),
                    new Assert\GreaterThan([
                        'value' => new \DateTime(),
                        'message' => 'Le départ doit être dans le futur'
                    ])
                ]
            ])
            ->add('arrivalTime', DateTimeType::class, [
                'required' => false,
                'widget' => 'single_text',
                'attr' => ['class' => 'd-none'],
                'row_attr' => ['class' => 'd-none']
            ])
            ->add('price', NumberType::class, [
                'label' => 'Prix (€)',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 45.99',
                    'step' => '0.01'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez saisir un prix']),
                    new Assert\Positive(['message' => 'Le prix doit être positif']),
                    new Assert\LessThan([
                        'value' => 10000,
                        'message' => 'Le prix ne peut excéder {{ compared_value }}'
                    ])
                ]
            ])
            ->add('vehicleId', NumberType::class, [
                'label' => 'ID Véhicule',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Optionnel'
                ]
            ])
            ->add('typeTransport', ChoiceType::class, [
                'label' => 'Type de transport',
                'choices' => [
                    'Transport public' => 'PublicTransport',
                    'Covoiturage' => 'Carpooling'
                ],
                'attr' => ['class' => 'form-select'],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Veuillez choisir un type de transport']),
                    new Assert\Choice([
                        'choices' => ['PublicTransport', 'Carpooling'],
                        'message' => 'Choix invalide'
                    ])
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Trajet::class,
            'attr' => ['novalidate' => 'novalidate']
        ]);
    }
}
