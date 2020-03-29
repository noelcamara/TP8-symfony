<?php

namespace App\Form;

use App\Entity\Matchs;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MatchsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('date_match',TextType::class/*, [
                'attr' => [
                    'class' => 'control',
                ]
            ]*/)
            ->add('elim_directe', ChoiceType::class, [
                'choices' => [
                    'oui' => 'oui',
                    'non' => 'non'
                ]
            ])
            ->add('type', ChoiceType::class, [
                'choices' => [
                    'GROUPE A' => 'GROUPE A',
                    'GROUPE B' => 'GROUPE B',
                    'GROUPE C' => 'GROUPE C',
                    'GROUPE D' => 'GROUPE D',
                    'GROUPE E' => 'GROUPE E',
                    'GROUPE F' => 'GROUPE F',
                    'GROUPE G' => 'GROUPE G',
                    'GROUPE H' => 'GROUPE H',
                    'GROUPE I' => 'GROUPE I',
                    'GROUPE J' => 'GROUPE J',
                    'GROUPE K' => 'GROUPE K',
                    'GROUPE L' => 'GROUPE L',
                    'GROUPE M' => 'GROUPE M',
                    'GROUPE N' => 'GROUPE N',
                    'GROUPE O' => 'GROUPE O',
                    'QUART DE FINALE' => 'QUART DE FINALE',
                    'DEMI FINALE' => 'DEMI FINALE',
                    '3E PLACE' => '3E PLACE',
                    'CLASSIFICATION 5-8' => 'CLASSIFICATION 5-8',
                    'FINALE' => 'FINALE',
                ]
            ])
            ->add('score_equipe1')
            ->add('score_equipe2')
            ->add('id_equipe1',ChoiceType::class, [
                'choices' => [
                    "1" => 1,
                    "2" => 2,
                    "3" => 3,
                    "4" => 4,
                    "5" => 5,
                    "6" => 6,
                    "7" => 7,
                    "8" => 8,
                    "9" => 9,
                    "10" => 10,
                    "11" => 11,
                    "12" => 12,
                    "13" => 13,
                    "14" => 14,
                    "15" => 15,
                    "16" => 16,
                    "17" => 17,
                    "18" => 18,
                    "19" => 19,
                    "20" => 20,
                    "21" => 21,
                    "22" => 22,
                    "23" => 23,
                    "24" => 24,
                    "25" => 25,
                    "26" => 26,
                    "27" => 27,
                    "28" => 28,
                    "29" => 29,
                    "30" => 30,
                    "31" => 31,
                    "32" => 32,
                ]
            ])
            ->add('id_equipe2',ChoiceType::class, [
                'choices' => [
                    "1" => 1,
                    "2" => 2,
                    "3" => 3,
                    "4" => 4,
                    "5" => 5,
                    "6" => 6,
                    "7" => 7,
                    "8" => 8,
                    "9" => 9,
                    "10" => 10,
                    "11" => 11,
                    "12" => 12,
                    "13" => 13,
                    "14" => 14,
                    "15" => 15,
                    "16" => 16,
                    "17" => 17,
                    "18" => 18,
                    "19" => 19,
                    "20" => 20,
                    "21" => 21,
                    "22" => 22,
                    "23" => 23,
                    "24" => 24,
                    "25" => 25,
                    "26" => 26,
                    "27" => 27,
                    "28" => 28,
                    "29" => 29,
                    "30" => 30,
                    "31" => 31,
                    "32" => 32,
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Matchs::class,
        ]);
    }
}
