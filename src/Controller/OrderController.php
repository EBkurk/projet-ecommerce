<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Form\DeliveryFormType;
use App\Form\LivraisonFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends FrontAbstractController
{



    public function orderHistory(OrderRepository $orderRepository): Response
{
    // Récupère l'utilisateur connecté
    $user = $this->getUser();

    // Trouve les commandes passées pour cet utilisateur
    $orders = $orderRepository->findBy(['user' => $user]);

    // Rend la vue avec les commandes
    return $this->render('order_history.html.twig', [
        'orders' => $orders,
    ]);
}
    

    public function checkout(Request $request)

    {
        $deliveryAddress = new Adresse();
        $form = $this->createForm(DeliveryFormType::class, $deliveryAddress);
    
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // Sauvegardez $deliveryAddress dans la base de données...
        }
    
        return $this->render('checkout.html.twig', [
            'form' => $form->createView(),
        ]);
    }





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
