<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Repository\AdresseRepository;
use App\Repository\AjouterRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommandeRepository;
use App\Repository\ComposeRepository;
use App\Repository\ImageRepository;
use App\Repository\MateriauxRepository;
use App\Repository\ProduitRepository;
use App\Repository\UtilisateurRepository;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BackAbstractController extends AbstractController
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

    #[Route('/fetch/supprimer', name: 'app_fetch_tableau', methods: ['POST'])]
    public function supElementsInBase(Request $request, EntityManagerInterface $entityManager, ManagerRegistry $doctrine)
    {
        $data = json_decode($request->getContent(), true);
        $idObjet = $data['parametre1'];
        $nomObjet = $data['parametre2'];
        $className = 'App\Entity\\'.$nomObjet;
        $repository = $doctrine->getRepository($className);
        try {
            $objectsToDelete = [];
            foreach ($idObjet as $value) {
                $objet = $repository->find($value);
                if ($objet) {
                    $objectsToDelete[] = $objet;
                }
            }
            foreach ($objectsToDelete as $object) {
                $repository->remove($object, true);
            }
            return $this->json(1);
        } catch (\Exception $e) {
            return $this->json($e->getMessage());
        }
    }
}