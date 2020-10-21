<?php

namespace App\Entity;

use App\Entity\Reservation;
use Doctrine\ORM\Mapping as ORM;

/**
 * Avion
 *
 * @ORM\Table(name="avion", indexes={@ORM\Index(name="fk_avion_type_avion_idx", columns={"type_avion_id"})})
 * @ORM\Entity
 */
class Avion {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="immatriculation", type="string", length=5, nullable=true)
     */
    private $immatriculation;

    /**
     * @var int|null
     *
     * @ORM\Column(name="nombre_places", type="smallint", nullable=true)
     */
    private $nombrePlaces;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre_heures_vol", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $nombreHeuresVol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prix", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $prix;

    /**
     * @var \TypeAvion
     *
     * @ORM\ManyToOne(targetEntity="TypeAvion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_avion_id", referencedColumnName="id")
     * })
     */
    private $typeAvion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getImmatriculation(): ?string
    {
        return $this->immatriculation;
    }

    public function setImmatriculation(?string $immatriculation): self
    {
        $this->immatriculation = $immatriculation;

        return $this;
    }

    public function getNombrePlaces(): ?int
    {
        return $this->nombrePlaces;
    }

    public function setNombrePlaces(?int $nombrePlaces): self
    {
        $this->nombrePlaces = $nombrePlaces;

        return $this;
    }

    public function getNombreHeuresVol(): ?string
    {
        return $this->nombreHeuresVol;
    }

    public function setNombreHeuresVol(?string $nombreHeuresVol): self
    {
        $this->nombreHeuresVol = $nombreHeuresVol;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(?string $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getTypeAvion(): ?TypeAvion
    {
        return $this->typeAvion;
    }

    public function setTypeAvion(?TypeAvion $typeAvion): self
    {
        $this->typeAvion = $typeAvion;

        return $this;
    }
    
    public function __toString() {
        return $this->getImmatriculation();
    }
}
