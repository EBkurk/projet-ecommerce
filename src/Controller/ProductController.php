<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends FrontAbstractController
{

    #[Route('/boutique', name: 'shop_index')]
    public function index(): Response
    {
        $products = $this->produitRepository->findAll();
        return $this->render('product/index.html.twig', [
            'products' => $products
        ]);
    }
}
