<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Avis;
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
                    'Subscription Complaint' => 'subscription complaint',
                ],
                'placeholder' => 'Select a complaint type',
                'required' => true,
            ])
            ->add('commentaire', TextareaType::class, [
                'label' => 'Comment',
                'required' => true,
                'empty_data' => '',  // Ensures an empty string is submitted if the field is left blank
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
