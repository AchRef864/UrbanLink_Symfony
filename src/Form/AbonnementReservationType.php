<?php

namespace App\Form;

use App\Entity\AbonnementReservation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class AbonnementReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('fullname', TextType::class, [
            'label' => 'Nom complet',
            'data' => $options['user_name'] ?? null,
            'attr' => ['placeholder' => 'Entrez votre nom complet']
        ]);
            // Removed dateDebut, dateFin, and statut fields
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => AbonnementReservation::class,
            'user_name' => null,
        ]);
    }
}