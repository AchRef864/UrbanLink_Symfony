<?php
// src/Form/TaxiType.php

namespace App\Form;

use App\Entity\Taxi;
use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;

class TaxiType extends AbstractType
{
    private array $models = [
        'Toyota'      => ['Corolla', 'Yaris', 'Land Cruiser', 'Camry', 'Hilux'],
        'BMW'         => ['Series 3', 'Series 5', 'X5', 'X3', 'Z4'],
        'Peugeot'     => ['208', '3008', '508', 'Partner', '3008 GT'],
        'Renault'     => ['Clio', 'Megane', 'Kadjar', 'Twingo', 'Captur'],
        'Ford'        => ['Focus', 'Fiesta', 'Mustang', 'Kuga', 'Explorer'],
        'Mercedes'    => ['C-Class', 'E-Class', 'S-Class', 'GLA', 'CLA'],
        'Audi'        => ['A3', 'A4', 'Q5', 'Q7', 'A6'],
        'Volkswagen'  => ['Golf', 'Passat', 'Tiguan', 'Jetta', 'Polo'],
        'Honda'       => ['Civic', 'Accord', 'CR-V', 'Jazz', 'HR-V'],
        'Nissan'      => ['Micra', 'Qashqai', 'Juke', 'X-Trail', 'Leaf'],
    ];

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        // Récupérer l'option 'user' passée depuis le contrôleur
        /** @var User|null $user */
        $user = $options['user'] ?? null;
        if ($user instanceof User) {
            // Affiche le nom du taxiste en champ non mappé
            $builder
                ->add('pilote', TextType::class, [
                    'mapped'   => false,
                    'data'     => $user->getName(),
                    'disabled' => true,
                    'label'    => 'Taxiste',
                ])
                // (facultatif) stocker l'ID en champ caché
                ->add('userId', HiddenType::class, [
                    'mapped' => false,
                    'data'   => $user->getId(),
                ]);
        }

        $builder
            ->add('immatriculation', TextType::class, [
                'empty_data' => '',
            ])
            ->add('marque', ChoiceType::class, [
                'choices'     => array_combine(array_keys($this->models), array_keys($this->models)),
                'placeholder' => 'Choisissez une marque',
                'empty_data'  => '',
            ])
            ->add('modele', ChoiceType::class, [
                'choices'     => [],
                'placeholder' => 'Choisissez d\'abord une marque',
                'empty_data'  => '',
            ])
            ->add('anneeFabrication', IntegerType::class, [
                'attr'     => ['min' => date('Y') - 9, 'max' => date('Y')],
                'required' => false,
            ])
            ->add('capacite', IntegerType::class, [
                'attr' => ['min' => 1, 'max' => 9],
            ])
            ->add('zoneDesserte', ChoiceType::class, [
                'choices'     => [
                    'Tunis'   => 'Tunis',
                    'Sousse'  => 'Sousse',
                    'Sfax'    => 'Sfax',
                    'Nabeul'  => 'Nabeul',
                    'Bizerte' => 'Bizerte',
                ],
                'placeholder' => 'Choisissez une zone de desserte',
                'empty_data'  => '',
            ])
            ->add('statut', ChoiceType::class, [
                'choices'     => [
                    'Disponible'     => 'Disponible',
                    'En course'      => 'En course',
                    'Occupé'         => 'Indisponible',
                    'En maintenance' => 'En maintenance',
                    'Hors service'   => 'Hors service',
                ],
                'placeholder' => 'Choisissez un statut',
                'empty_data'  => '',
            ])
            ->add('licenceNumero', TextType::class, [
                'empty_data' => '',
            ])
            ->add('licenceDateObtention', DateType::class, [
               'widget'   => 'single_text',
               'required' => true,
               'html5'    => true,
            ])
            ->add('tarifBase', TextType::class, [
                'empty_data' => '',
            ])
            ->add('longitude', HiddenType::class, [
                'required'   => false,
                'empty_data' => null,
            ])
            ->add('latitude', HiddenType::class, [
                'required'   => false,
                'empty_data' => null,
            ]);

        // Dynamique : remplissage du champ 'modele' selon la marque sélectionnée
        $formModifier = function ($form, ?string $marque) {
            $choices = $marque && isset($this->models[$marque])
                ? array_combine($this->models[$marque], $this->models[$marque])
                : [];
            $form->add('modele', ChoiceType::class, [
                'choices'     => $choices,
                'placeholder' => 'Choisissez un modèle',
                'empty_data'  => '',
            ]);
        };

        $builder->get('marque')->addEventListener(
            FormEvents::POST_SUBMIT,
            function (FormEvent $event) use ($formModifier) {
                $formModifier($event->getForm()->getParent(), $event->getForm()->getData());
            }
        );

        $builder->addEventListener(
            FormEvents::PRE_SET_DATA,
            function (FormEvent $event) use ($formModifier) {
                $data   = $event->getData();
                $marque = $data?->getMarque();
                $formModifier($event->getForm(), $marque);
            }
        );

        // Convertir null en chaîne vide pour éviter les contraintes
        $builder->addEventListener(FormEvents::PRE_SUBMIT, function (FormEvent $event) {
            $data = $event->getData() ?: [];
            foreach (['marque', 'modele', 'zoneDesserte', 'statut'] as $field) {
                if (array_key_exists($field, $data) && null === $data[$field]) {
                    $data[$field] = '';
                }
            }
            $event->setData($data);
        });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Taxi::class,
            'user'       => null,  // ← Déclaration de l’option `user`
        ]);
        $resolver->setAllowedTypes('user', ['App\\Entity\\User', 'null']);
    }
}
