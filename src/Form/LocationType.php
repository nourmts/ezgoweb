<?php

namespace App\Form;

use App\Entity\Location;
use App\Entity\Partenaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $partenaire = $options['partenaire'];
        
        $builder
            ->add('dateDebut', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de début',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('dateFin', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date de fin',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('codePromoText', TextType::class, [
                'label' => 'Code promo (optionnel)',
                'required' => false,
                'mapped' => false, // Ne pas lier directement à l'entité
                'attr' => ['class' => 'form-control']
            ]);

        if (!$options['hide_partenaire']) {
            $builder->add('partenaire', EntityType::class, [
                'class' => Partenaire::class,
                'choice_label' => 'nom',
                'label' => 'Partenaire',
                'placeholder' => 'Sélectionnez un partenaire',
                'required' => true,
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);
        }

        if ($partenaire) {
            $services = is_array($partenaire->getServices()) ? $partenaire->getServices() : explode(',', $partenaire->getServices());
            $services = array_map('trim', $services);
            
            $marques = is_array($partenaire->getMarquesDisponibles()) ? $partenaire->getMarquesDisponibles() : explode(',', $partenaire->getMarquesDisponibles());
            $marques = array_map('trim', $marques);

            $builder
                ->add('service', ChoiceType::class, [
                    'label' => 'Service',
                    'choices' => array_combine($services, $services),
                    'placeholder' => 'Sélectionnez un service',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ])
                ->add('marque', ChoiceType::class, [
                    'label' => 'Marque',
                    'choices' => array_combine($marques, $marques),
                    'placeholder' => 'Sélectionnez une marque',
                    'required' => true,
                    'attr' => [
                        'class' => 'form-control'
                    ]
                ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
            'hide_partenaire' => false,
            'partenaire' => null
        ]);
    }
}
