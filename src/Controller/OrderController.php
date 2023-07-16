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
            return $this->redirectToRoute(route'/connexion');

        }

        $form = $this->createForm(type: OrderType::class, data: null, ['user' =>$this->getUser()]);
    

    return $this->render(view 'order/index', ['controller_name' => 'OrderController']);
    }
}
