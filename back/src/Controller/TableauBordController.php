<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TableauBordController extends BackAbstractController
{
    #[Route('/tableau/bord', name: 'app_tableau_bord')]
    public function index(): Response
    {
        dump($this->ajouterRepository->getSalesFromFiveWeeksCategory());
        return $this->render('tableauBord/index.html.twig', [
            'salesData' => $this->ajouterRepository->getSalesFromSevenDays(),
            'salesDataCategory' => $this->ajouterRepository->getSalesFromSevenDaysCategory()
        ]);
    }

    #[Route('/path/to/endpoint/last-days', name: 'total_last_days')]
    public function getTotalLastDays()
    {
        $totalLastDays = $this->ajouterRepository->getSalesFromSevenDays();
        return new JsonResponse($totalLastDays);
    }

    #[Route('/path/to/endpoint/last-weeks', name: 'total_last_weeks')]
    public function getTotalLastWeeks()
    {
        $totalLastWeeks =  $this->ajouterRepository->getSalesFromFiveWeeks();
        return new JsonResponse($totalLastWeeks);
    }

    #[Route('/path/to/endpoint/last-days/category', name: 'total_last_days_category')]
    public function getTotalLastDaysCategory()
    {
        $totalLastDays = $this->ajouterRepository->getSalesFromSevenDaysCategory();
        return new JsonResponse($totalLastDays);
    }

    #[Route('/path/to/endpoint/last-weeks/category', name: 'total_last_weeks_category')]
    public function getTotalLastWeeksCategory()
    {
        $totalLastWeeks =  $this->ajouterRepository->getSalesFromFiveWeeksCategory();
        return new JsonResponse($totalLastWeeks);
    }

}
