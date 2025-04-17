<?php

namespace App\Form;

use App\Entity\Bus;
use App\Entity\Station;
use Symfony\Component\Form\AbstractType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class Bus1Type extends AbstractType
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idStation', EntityType::class, [
                'class' => Station::class,
                'choice_label' => 'nom',
                'label' => 'Station',
                'attr' => [
                    'class' => 'form-control'
                ],
                'empty_data' => '',
                'required' => true,
                'query_builder' => function (EntityRepository $er) {
                    return $er->createQueryBuilder('s')
                        ->orderBy('s.nom', 'ASC');
                }
            ])
            ->add('categorie', ChoiceType::class, [
                'label' => 'Catégorie',
                'choices' => [
                    'Confort' => 'confort',
                    'Normale' => 'normale'
                ],
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true
            ])
            ->add('nbPlace', IntegerType::class, [
                'label' => 'Nombre de places',
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Entrez le nombre de places'
                ]
            ])
            ->add('dateArrive', DateTimeType::class, [
                'label' => 'Date d\'arrivée',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
                'empty_data' => null,
                'invalid_message' => 'La date d\'arrivée est requise.'
            ])
            ->add('dateSortie', DateTimeType::class, [
                'label' => 'Date de sortie',
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control'
                ],
                'required' => true,
                'empty_data' => null,
                'invalid_message' => 'La date de sortie est requise.'
            ]);

        $builder->get('idStation')
            ->addModelTransformer(new CallbackTransformer(
                function ($stationId) {
                    if (!$stationId) {
                        return null;
                    }
                    return $this->entityManager->getRepository(Station::class)->find($stationId);
                },
                function ($station) {
                    return $station ? $station->getIdS() : null;
                }
            ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Bus::class,
        ]);
    }
}
