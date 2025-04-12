<?php

namespace App\Form;

use App\Entity\Reservation;
use App\Entity\Trajet;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Validator\Constraints as Assert;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        /** @var Trajet $trajet */
        $trajet = $options['trajet'];
        
        $builder
            ->add('numberOfSeats', IntegerType::class, [
                'label' => 'Nombre de places',
                'data' => 1,
                'constraints' => [
                    new Assert\NotBlank([
                        'message' => 'Veuillez entrer un nombre de places'
                    ]),
                    new Assert\Positive([
                        'message' => 'Le nombre de places doit être positif'
                    ]),
                    new Assert\LessThanOrEqual([
                        'value' => $trajet->getAvailableSeats(),
                        'message' => 'Il ne reste que {{ compared_value }} places disponibles'
                    ]),
                    new Assert\Type([
                        'type' => 'integer',
                        'message' => 'Le nombre de places doit être un entier'
                    ])
                ],
                'attr' => [
                    'min' => 1,
                    'max' => $trajet->getAvailableSeats(),
                    'class' => 'form-control mt-1 block w-full rounded-md border border-gray-300 py-2 px-3 shadow-sm focus:border-blue-500 focus:ring-blue-500 sm:text-sm',
                    'oninput' => 'updateTotalPricePreview(this.value)' // JS function
                ]
            ]);
    }
    
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservation::class,
            'csrf_protection' => true,
            'csrf_field_name' => '_token',
            'csrf_token_id' => 'reservation_item',
        ]);
        
        $resolver->setRequired(['trajet']);
        $resolver->setAllowedTypes('trajet', Trajet::class);
    }
}
