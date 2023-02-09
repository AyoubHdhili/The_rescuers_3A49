<?php

namespace App\Entity;

use App\Repository\ReponseRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ReponseRepository::class)]
class Reponse
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $num_reponse = null;

    #[ORM\Column(length: 255)]
    private ?string $description = null;

    #[ORM\OneToOne(targetEntity:'Reclamation',inversedBy: 'reponse', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(referencedColumnName:'num_reclamation',nullable: false)]
    private ?reclamation $reclamation = null;

    public function getNumReponse(): ?int
    {
        return $this->num_reponse;
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

    public function getReclamation(): ?reclamation
    {
        return $this->reclamation;
    }

    public function setReclamation(reclamation $reclamation): self
    {
        $this->reclamation = $reclamation;

        return $this;
    }
}
