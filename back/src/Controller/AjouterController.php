<?php

namespace App\Controller;

use App\Entity\Ajouter;
use App\Form\AjouterType;
use App\Repository\AjouterBackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ajouter')]
class AjouterController extends BackAbstractController
{
    #[Route('/', name: 'app_ajouter_index', methods: ['GET'])]
    public function index(AjouterBackRepository $ajouterRepository): Response
    {
        return $this->render('ajouter/index.html.twig', [
            'ajouters' => $ajouterRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ajouter_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AjouterBackRepository $ajouterRepository): Response
    {
        $ajouter = new Ajouter();
        $form = $this->createForm(AjouterType::class, $ajouter);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if($ajouter->getProduit()->getStock() < $form->getData()->getQte()){
                $form->addError(new FormError('Stock insuffisant pour cette quantité.'));
            }
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $ajouter->getProduit()->setStock($ajouter->getProduit()->getStock() - $form->getData()->getQte());

            $ajouterRepository->save($ajouter, true);

            return $this->redirectToRoute('app_ajouter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ajouter/new.html.twig', [
            'ajouter' => $ajouter,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ajouter_show', methods: ['GET'])]
    public function show(Ajouter $ajouter): Response
    {
        return $this->render('ajouter/show.html.twig', [
            'ajouter' => $ajouter,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ajouter_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ajouter $ajouter, AjouterBackRepository $ajouterRepository): Response
    {
        $form = $this->createForm(AjouterType::class, $ajouter);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if($ajouter->getProduit()->getStock() < $form->getData()->getQte()){
                $form->addError(new FormError('Stock insuffisant pour cette quantité.'));
            }
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $ajouterRepository->save($ajouter, true);

            return $this->redirectToRoute('app_ajouter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ajouter/edit.html.twig', [
            'ajouter' => $ajouter,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ajouter_delete', methods: ['POST'])]
    public function delete(Request $request, Ajouter $ajouter, AjouterBackRepository $ajouterRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ajouter->getId(), $request->request->get('_token'))) {
            $produit = $ajouter->getProduit();
            $produit->setStock($produit->getStock() + $ajouter->getQte());
            $this->produitRepository->save($produit, true);
            $ajouterRepository->remove($ajouter, true);
        }

        return $this->redirectToRoute('app_ajouter_index', [], Response::HTTP_SEE_OTHER);
    }
}
