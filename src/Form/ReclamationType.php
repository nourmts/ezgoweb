<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reclamation', TextareaType::class, [
                'attr' => ['rows' => 7],
                'required' => true,
            ])
            ->add('categorie', ChoiceType::class, [
                'choices' => [
                    'Technique' => 'Technique',
                    'Commercial' => 'Commercial',
                    'Financier' => 'financier',
                    'Services taxi' => 'services taxi',
                    'Services bus' => 'services bus',
                    'Services vélo' => 'services velo',
                    'Autre' => 'Autre',
                ],
                'placeholder' => 'Veuillez choisir une catégorie',
            ]);
            
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
} 