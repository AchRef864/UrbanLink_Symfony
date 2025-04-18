<?php

namespace App\Form;

use App\Entity\AbonnementReservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Regex;

class AbonnementReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('fullname', TextType::class, [
            'label' => 'Nom complet',
            'data' => $options['user_name'] ?? null,
            'attr' => ['placeholder' => 'Entrez votre nom complet']
        ])
            ->add('dateDebut', DateType::class, [
                'label' => 'Date de début',
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('dateFin', DateType::class, [
                'label' => 'Date de fin',
                'widget' => 'single_text',
                'html5' => true,
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Statut',
                'choices' => [
                    'Confirmé' => 'confirmé',
                    'En attente' => 'en attente',
                    'Annulé' => 'annulé',
                ],
                'data' => 'en attente', // Default value
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => AbonnementReservation::class,
            'user_name' => null,
            'abonnement' => null,
        ]);
    }

    
}