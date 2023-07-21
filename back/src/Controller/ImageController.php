<?php

namespace App\Controller;

use App\Entity\Image;
use App\Form\ImageType;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/image')]
class ImageController extends BackAbstractController
{
    #[Route('/', name: 'app_image_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('image/index.html.twig', [
            'images' => $this->imageRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_image_new', methods: ['GET', 'POST'])]
    public function new(Request $request): Response
    {
        $image = new Image();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            $file = $form['url']->getData();
            $originalExtension = $file->getClientOriginalExtension();
            if (!in_array($originalExtension, $allowedExtensions)) {
                $form->get('url')->addError(new FormError("L'image doit avoir comme extension jpg, png ou jpeg"));
            }
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $fileSystem = new Filesystem();
            $fileName = rand(1, 999999999).'.'.$file->getClientOriginalExtension();
            $fileSystem->copy($file->getPathname(), 'images/' . $fileName);
            $file->move('../../public/images', $fileName);
            $image->setUrl('images/'.$fileName);

            $imageP = $this->imageRepository->findOneBy([
                'principal' => true,
                'produit' => $data->getProduit(),
                'categorie' => $data->getCategorie(),
            ]);
            if($imageP == null){
                $image->setPrincipal(true);
            }else{
                if($data->isPrincipal() == true){
                    $imageP->setPrincipal(false);
                    $this->imageRepository->save($imageP,true);
                }
            }

            $this->imageRepository->save($image, true);

            return $this->redirectToRoute('app_image_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('image/new.html.twig', [
            'image' => $image,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_image_show', methods: ['GET'])]
    public function show(Image $image): Response
    {
        return $this->render('image/show.html.twig', [
            'image' => $image,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_image_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Image $image): Response
    {
        $oldFile = $image->getUrl();
        $form = $this->createForm(ImageType::class, $image);
        $form->handleRequest($request);

        if($form->isSubmitted()){
            $allowedExtensions = ['jpg', 'jpeg', 'png'];
            $file = $form['url']->getData();
            $originalExtension = $file->getClientOriginalExtension();
            if (!in_array($originalExtension, $allowedExtensions)) {
                $form->get('url')->addError(new FormError("L'image doit avoir comme extension jpg, png ou jpeg"));
            }
        }
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            unlink($oldFile);
            unlink('../../public/'.$oldFile);
            $fileSystem = new Filesystem();
            $file = $form['url']->getData();
            $fileName = rand(1, 999999999).'.'.$file->getClientOriginalExtension();
            $fileSystem->copy($file->getPathname(), 'images/' . $fileName);
            $file->move('../../public/images', $fileName);
            $image->setUrl('images/'.$fileName);

            $imageP = $this->imageRepository->findOneBy([
                'principal' => true,
                'produit' => $data->getProduit(),
                'categorie' => $data->getCategorie(),
            ]);
            if($imageP == null){
                $image->setPrincipal(true);
            }else{
                if($data->isPrincipal() == true){
                    $imageP->setPrincipal(false);
                    $this->imageRepository->save($imageP,true);
                }
            }

            $this->imageRepository->save($image, true);

            return $this->redirectToRoute('app_image_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('image/edit.html.twig', [
            'image' => $image,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_image_delete', methods: ['POST'])]
    public function delete(Request $request, Image $image): Response
    {
        if ($this->isCsrfTokenValid('delete'.$image->getId(), $request->request->get('_token'))) {
            unlink($image->getUrl());
            unlink('../../public/'.$image->getUrl());
            $this->imageRepository->remove($image, true);
        }

        return $this->redirectToRoute('app_image_index', [], Response::HTTP_SEE_OTHER);
    }
}
