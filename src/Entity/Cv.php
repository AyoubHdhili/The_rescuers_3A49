<?php

namespace App\Entity;

use App\Repository\CvRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CvRepository::class)]
class Cv
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $activete = null;

    #[ORM\Column(length: 255)]
    private ?string $certfication = null;

    #[ORM\Column(length: 255)]
    private ?string $disponibilite = null;

    #[ORM\Column]
    private ?float $tarif = null;

    #[ORM\OneToOne(targetEntity:'Coach',cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(referencedColumnName:'ref_coach')]
    private ?coach $coach = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getActivete(): ?string
    {
        return $this->activete;
    }

    public function setActivete(string $activete): self
    {
        $this->activete = $activete;

        return $this;
    }

    public function getCertfication(): ?string
    {
        return $this->certfication;
    }

    public function setCertfication(string $certfication): self
    {
        $this->certfication = $certfication;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(string $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getTarif(): ?float
    {
        return $this->tarif;
    }

    public function setTarif(float $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getCoach(): ?coach
    {
        return $this->coach;
    }

    public function setCoach(?coach $coach): self
    {
        $this->coach = $coach;

        return $this;
    }
}
