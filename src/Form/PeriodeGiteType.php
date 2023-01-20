<?php

namespace App\Form;

use App\Entity\Periode;
use Symfony\Component\Form\AbstractType;
<<<<<<< HEAD
use Symfony\Component\Form\Extension\Core\Type\DateType;
=======
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
>>>>>>> 9606e7dbb9cff0d499ad0cbda906d6a0151ad864
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeriodeGiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
<<<<<<< HEAD
            ->add('startAt', DateType::class, [
                "placeholder" => [
                    "day" => "jour",
                    "month" => "mois",
                    "year" => "année",
                ]
            ])
            ->add('endAt', DateType::class, [
                "placeholder" => [
                    "day" => "jour",
                    "month" => "mois",
                    "year" => "année",
                ]
                ])

            ->add('price', NumberType::class, [
              "label" => "prix hebdomadaire"  
            ])
=======
            ->add('startAt', DateTimeType::class, [
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                    'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
                ],
                'label' => 'Début de la location',
            ],
                
                )
                
            ->add('endAt', DateTimeType::class, [
                'placeholder' => [
                    'year' => 'Année', 'month' => 'Mois', 'day' => 'Jour',
                    'hour' => 'Hour', 'minute' => 'Minute', 'second' => 'Second',
                ],
                'label' => 'Fin de la location',
            ],)


            ->add('price', NumberType::class, [
                
                'label' => 'Prix hebdomadaire',
            ],)
>>>>>>> 9606e7dbb9cff0d499ad0cbda906d6a0151ad864
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Periode::class,
        ]);
    }
}
