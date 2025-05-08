<?php

namespace App\Form;

use App\Entity\CodePromo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CodePromoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'label' => 'Code promo',
                'attr' => ['placeholder' => 'Entrez le code promo']
            ])
            ->add('pourcentage', IntegerType::class, [
                'label' => 'Pourcentage de réduction',
                'attr' => ['min' => 0, 'max' => 100]
            ])
            ->add('dateExpiration', DateTimeType::class, [
                'label' => 'Date d\'expiration',
                'required' => false,
                'widget' => 'single_text'
            ])
            ->add('utilisationsMax', IntegerType::class, [
                'label' => 'Nombre maximum d\'utilisations',
                'required' => false,
                'attr' => ['min' => 0]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CodePromo::class,
        ]);
    }
} 