<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends FrontAbstractController
{
    #[Route('/{id}/category', name: 'app_category')]
    public function index(Request $request): Response
    {
        $categorie = $this->categorieRepository->find($request->attributes->get('id'));
        $products = $this->produitRepository->findBy(['categorie' => $categorie]);
        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'products' => $products,
            'categorie' => $categorie,
        ]);
    }
}
