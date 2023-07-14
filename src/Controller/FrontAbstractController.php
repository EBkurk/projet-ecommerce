<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\AdresseRepository;
use App\Repository\AjouterRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommandeRepository;
use App\Repository\ComposeRepository;
use App\Repository\ImageRepository;
use App\Repository\MateriauxRepository;
use App\Repository\ProduitRepository;
use App\Repository\UtilisateurRepository;

class FrontAbstractController extends AbstractController
{
    protected $adresseRepository;
    protected $categorieRepository;
    protected $commandeRepository;
    protected $imageRepository;
    protected $materiauxRepository;
    protected $produitRepository;
    protected $utilisateurRepository;
    protected $ajouterRepository;
    protected $composeRepository;

    public function __construct(AdresseRepository $adresseRepository, CommandeRepository $commandeRepository,
                                ImageRepository $imageRepository, CategorieRepository $categorieRepository,
                                MateriauxRepository $materiauxRepository, ProduitRepository $produitRepository,
                                UtilisateurRepository $utilisateurRepository, AjouterRepository $ajouterRepository,
                                ComposeRepository $composeRepository)
    {
        $this->adresseRepository = $adresseRepository;
        $this->commandeRepository = $commandeRepository;
        $this->imageRepository = $imageRepository;
        $this->categorieRepository = $categorieRepository;
        $this->materiauxRepository = $materiauxRepository;
        $this->produitRepository = $produitRepository;
        $this->utilisateurRepository = $utilisateurRepository;
        $this->ajouterRepository = $ajouterRepository;
        $this->composeRepository = $composeRepository;
    }
}