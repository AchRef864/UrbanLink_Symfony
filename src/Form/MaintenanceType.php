<?php

namespace App\Form;

use App\Entity\Maintenance;
use App\Entity\Vehicle;
use App\Repository\VehicleRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Security\Core\Security;

class MaintenanceType extends AbstractType
{
    private $security;

    // Inject Security service via constructor
    public function __construct(Security $security)
    {
        $this->security = $security;
    }


    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vehicle', EntityType::class, [
                'class' => Vehicle::class,
                'choice_label' => function (Vehicle $vehicle) {
                    return $vehicle->getBrand() . ' ' . $vehicle->getModel() . ' (' . $vehicle->getLicenseplate() . ')';
                },
                'placeholder' => '-- Select Vehicle --',
                'required' => true,
                'query_builder' => function (VehicleRepository $repository) {
                    // Get the security service (injected in form type)
                    $security = $this->security;
                    
                    if ($security->isGranted('ROLE_ADMIN')) {
                        // Load all vehicles for admin
                        return $repository->createQueryBuilder('v')
                            ->orderBy('v.brand', 'ASC');
                    } else {
                        // Load only user's vehicles for regular users
                        $user = $security->getUser();
                        return $repository->createQueryBuilder('v')
                            ->where('v.driver = :user')
                            ->setParameter('user', $user)
                            ->orderBy('v.brand', 'ASC');
                    }
                }
            ])
            ->add('maintenanceDate', DateTimeType::class, [
                'widget' => 'single_text',
                'required' => true,
                'data' => new \DateTimeImmutable(),
            ])
            ->add('serviceType', ChoiceType::class, [
                'choices' => [
                    'Oil Change' => 'Oil Change',
                    'Tire Rotation' => 'Tire Rotation',
                    'Brake Service' => 'Brake Service',
                    'Engine Tune-up' => 'Engine Tune-up',
                    'Air Conditioning' => 'Air Conditioning',
                ],
                'placeholder' => '-- Select Service Type --',
                'required' => true,
            ])
            ->add('serviceProvider', TextType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Service Provider Name'
                ]
            ])
            ->add('cost', NumberType::class, [
                'required' => true,
                'html5' => true,
                'attr' => [
                    'min' => 0,
                    'step' => 'any',
                    'placeholder' => '0.00'
                ],
                'data' => 0.0,
            ])
            ->add('description', TextareaType::class, [
                'required' => true,
                'attr' => [
                    'placeholder' => 'Detailed description of maintenance',
                    'rows' => 5
                ]
            ])
        ;
        
        // Add a data transformer to handle null values for cost
        $builder->get('cost')
            ->addModelTransformer(new CallbackTransformer(
                function ($costFromEntity) {
                    // Transform from entity to form
                    return $costFromEntity === null ? 0.0 : $costFromEntity;
                },
                function ($costFromForm) {
                    // Transform from form to entity
                    return $costFromForm === null ? 0.0 : $costFromForm;
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Maintenance::class,
        ]);
    }
}
