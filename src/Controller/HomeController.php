<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends FrontAbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        $carousel = $this->produitRepository->findAllCarousel();
        $category = $this->categorieRepository->findAll();
        $product = $this->produitRepository->findBy(['highlander' => 1]);
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'product' => $product,
            'category' => $category,
            'carousels' => $carousel,
        ]);
    }
}
