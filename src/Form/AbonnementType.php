<?php

namespace App\Form;

use App\Entity\Abonnement;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class AbonnementType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'Mensuel' => 'mensuel',
                    'Annuel' => 'annuel',
                    'Trimestriel' => 'trimestriel',
                ],
                'label' => 'Type d\'abonnement',
            ])
            ->add('prix', MoneyType::class, [
                'currency' => '',
                'label' => 'Prix',
            ])
            ->add('date_debut', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
            ])
            ->add('date_fin', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
            ])
            ->add('imageFile', FileType::class, [
                'label' => 'Image (JPEG, PNG, WebP)',
                'mapped' => false,
                'constraints' => [
                    new File([ 
                        'maxSize' => '2M',
                        'mimeTypes' => ['image/jpeg', 'image/png', 'image/webp'],
                        'mimeTypesMessage' => 'Please upload a valid image file',
                    ])
                ],
                'required' => false,
            ])
        ;
    }
}