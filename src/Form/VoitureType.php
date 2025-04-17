<?php

namespace App\Form;

use App\Entity\Voiture;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

class VoitureType extends AbstractType
{
    private const CAR_BRANDS = [
        'BMW' => 'BMW',
        'Mercedes' => 'Mercedes',
        'Audi' => 'Audi',
        'Volkswagen' => 'Volkswagen',
        'Toyota' => 'Toyota',
        'Honda' => 'Honda',
        'Ford' => 'Ford',
        'Renault' => 'Renault',
        'Peugeot' => 'Peugeot',
        'Citroën' => 'Citroën',
        'Hyundai' => 'Hyundai',
        'Kia' => 'Kia',
        'Nissan' => 'Nissan',
        'Mazda' => 'Mazda',
        'Volvo' => 'Volvo',
    ];

    private const CAR_STATES = [
        'Disponible' => 'disponible',
        'En maintenance' => 'en maintenance',
        'Réservé' => 'réservé'
    ];

    private const CONTRACT_TYPES = [
        'Premium' => 'premium',
        'Standard' => 'standard',
        'Économique' => 'economique'
    ];

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('immatriculation', TextType::class, [
                'label' => 'Immatriculation',
                'attr' => [
                    'placeholder' => 'XXX-TUN-XXX',
                    'pattern' => '[A-Z0-9]{3}-TUN-[A-Z0-9]{3}',
                    'title' => 'Format: XXX-TUN-XXX (lettres majuscules et chiffres uniquement)'
                ]
            ])
            ->add('marque', ChoiceType::class, [
                'label' => 'Marque',
                'choices' => self::CAR_BRANDS,
                'placeholder' => 'Sélectionnez une marque',
                'attr' => ['class' => 'form-select']
            ])
            ->add('etat', ChoiceType::class, [
                'label' => 'État',
                'choices' => self::CAR_STATES,
                'placeholder' => 'Sélectionnez un état',
                'attr' => ['class' => 'form-select']
            ])
            ->add('contrat', ChoiceType::class, [
                'label' => 'Type de Contrat',
                'choices' => self::CONTRACT_TYPES,
                'placeholder' => 'Sélectionnez un type de contrat',
                'attr' => ['class' => 'form-select']
            ])
            ->add('image', FileType::class, [
                'label' => 'Photo de la voiture',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '2M',
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/png',
                            'image/webp',
                        ],
                        'mimeTypesMessage' => 'Veuillez télécharger une image valide (JPEG, PNG ou WebP)',
                    ])
                ],
                'attr' => [
                    'accept' => 'image/jpeg,image/png,image/webp',
                    'class' => 'form-control'
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Voiture::class,
        ]);
    }
}