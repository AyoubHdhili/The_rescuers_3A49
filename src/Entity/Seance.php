<?php

namespace App\Entity;

use App\Repository\SeanceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SeanceRepository::class)]
class Seance
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $ref_seance = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\ManyToOne(targetEntity:'Coach',inversedBy: 'seances')]
    #[ORM\JoinColumn(referencedColumnName:'ref_coach',nullable: false)]
    private ?coach $coach = null;

    #[ORM\ManyToOne(targetEntity:'Emplacement',inversedBy: 'seances')]
    #[ORM\JoinColumn(referencedColumnName:'code_postal',nullable: false)]
    private ?emplacement $emplacement = null;

    public function getRefSeance(): ?int
    {
        return $this->ref_seance;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

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

    public function getEmplacement(): ?emplacement
    {
        return $this->emplacement;
    }

    public function setEmplacement(?emplacement $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }
}
