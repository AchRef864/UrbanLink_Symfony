<?php
// src/Form/CourseType.php

namespace App\Form;

use App\Entity\Course;
use App\Entity\Taxi;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $cities = [
            'Tunis'     => 'Tunis',
            'Sousse'    => 'Sousse',
            'Sfax'      => 'Sfax',
            'Nabeul'    => 'Nabeul',
            'Bizerte'   => 'Bizerte',
            'Gabès'     => 'Gabès',
            'Ariana'    => 'Ariana',
            'Ben Arous' => 'Ben Arous',
            'Manouba'   => 'Manouba',
            'Mahdia'    => 'Mahdia',
        ];

        $builder
            ->add('taxi', EntityType::class, [
                'class'         => Taxi::class,
                'query_builder' => function ($repo) use ($options) {
                    $qb = $repo->createQueryBuilder('t')
                        ->where('t.statut = :statut')
                        ->setParameter('statut', 'Disponible');

                    if ($options['data'] && $options['data']->getTaxi()) {
                        $qb->orWhere('t.id = :taxiId')
                           ->setParameter('taxiId', $options['data']->getTaxi()->getId());
                    }
                    return $qb;
                },
                'choice_label' => fn(Taxi $taxi) => $taxi->getImmatriculation() . ' (' . $taxi->getTarifKm() . ' TND/km)',
                'choice_attr'  => fn(Taxi $taxi) => [
                    'data-tarif' => number_format($taxi->getTarifKm(), 2, '.', '')
                ],
                'placeholder'  => 'Sélectionnez un taxi',
                'required'     => true,
            ])
            ->add('dateCourse', DateTimeType::class, [
                'widget' => 'single_text',
            ])
            // Pour villeDepart :
->add('villeDepart', TextType::class, [
    'constraints' => [
        new NotBlank(['message' => 'La ville de départ est obligatoire.'])
    ],
    'attr' => [
        'readonly' => 'readonly'
    ]
])

// Pour villeArrivee :
->add('villeArrivee', TextType::class, [
    'constraints' => [
        new NotBlank(['message' => 'La ville d\'arrivée est obligatoire.'])
    ],
    'attr' => [
        'readonly' => 'readonly'
    ]
])
            ->add('distanceKm', NumberType::class, [
                'attr' => ['id' => 'distanceKm'],
            ])
            ->add('montant', NumberType::class, [
                'data' => 0,
                'attr' => [
                    'readonly' => true,
                    'id'       => 'montant',
                ],
            ]);

        if ($options['show_statut']) {
            $builder->add('statut', ChoiceType::class, [
                'choices'     => [
                    'En attente' => 'En attente',
                    'En course'  => 'En course',
                    'Terminée'   => 'Terminée',
                    'Annulée'    => 'Annulée',
                ],
                'placeholder' => 'Choisissez un statut',
                'empty_data'  => '',
            ]);
        }

        // Écouteur PRE_SUBMIT pour transformer null en '' pour certains champs
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function(FormEvent $event) {
            $data = $event->getData();
            foreach (['villeDepart', 'villeArrivee', 'statut'] as $field) {
                if (array_key_exists($field, $data) && null === $data[$field]) {
                    $data[$field] = '';
                }
            }
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class'             => Course::class,
            'show_statut'            => true,
            'auto_calculate_montant' => false,
        ]);
    }
}
