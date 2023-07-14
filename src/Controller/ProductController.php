<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends FrontAbstractController
{

    #[Route('/{id}/boutique', name: 'shop_index')]
    public function index(Request $request, Connection $connection): Response
    {
        $produit = $this->produitRepository->find($request->attributes->get('id'));

        $choices = array_combine(range(1, $produit->getStock()), range(1, $produit->getStock()));

        $formStock = $this->createFormBuilder()
            ->add('nombre', ChoiceType::class, [
                'choices' => $choices,
            ])
            ->add('submit', SubmitType::class, ['label' => '“AJOUTER AU PANIER'])
            ->getForm()->createView();

        $sql="SELECT * FROM produit where categorie_id = :cat and id != :id order by RAND() limit 6";
        $stmt = $connection->prepare($sql);
        $stmt->bindValue("cat", $produit->getCategorie()->getId());
        $stmt->bindValue("id", $produit->getId());
        $similar = $stmt->executeQuery();
        $similar = $similar->fetchAllAssociative();

        return $this->render('product/index.html.twig', [
            'product' => $produit,
            'formStock' => $formStock,
            'similaires' => $similar,
        ]);
    }
}
