<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends FrontAbstractController
{
    #[Route('/order/create', name: 'order_index')]
    public function index(): Response
    {
        if (!$this->getUser()){
            return $this->redirectToRoute('app_login');

        }

        //$form = $this->createForm(type: OrderType::class, data: null, ['user' => $this->getUser()]);
    

        return $this->render( 'order/index.html.twig', ['controller_name' => 'OrderController']);
    }
}
