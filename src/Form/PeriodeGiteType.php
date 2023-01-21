<?php

namespace App\Form;

use App\Entity\Periode;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PeriodeGiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('startAt', DateType::class, [
                "placeholder" => [
                    "day" => "jour",
                    "month" => "mois",
                    "year" => "année",
                ],
                'label' => 'Début de la location',
            ])
            ->add('endAt', DateType::class, [
                "placeholder" => [
                    "day" => "jour",
                    "month" => "mois",
                    "year" => "année",
                ],
                'label' => 'Fin de la location',
            ])

            ->add('price', NumberType::class, [
                "label" => "prix du séjour"
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Periode::class,
        ]);
    }
}
