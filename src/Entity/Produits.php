<?php

namespace App\Entity;

use App\Repository\ProduitsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProduitsRepository::class)]
class Produits
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom_produit = null;

    #[ORM\Column(length: 255)]
    private ?string $desp_produit = null;

    #[ORM\Column]
    private ?int $prix_produit = null;

    #[ORM\Column(length: 255)]
    private ?string $lieu_produit = null;

    #[ORM\ManyToOne(inversedBy: 'produits')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Rayon $fk_rayon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomProduit(): ?string
    {
        return $this->nom_produit;
    }

    public function setNomProduit(string $nom_produit): static
    {
        $this->nom_produit = $nom_produit;

        return $this;
    }

    public function getDespProduit(): ?string
    {
        return $this->desp_produit;
    }

    public function setDespProduit(string $desp_produit): static
    {
        $this->desp_produit = $desp_produit;

        return $this;
    }

    public function getPrixProduit(): ?int
    {
        return $this->prix_produit;
    }

    public function setPrixProduit(int $prix_produit): static
    {
        $this->prix_produit = $prix_produit;

        return $this;
    }

    public function getLieuProduit(): ?string
    {
        return $this->lieu_produit;
    }

    public function setLieuProduit(string $lieu_produit): static
    {
        $this->lieu_produit = $lieu_produit;

        return $this;
    }

    public function getFkRayon(): ?rayon
    {
        return $this->fk_rayon;
    }

    public function setFkRayon(?rayon $fk_rayon): static
    {
        $this->fk_rayon = $fk_rayon;

        return $this;
    }
}
