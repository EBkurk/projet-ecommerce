<?php

namespace App\Controller;

use App\Entity\Mail;
use App\Form\MailType;
use App\Repository\MailBackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/mail')]
class MailController extends AbstractController
{
    #[Route('/', name: 'app_mail_index', methods: ['GET'])]
    public function index(MailBackRepository $mailBackRepository): Response
    {
        return $this->render('mail/index.html.twig', [
            'mails' => $mailBackRepository->findAll(),
        ]);
    }

    #[Route('/{id}', name: 'app_mail_show', methods: ['GET'])]
    public function show(Mail $mail): Response
    {
        dump($mail);
        return $this->render('mail/show.html.twig', [
            'mail' => $mail,
        ]);
    }

    #[Route('/{id}', name: 'app_mail_delete', methods: ['POST'])]
    public function delete(Request $request, Mail $mail, MailBackRepository $mailBackRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$mail->getId(), $request->request->get('_token'))) {
            $mailBackRepository->remove($mail, true);
        }

        return $this->redirectToRoute('app_mail_index', [], Response::HTTP_SEE_OTHER);
    }
}
