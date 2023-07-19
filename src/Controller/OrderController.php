<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Form\DeliveryFormType;
use App\Form\LivraisonFormType;
use App\Form\OrderType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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
    public function index(Request $request): Response
    {
        if (!$this->getUser()){
            return $this->redirectToRoute('app_login');

        }

        $adresse = $this->adresseRepository->findOneBy(['utilisateur' => $this->getUser()]);

        $form = $this->createForm(DeliveryFormType::class, $adresse, [
            'user' => $this->getUser(),
        ]);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

        }
        $formOrder = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser(),
            'adresse' => $adresse,
        ]);
        $formOrder->handleRequest($request);

        $panier = [];
        $i=0;
        if($request->getSession()->get('cart') != null) {
            foreach ($request->getSession()->get('cart') as $key => $value) {
                $panier[$i]['product'] = $this->produitRepository->find($key);
                if ($panier[$i] == null) {
                    break;
                } else {
                    $panier[$i]['quantity'] = $value;
                    $i++;
                }
            }
        }

        return $this->render( 'order/index.html.twig', [
            'utilisateur' => $this->getUser(),
            'adresse' => $adresse,
            'formAdresse' => $form->createView(),
            'formOrder' => $formOrder->createView(),
            'recapCart' => $panier
        ]);
    }
}
