<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Avis;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AvisType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            // Keep 'type' field
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Taxi Complaint' => 'taxi complaint',
                    'Subscription Complaint' => 'subscription complaint',
                ],
                'placeholder' => 'Please select a complaint type', 
                'required' => true,
            ])
            // Keep 'commentaire' field
            ->add('commentaire', TextareaType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter your comment here',
                ],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
