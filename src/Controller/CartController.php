<?php

namespace App\Controller;

use App\Entity\Product;
use App\Service\CartService;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends FrontAbstractController
{
    #[Route('/mon-panier', name: 'cart_index')]
    public function index(CartService $cartService, Request $request): Response
    {
        $panier = [];
        $i=0;
        foreach ($request->getSession()->get('cart') as $key => $value ){
            dump($key, $value);
            $panier[$i]['product']=$this->produitRepository->find($key);
            if($panier[$i] == null){
                break;
            }else{
                $panier[$i]['quantity']=$value;
                $i++;
            }

        }
        return $this->render('cart/index.html.twig', [
            'panier' => $panier,
        ]);
    }

    #[Route('/mon-panier/remove/{id<\d+>}', name: 'cart_remove')]
    public function removeToCart(CartService $cartService, int $id): Response
    {
        $cartService->removeToCart($id);

        return $this->redirectToRoute('cart_index');
    }

    #[Route('/mon-panier/decrease/{id<\d+>}', name: 'cart_decrease')]
    public function decrease(CartService $cartService, $id): RedirectResponse
    {
        $cartService->decrease($id);

        return $this->redirectToRoute('cart_index');
    }

    #[Route('/mon-panier/removeAll', name: 'cart_removeAll')]
    public function removeAll(CartService $cartService): Response
    {
        $cartService->revoveCartAll();

        return $this->redirectToRoute('shop_index');
    }
}