<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends BackAbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(): Response
    {
        return $this->render('menu/index.html.twig', [
            'controller_name' => 'MenuController',
        ]);
    }
}
