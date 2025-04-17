<?php

namespace App\Form;

use App\Entity\Partenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;

class PartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom',
                'attr' => [
                    'placeholder' => 'Ex: AutoPlus',
                    'class' => 'form-control'
                ],
                'help' => 'Doit commencer par une majuscule (lettres et espaces seulement)'
            ])
            ->add('telephone', TelType::class, [
                'label' => 'Téléphone',
                'attr' => [
                    'placeholder' => '+216XXXXXXXX',
                    'class' => 'form-control'
                ],
                'help' => 'Format tunisien : +216XXXXXXXX'
            ])
            ->add('email', EmailType::class, [
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'exemple@domaine.com',
                    'class' => 'form-control'
                ],
                'help' => 'Format valide : exemple@domaine.com'
            ])
            ->add('regions', ChoiceType::class, [
                'label' => 'Régions d\'intervention',
                'choices' => array_combine(Partenaire::REGIONS, Partenaire::REGIONS),
                'multiple' => true,
                'expanded' => false,
                'attr' => [
                    'class' => 'form-control select2-regions',
                    'multiple' => 'multiple'
                ]
            ])
            ->add('specialite', ChoiceType::class, [
                'label' => 'Spécialité',
                'choices' => array_combine(Partenaire::SPECIALITES, Partenaire::SPECIALITES),
                'placeholder' => 'Choisissez une spécialité',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('marquesDisponibles', ChoiceType::class, [
                'label' => 'Marques disponibles',
                'choices' => [
                    'Toyota' => 'Toyota',
                    'Renault' => 'Renault',
                    'Peugeot' => 'Peugeot',
                    'Citroën' => 'Citroën',
                    'Volkswagen' => 'Volkswagen',
                    'Ford' => 'Ford',
                    'Hyundai' => 'Hyundai',
                    'Kia' => 'Kia',
                    'Nissan' => 'Nissan',
                    'Mitsubishi' => 'Mitsubishi',
                    'Suzuki' => 'Suzuki',
                    'Dacia' => 'Dacia',
                    'Fiat' => 'Fiat',
                    'Opel' => 'Opel',
                    'Mercedes' => 'Mercedes',
                    'BMW' => 'BMW',
                    'Audi' => 'Audi',
                    'Autre' => 'Autre'
                ],
                'multiple' => true,
                'expanded' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-control select2-marques',
                    'multiple' => 'multiple'
                ]
            ])
            ->add('horairesOuverture', TextareaType::class, [
                'label' => 'Horaires d\'ouverture',
                'required' => true,
                'attr' => [
                    'class' => 'form-control',
                    'rows' => 4,
                    'placeholder' => 'Ex: 8h-12h, 14h-18h (Lun-Ven)'
                ]
            ])
            ->add('languesParlees', ChoiceType::class, [
                'label' => 'Langues parlées',
                'choices' => array_combine(Partenaire::LANGUES, Partenaire::LANGUES),
                'multiple' => true,
                'expanded' => false,
                'attr' => [
                    'class' => 'form-control select2-langues',
                    'multiple' => 'multiple'
                ]
            ])
            ->add('services', ChoiceType::class, [
                'label' => 'Services proposés',
                'choices' => array_combine(Partenaire::SERVICES, Partenaire::SERVICES),
                'multiple' => true,
                'expanded' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-control select2-services',
                    'multiple' => 'multiple'
                ]
            ])
            ->add('tarif', NumberType::class, [
                'label' => 'Tarif journalier (DT)',
                'required' => false,
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ex: 50.00',
                    'step' => '0.01',
                    'min' => '0'
                ],
                'help' => 'Entrez le tarif pour une journée complète',
                'html5' => true
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partenaire::class,
        ]);
    }
}