<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Seance
 *
 * @ORM\Table(name="seance", indexes={@ORM\Index(name="IDX_DF7DFD0E3C105691", columns={"coach_id"}), @ORM\Index(name="IDX_DF7DFD0EC4598A51", columns={"emplacement_id"})})
 * @ORM\Entity
 */
class Seance
{
    /**
     * @var int
     *
     * @ORM\Column(name="ref_seance", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $refSeance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coach_id", referencedColumnName="ref_coach")
     * })
     */
    private $coach;

    /**
     * @var \Emplacement
     *
     * @ORM\ManyToOne(targetEntity="Emplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emplacement_id", referencedColumnName="code_postal")
     * })
     */
    private $emplacement;

    public function getRefSeance(): ?int
    {
        return $this->refSeance;
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

    public function getCoach(): ?Coach
    {
        return $this->coach;
    }

    public function setCoach(?Coach $coach): self
    {
        $this->coach = $coach;

        return $this;
    }

    public function getEmplacement(): ?Emplacement
    {
        return $this->emplacement;
    }

    public function setEmplacement(?Emplacement $emplacement): self
    {
        $this->emplacement = $emplacement;

        return $this;
    }


}
