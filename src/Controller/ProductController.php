<?php

namespace App\Controller;

use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends FrontAbstractController
{

    #[Route('/{id}/boutique', name: 'shop_index')]
    public function index(Request $request): Response
    {
        $produit = $this->produitRepository->find($request->attributes->get('id'));

        $choices = array_combine(range(1, $produit->getStock()), range(1, $produit->getStock()));

        $form = $this->createFormBuilder()
            ->add('nombre', ChoiceType::class, [
                'choices' => $choices,
            ])
            ->add('submit', SubmitType::class, ['label' => 'Acheter'])
            ->getForm()->createView();

        return $this->render('product/index.html.twig', [
            'product' => $produit,
            'form' => $form,
        ]);
    }
}
