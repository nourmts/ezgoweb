<?php

namespace App\Form;

use App\Entity\Reclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use App\BadWordsFilterBundle\EventListener\ReclamationFormListener;
use Symfony\Component\Form\CallbackTransformer;

class ReclamationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('reclamation', TextareaType::class, [
                'attr' => ['rows' => 7],
                'required' => true,
                'label' => 'Votre réclamation',
                'empty_data' => '' // Ensure empty data is a string
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
                'label' => 'Catégorie'
            ]);
        
        // Add a data transformer for the reclamation field to handle non-scalar values
        $builder->get('reclamation')->addModelTransformer(new CallbackTransformer(
            function ($reclamationFromModel) {
                // Transform the value for display in the form
                if ($reclamationFromModel === null) {
                    return '';
                }
                return (string) $reclamationFromModel;
            },
            function ($reclamationFromForm) {
                // Transform the value before it's stored back in the model
                if ($reclamationFromForm === null) {
                    return '';
                }
                return (string) $reclamationFromForm;
            }
        ));
            
        if (isset($options['listener'])) {
            $builder->addEventSubscriber($options['listener']);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
            'listener' => null,
            // Use an instance instead of a factory to avoid potential issues
            'empty_data' => new Reclamation(),
            // Don't validate automatically on submit to allow custom validation
            'validation_groups' => function () {
                return ['Default'];
            }
        ]);
    }
} 