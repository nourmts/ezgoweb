<?php

namespace App\Form;

use App\Entity\Ticket;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Entity\Bus;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TicketType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('bus', EntityType::class, [
                'class' => Bus::class,
                'choice_label' => 'imatriculation',
                'label' => 'Bus',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Sélectionnez un bus'
                ]
            ])
            ->add('prix', IntegerType::class, [
                'label' => 'prix',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Donnez le prix'
                ]
            ])
            ->add('dateAchat', DateTimeType::class, [
                'label' => 'Date d\'achat',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
                'empty_data' => null,
                'invalid_message' => 'La date d\'achat est requise.',
                'data' => new \DateTime() // Valeur par défaut à la date actuelle
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Ticket::class,
        ]);
    }
}
