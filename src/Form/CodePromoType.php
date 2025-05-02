<?php

namespace App\Form;

use App\Entity\CodePromo;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Range;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

class CodePromoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('code', TextType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le code promo ne peut pas être vide',
                    ]),
                ],
                'attr' => [
                    'placeholder' => 'Entrez un code promo unique'
                ]
            ])
            ->add('pourcentage', IntegerType::class, [
                'constraints' => [
                    new NotBlank([
                        'message' => 'Le pourcentage ne peut pas être vide',
                    ]),
                    new Range([
                        'min' => 0,
                        'max' => 100,
                        'notInRangeMessage' => 'Le pourcentage doit être entre {{ min }}% et {{ max }}%',
                    ]),
                ],
                'attr' => [
                    'min' => 0,
                    'max' => 100
                ]
            ])
            ->add('dateExpiration', DateTimeType::class, [
                'label' => 'Date d\'expiration',
                'required' => false,
                'widget' => 'single_text'
            ])
            ->add('utilisationsMax', IntegerType::class, [
                'label' => 'Nombre maximum d\'utilisations',
                'required' => false,
                'attr' => ['min' => 1]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => CodePromo::class,
            'constraints' => [
                new UniqueEntity([
                    'fields' => ['code'],
                    'message' => 'Ce code promo existe déjà. Veuillez en choisir un autre.',
                ]),
            ],
        ]);
    }
} 