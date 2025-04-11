<?php

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

class CourseType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        // Liste des villes disponibles
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
                'query_builder' => function (\App\Repository\TaxiRepository $repo) use ($options) {
                    $qb = $repo->createQueryBuilder('t')
                        ->where('t.statut = :statut')
                        ->setParameter('statut', 'Disponible');
                    
                    // Si le formulaire est en modification et qu'un taxi est déjà associé, l'inclure dans la liste
                    if ($options['data'] && $options['data']->getTaxi()) {
                        $qb->orWhere('t.id = :taxiId')
                           ->setParameter('taxiId', $options['data']->getTaxi()->getId());
                    }
                    return $qb;
                },
                'choice_label'  => function(Taxi $taxi) {
                    return $taxi->getImmatriculation() . ' (' . $taxi->getTarifKm() . ' TND/km)';
                },
                // Formattage du tarif avec deux décimales et point comme séparateur
                'choice_attr'   => function(Taxi $taxi, $key, $value) {
                    return ['data-tarif' => number_format($taxi->getTarifKm(), 2, '.', '')];
                },
                'placeholder'   => 'Sélectionnez un taxi',
                'required'      => true,
            ])
            ->add('dateCourse', DateTimeType::class, [
                'widget'   => 'single_text',
                'required' => true,
            ])
            ->add('villeDepart', ChoiceType::class, [
                'choices'     => $cities,
                'placeholder' => 'Choisissez la ville de départ',
                'required'    => true,
            ])
            ->add('villeArrivee', ChoiceType::class, [
                'choices'     => $cities,
                'placeholder' => 'Choisissez la ville d\'arrivée',
                'required'    => true,
            ])
            ->add('distanceKm', NumberType::class, [
                'required' => true,
                'attr'     => ['id' => 'distanceKm']
            ])
            ->add('montant', NumberType::class, [
                'required'   => false, // Non requis, car calculé automatiquement
                'data'       => 0,     // Valeur par défaut pour forcer l'affichage
                'attr'       => [
                    'readonly' => true, // Lecture seule, l'utilisateur ne peut pas le modifier
                    'id'       => 'montant'
                ],
            ]);

        // Affichage du champ statut uniquement si autorisé par l'option
        if ($options['show_statut']) {
            $builder->add('statut', ChoiceType::class, [
                'choices'  => [
                    'En attente' => 'En attente',
                    'En course'   => 'En course',
                    'Terminée'   => 'Terminée',
                    'Annulée'   => 'Annulée',
                ],
                'required' => true,
                'label'    => 'Statut',
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'             => Course::class,
            'show_statut'            => true,  // Option pour afficher ou non le champ statut
            'auto_calculate_montant' => false, // Option complémentaire (non utilisée ici côté JS)
        ]);
    }
}
