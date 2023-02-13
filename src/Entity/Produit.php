<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit", indexes={@ORM\Index(name="IDX_29A5EC27BCF5E72D", columns={"categorie_id"})})
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var int
     *
     * @ORM\Column(name="num_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_produit", type="string", length=255, nullable=false)
     */
    private $nomProduit;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ttc", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixTtc;

    /**
     * @var int
     *
     * @ORM\Column(name="quantite_en_stock", type="integer", nullable=false)
     */
    private $quantiteEnStock;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categorie_id", referencedColumnName="num_categorie")
     * })
     */
    private $categorie;

    public function getNumProduit(): ?int
    {
        return $this->numProduit;
    }

    public function getNomProduit(): ?string
    {
        return $this->nomProduit;
    }

    public function setNomProduit(string $nomProduit): self
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    public function getPrixTtc(): ?float
    {
        return $this->prixTtc;
    }

    public function setPrixTtc(float $prixTtc): self
    {
        $this->prixTtc = $prixTtc;

        return $this;
    }

    public function getQuantiteEnStock(): ?int
    {
        return $this->quantiteEnStock;
    }

    public function setQuantiteEnStock(int $quantiteEnStock): self
    {
        $this->quantiteEnStock = $quantiteEnStock;

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


}
