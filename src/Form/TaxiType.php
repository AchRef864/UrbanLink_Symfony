<?php
namespace App\Form;

use App\Entity\Taxi;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class TaxiType extends AbstractType
{
    private $models = [
        'Toyota' => ['Corolla', 'Yaris', 'Land Cruiser', 'Camry', 'Hilux'],
        'BMW' => ['Series 3', 'Series 5', 'X5', 'X3', 'Z4'],
        'Peugeot' => ['208', '3008', '508', 'Partner', '3008 GT'],
        'Renault' => ['Clio', 'Megane', 'Kadjar', 'Twingo', 'Captur'],
        'Ford' => ['Focus', 'Fiesta', 'Mustang', 'Kuga', 'Explorer'],
        'Mercedes' => ['C-Class', 'E-Class', 'S-Class', 'GLA', 'CLA'],
        'Audi' => ['A3', 'A4', 'Q5', 'Q7', 'A6'],
        'Volkswagen' => ['Golf', 'Passat', 'Tiguan', 'Jetta', 'Polo'],
        'Honda' => ['Civic', 'Accord', 'CR-V', 'Jazz', 'HR-V'],
        'Nissan' => ['Micra', 'Qashqai', 'Juke', 'X-Trail', 'Leaf'],
    ];

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('immatriculation')
            ->add('marque', ChoiceType::class, [
                'choices' => array_combine(array_keys($this->models), array_keys($this->models)),
                'placeholder' => 'Choisissez une marque',
            ])
            ->add('modele', ChoiceType::class, [
                'choices' => [],
                'placeholder' => 'Choisissez d\'abord une marque',
            ])
            ->add('anneeFabrication', IntegerType::class, [
                'attr' => ['min' => 2014, 'max' => date('Y')],
            ])
            ->add('capacite', IntegerType::class, [
                'attr' => ['min' => 1, 'max' => 9],
            ])
            ->add('zoneDesserte', ChoiceType::class, [
                'choices' => [
                    'Tunis' => 'Tunis',
                    'Sousse' => 'Sousse',
                    'Sfax' => 'Sfax',
                    'Nabeul' => 'Nabeul',
                    'Bizerte' => 'Bizerte',
                ],
                'placeholder' => 'Choisissez une zone de desserte',
            ])
            ->add('statut', ChoiceType::class, [
                'choices' => [
                    'Disponible'      => 'Disponible',
                    'En course'       => 'En course',
                    'Indisponible'    => 'Indisponible',
                    'En maintenance'  => 'En maintenance',
                    'Hors service'    => 'Hors service',

                ],
                'placeholder' => 'Choisissez un statut',
            ])
            ->add('licenceNumero')
            ->add('licenceDateObtention', DateType::class, [
                'widget' => 'single_text',
            ])
            ->add('tarifBase');

        // Dynamically update the "modele" field based on the selected "marque"
        $formModifier = function ($form, ?string $marque) {
            $choices = $marque && isset($this->models[$marque]) ? array_combine($this->models[$marque], $this->models[$marque]) : [];
            $form->add('modele', ChoiceType::class, [
                'choices' => $choices,
                'placeholder' => 'Choisissez un modèle',
            ]);
        };

        $builder->get('marque')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $form = $event->getForm();
                $marque = $form->getData();
                $formModifier($form->getParent(), $marque);
            }
        );

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data = $event->getData();
                $marque = $data ? $data->getMarque() : null;
                $formModifier($event->getForm(), $marque);
            }
        );
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Taxi::class,
        ]);
    }
}