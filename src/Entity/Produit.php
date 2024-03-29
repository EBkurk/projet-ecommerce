<?php

namespace App\Entity;

use App\Repository\ProduitRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinTable;

#[ORM\Entity(repositoryClass: ProduitRepository::class)]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?float $prix = null;

    #[ORM\Column]
    private ?int $stock = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    private ?Categorie $categorie = null;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Image::class)]
    private Collection $images;

    #[ORM\JoinTable(name: 'compose')]
    #[ORM\ManyToMany(targetEntity: Materiaux::class, inversedBy: 'produits')]
    private Collection $materiaux;

    #[ORM\JoinTable(name: 'ajouter')]
    #[ORM\ManyToMany(targetEntity: Commande::class, inversedBy: 'produits')]
    private Collection $commande;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Ajouter::class)]
    private Collection $ajouters;

    #[ORM\OneToMany(mappedBy: 'produit', targetEntity: Compose::class)]
    private Collection $composes;

    #[ORM\Column]
    private ?bool $carousel = null;

    #[ORM\Column]
    private ?bool $highlander = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $arriver = null;

    #[ORM\Column]
    private ?int $prioriter = null;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->materiaux = new ArrayCollection();
        $this->commande = new ArrayCollection();
        $this->ajouters = new ArrayCollection();
        $this->composes = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->getNom();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrix(): ?float
    {
        return $this->prix;
    }

    public function setPrix(float $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategorie(): ?Categorie
    {
        return $this->categorie;
    }

    public function setCategorie(?Categorie $categorie): self
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images->add($image);
            $image->setProduit($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getProduit() === $this) {
                $image->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Materiaux>
     */
    public function getMateriaux(): Collection
    {
        return $this->materiaux;
    }

    public function addMateriaux(Materiaux $materiaux): self
    {
        if (!$this->materiaux->contains($materiaux)) {
            $this->materiaux->add($materiaux);
        }

        return $this;
    }

    public function removeMateriaux(Materiaux $materiaux): self
    {
        $this->materiaux->removeElement($materiaux);

        return $this;
    }

    /**
     * @return Collection<int, Commande>
     */
    public function getCommande(): Collection
    {
        return $this->commande;
    }

    public function addCommande(Commande $commande): self
    {
        if (!$this->commande->contains($commande)) {
            $this->commande->add($commande);
        }

        return $this;
    }

    public function removeCommande(Commande $commande): self
    {
        $this->commande->removeElement($commande);

        return $this;
    }

    /**
     * @return Collection<int, Ajouter>
     */
    public function getAjouters(): Collection
    {
        return $this->ajouters;
    }

    public function addAjouter(Ajouter $ajouter): self
    {
        if (!$this->ajouters->contains($ajouter)) {
            $this->ajouters->add($ajouter);
            $ajouter->setProduit($this);
        }

        return $this;
    }

    public function removeAjouter(Ajouter $ajouter): self
    {
        if ($this->ajouters->removeElement($ajouter)) {
            // set the owning side to null (unless already changed)
            if ($ajouter->getProduit() === $this) {
                $ajouter->setProduit(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Compose>
     */
    public function getComposes(): Collection
    {
        return $this->composes;
    }

    public function addCompose(Compose $compose): self
    {
        if (!$this->composes->contains($compose)) {
            $this->composes->add($compose);
            $compose->setProduit($this);
        }

        return $this;
    }

    public function removeCompose(Compose $compose): self
    {
        if ($this->composes->removeElement($compose)) {
            // set the owning side to null (unless already changed)
            if ($compose->getProduit() === $this) {
                $compose->setProduit(null);
            }
        }

        return $this;
    }

    public function isCarousel(): ?bool
    {
        return $this->carousel;
    }

    public function setCarousel(bool $carousel): static
    {
        $this->carousel = $carousel;

        return $this;
    }

    public function isHighlander(): ?bool
    {
        return $this->highlander;
    }

    public function setHighlander(bool $highlander): static
    {
        $this->highlander = $highlander;

        return $this;
    }

    public function getArriver(): ?\DateTimeInterface
    {
        return $this->arriver;
    }

    public function setArriver(\DateTimeInterface $arriver): static
    {
        $this->arriver = $arriver;

        return $this;
    }

    public function getPrioriter(): ?int
    {
        return $this->prioriter;
    }

    public function setPrioriter(int $prioriter): static
    {
        $this->prioriter = $prioriter;

        return $this;
    }
}
