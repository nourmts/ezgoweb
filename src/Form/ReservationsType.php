<?php

namespace App\Form;

use App\Entity\Reservations;
use App\Entity\Voiture;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReservationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nameRes', TextType::class, [
                'label' => 'Your Name',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Enter your name'
                ]
            ])
            ->add('dateRes', DateType::class, [
                'label' => 'Reservation Date',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
            ->add('statut', ChoiceType::class, [
                'label' => 'Status',
                'choices' => [
                    'Pending' => 'en attente',
                    'Confirmed' => 'confirmé',
                    'Cancelled' => 'annulé'
                ],
                'attr' => [
                    'class' => 'form-control'
                ]
            ])
        ;

        // Only add the car field if not hidden (admin form)
        if (!$options['hide_car']) {
            $builder->add('car', EntityType::class, [
                'class' => Voiture::class,
                'choice_label' => function(Voiture $voiture) {
                    return sprintf('%s (%s)', $voiture->getMarque(), $voiture->getContrat());
                },
                'label' => 'Select Car',
                'attr' => [
                    'class' => 'form-control'
                ]
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Reservations::class,
            'hide_car' => false
        ]);
    }
} 