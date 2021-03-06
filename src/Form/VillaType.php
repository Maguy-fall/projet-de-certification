<?php

namespace App\Form;

use App\Entity\Villa;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class VillaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description',TextareaType::class,[
            'label' => 'Description',
            ])
            ->add('prix', MoneyType::class, [
            'scale' => 2,
            'label' => 'Prix',
            ]
            )
            ->add('titre',TextType::class, [
            'label' => "Titre de l'appartement",
            ])
            ->add('imageFilename',TextType::class, [
            'label' => "Lien vers l'image",
            ])
            ->add('surface',NumberType::class, [
            'label' => 'Superficie en m2',
            ])
            ->add('chambres',NumberType::class, [
            'label' => 'Nombre de chambres',
            ])
            ->add('garage',NumberType::class, [
            'label' => 'Nombre de garages',
            ])
            ->add('salle_de_bains', Numbertype::class, [
            'label' => 'Nombre de salles de bain'
            ])
        ;
    }
   

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Villa::class,
        ]);
    }
}
