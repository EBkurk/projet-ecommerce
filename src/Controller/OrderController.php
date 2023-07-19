<?php

namespace App\Controller;

use App\Entity\Adresse;
use App\Entity\Ajouter;
use App\Entity\Commande;
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

    #[Route('/order/livraison', name: 'order_livraison')]
    public function validLivraison(Request $request): Response
    {
        // Récupère l'utilisateur connecté
        $user = $this->getUser();

        // Trouve les commandes passées pour cet utilisateur
        $orders = $this->commandeRepository->findBy([
            'utilisateur' => $user,
            'statut' => "Livraison"
        ]);

        // Rend la vue avec les commandes
        return $this->render('order/livraison.html.twig', [
            'commandes' => $orders,
            'lsession' => $request->getSession()->get('cart'),
        ]);
    }

    #[Route('/order/{id}/livraison', name: 'see_order_livraison')]
    public function seeLivraison(Request $request): Response
    {
        $commande = $this->commandeRepository->find($request->attributes->get('id'));

        // Rend la vue avec les commandes
        return $this->render('order/show.html.twig', [
            'commande' => $commande,
            'lsession' => $request->getSession()->get('cart'),
        ]);
    }

    #[Route('/valid/{id}/livraison', name: 'change_status_livraison')]
    public function finLivraison(Request $request): Response
    {
        $commande = $this->commandeRepository->find($request->attributes->get('id'));
        $commande->setStatut("Fin");
        $this->commandeRepository->save($commande, true);
        return $this->redirectToRoute('homepage');
    }

    #[Route('/order/create', name: 'order_index')]
    public function index(Request $request): Response
    {
        if (!$this->getUser()){
            return $this->redirectToRoute('app_login');

        }

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


        $adresse = $this->adresseRepository->findOneBy(['utilisateur' => $this->getUser()]);

        $formOrder = $this->createForm(OrderType::class, null, [
            'user' => $this->getUser(),
            'adresse' => $adresse,
        ]);
        $formOrder->handleRequest($request);

        if($formOrder->isSubmitted() && $formOrder->isValid()){
            $data = $request->request->all()['order'];
            $adresse = new Adresse();
            $adresse->setUtilisateur($this->getUser());
            $adresse->setIntitule($data['adresse']['intitule']);
            $adresse->setVille($data['adresse']['ville']);
            $adresse->setRegion($data['adresse']['region']);
            $adresse->setCodePostal($data['adresse']['code_postal']);
            $adresse->setPays($data['adresse']['pays']);
            $this->adresseRepository->save($adresse,true);

            $commande = new Commande();
            $commande->setUtilisateur($this->getUser());
            $commande->setStatut("Livraison");
            $this->commandeRepository->save($commande, true);

            foreach ($panier as $key=>$value){
                $ajouter = new Ajouter();
                $ajouter->setCommande($commande);
                $ajouter->setProduit($value['product']);
                $ajouter->setQte($value['quantity']);
                $ajouter->setDate(new \DateTime('now'));
                $this->ajouterRepository->save($ajouter, true);
            }
            $session = $request->getSession();
            $session->remove('cart');
            return $this->redirectToRoute('homepage');
        }

        return $this->render( 'order/index.html.twig', [
            'utilisateur' => $this->getUser(),
            'adresse' => $adresse,
            'formOrder' => $formOrder->createView(),
            'recapCart' => $panier,
            'lsession' => $request->getSession()->get('cart'),
        ]);
    }
}
