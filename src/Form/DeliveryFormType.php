<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DeliveryFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('intitule')
            ->add('ville')
            ->add('region')
            ->add('code_postal')
            ->add('pays')
//            ->add('get', EntityType::class, [
//                'class' => Utilisateur::class,
//                'data' => $options['user'],
//                'disabled' => true
//            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adresse::class,
            'user' => null,
        ]);
    }
}
