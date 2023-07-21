<?php

namespace App\Form;

use App\Entity\Categorie;
use App\Entity\Image;
use App\Entity\Produit;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('url', FileType::class, [
                'label' => 'Image',
                'data_class' => null,
            ])
            ->add('principal', CheckboxType::class, [
                'required' => false,
            ])
            ->add('produit', EntityType::class, [
                'mapped' => true,
                'class' => Produit::class,
                'required' => false,
                'attr' => array ('onchange' => 'imageProduit()'),
            ])
            ->add('categorie', EntityType::class, [
                'mapped' => true,
                'class' => Categorie::class,
                'required' => false,
                'attr' => array ('onchange' => 'imageCategorie()'),
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Image::class,
        ]);
    }
}
