<?php

namespace App\Controller;

use App\Entity\Materiaux;
use App\Form\MateriauxType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/materiaux')]
class MateriauxController extends BackAbstractController
{
    #[Route('/', name: 'app_materiaux_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('materiaux/index.html.twig', [
            'materiauxes' => $this->materiauxRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_materiaux_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $materiaux = new Materiaux();
        $form = $this->createForm(MateriauxType::class, $materiaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->materiauxRepository->save($materiaux, true);

            return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('materiaux/new.html.twig', [
            'materiaux' => $materiaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materiaux_show', methods: ['GET'])]
    public function show(Materiaux $materiaux): Response
    {
        return $this->render('materiaux/show.html.twig', [
            'materiaux' => $materiaux,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_materiaux_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Materiaux $materiaux): Response
    {
        $form = $this->createForm(MateriauxType::class, $materiaux);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->materiauxRepository->save($materiaux, true);

            return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('materiaux/edit.html.twig', [
            'materiaux' => $materiaux,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_materiaux_delete', methods: ['POST'])]
    public function delete(Request $request, Materiaux $materiaux): Response
    {
        if ($this->isCsrfTokenValid('delete'.$materiaux->getId(), $request->request->get('_token'))) {
            $this->materiauxRepository->remove($materiaux, true);
        }

        return $this->redirectToRoute('app_materiaux_index', [], Response::HTTP_SEE_OTHER);
    }
}
