<?php

namespace App\Form;

use App\Entity\Adresse;
use App\Entity\Utilisateur;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrderType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('client', EntityType::class, [
                'class' => Utilisateur::class,
                'data' => $options['user'],
                'disabled' => true,
                ]);
        if($options['adresse'] != null){
            $builder
                ->add('adresse', EntityType::class, [
                'class' => Adresse::class,
                'data' => $options['adresse'],
                'disabled' => true,
            ]);
        }
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'user' => null,
            'adresse' => null,
        ]);
    }
}