<?php

namespace App\Form;

use App\Entity\Maintenance;
use App\Entity\Vehicle;
use App\Entity\ServiceTypes; // Make sure this is the correct namespace
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints as Assert;

class MaintenanceType extends AbstractType
{
    private ServiceTypes $serviceTypes;

    // Add constructor to inject ServiceTypes
    public function __construct(ServiceTypes $serviceTypes)
    {
        $this->serviceTypes = $serviceTypes;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $servicesMap = $this->serviceTypes->getServicesMap();
        $serviceChoices = [];

        foreach ($servicesMap as $serviceType => $serviceData) {
            $serviceChoices[$serviceType . ' (€' . $serviceData['price'] . ')'] = $serviceType;
        }

        $builder
            ->add('vehicle', EntityType::class, [
                'label' => 'Vehicle',
                'class' => Vehicle::class,
                'choice_label' => function (Vehicle $vehicle) {
                    return sprintf('%s %s %s (%s)', 
                        $vehicle->getType(), 
                        $vehicle->getBrand(), 
                        $vehicle->getModel(), 
                        $vehicle->getLicensePlate()
                    );
                },
                'placeholder' => 'Select a vehicle',
                'required' => true,
                'constraints' => [
                    new Assert\NotNull(['message' => 'Vehicle is required.']),
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('maintenanceDate', DateTimeType::class, [
                'label' => 'Maintenance Date',
                'widget' => 'single_text',
                'html5' => true,
                'required' => true,
                'data' => new \DateTime(),
                'attr' => [
                    'class' => 'form-control',
                    'min' => (new \DateTime())->format('Y-m-d\TH:i'),
                    'placeholder' => 'Select a date and time'
                ],
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Maintenance date is required.']),
                    new Assert\GreaterThanOrEqual([
                        'value' => 'today',
                        'message' => 'Maintenance date cannot be in the past.'
                    ]),
                ],
            ])
            ->add('serviceType', ChoiceType::class, [
                'label' => 'Service Type',
                'choices' => $serviceChoices,
                'placeholder' => '-- Select Service Type --',
                'required' => true,
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Service type is required.']),
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'required' => true,
                'empty_data' => '',
                'constraints' => [
                    new Assert\NotBlank(['message' => 'Description is required.']),
                    new Assert\Length([
                        'max' => 500,
                        'maxMessage' => 'Description cannot exceed {{ limit }} characters.'
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Enter maintenance details...',
                    'rows' => 5
                ]
                ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Maintenance::class,
        ]);
    }
}