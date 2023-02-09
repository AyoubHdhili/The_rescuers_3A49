<?php

namespace App\Entity;

use App\Repository\LigneDeCommandeRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LigneDeCommandeRepository::class)]
class LigneDeCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $quantite_produit = null;

    #[ORM\ManyToOne(targetEntity:'Commande',inversedBy: 'ligneDeCommandes')]
    #[ORM\JoinColumn(referencedColumnName:'num_commande',nullable: false)]
    private ?commande $commande = null;

    #[ORM\ManyToOne(targetEntity:'Produit',inversedBy: 'ligneDeCommandes')]
    #[ORM\JoinColumn(referencedColumnName:'num_produit',nullable: false)]
    private ?produit $produit = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getQuantiteProduit(): ?int
    {
        return $this->quantite_produit;
    }

    public function setQuantiteProduit(int $quantite_produit): self
    {
        $this->quantite_produit = $quantite_produit;

        return $this;
    }

    public function getCommande(): ?commande
    {
        return $this->commande;
    }

    public function setCommande(?commande $commande): self
    {
        $this->commande = $commande;

        return $this;
    }

    public function getProduit(): ?produit
    {
        return $this->produit;
    }

    public function setProduit(?produit $produit): self
    {
        $this->produit = $produit;

        return $this;
    }
}
