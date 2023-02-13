<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cv
 *
 * @ORM\Table(name="cv", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_B66FFE923C105691", columns={"coach_id"})})
 * @ORM\Entity
 */
class Cv
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="activete", type="string", length=255, nullable=false)
     */
    private $activete;

    /**
     * @var string
     *
     * @ORM\Column(name="certfication", type="string", length=255, nullable=false)
     */
    private $certfication;

    /**
     * @var string
     *
     * @ORM\Column(name="disponibilite", type="string", length=255, nullable=false)
     */
    private $disponibilite;

    /**
     * @var float
     *
     * @ORM\Column(name="tarif", type="float", precision=10, scale=0, nullable=false)
     */
    private $tarif;

    /**
     * @var \Coach
     *
     * @ORM\ManyToOne(targetEntity="Coach")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="coach_id", referencedColumnName="ref_coach")
     * })
     */
    private $coach;

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

    public function getCoach(): ?Coach
    {
        return $this->coach;
    }

    public function setCoach(?Coach $coach): self
    {
        $this->coach = $coach;

        return $this;
    }


}
