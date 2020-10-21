<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_reservation_facture_idx", columns={"facture_id"}), @ORM\Index(name="fk_pilotes_has_avions_avions_idx", columns={"avion_id"}), @ORM\Index(name="fk_pilotes_has_avions_pilotes_idx", columns={"pilote_id"})})
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_vol", type="date", nullable=true)
     */
    private $dateVol;

    /**
     * @var string|null
     *
     * @ORM\Column(name="duree_vol", type="decimal", precision=10, scale=1, nullable=true)
     */
    private $dureeVol;

    /**
     * @var \Avion
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Avion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="avion_id", referencedColumnName="id")
     * })
     */
    private $avion;

    /**
     * @var \Pilote
     *
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Pilote")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pilote_id", referencedColumnName="id")
     * })
     */
    private $pilote;

    /**
     * @var \Facture
     *
     * @ORM\OneToOne(targetEntity="Facture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facture_id", referencedColumnName="id")
     * })
     */
    private $facture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateVol(): ?\DateTimeInterface
    {
        return $this->dateVol;
    }

    public function setDateVol(?\DateTimeInterface $dateVol): self
    {
        $this->dateVol = $dateVol;

        return $this;
    }

    public function getDureeVol(): ?string
    {
        return $this->dureeVol;
    }

    public function setDureeVol(?string $dureeVol): self
    {
        $this->dureeVol = $dureeVol;

        return $this;
    }

    public function getAvion(): ?Avion
    {
        return $this->avion;
    }

    public function setAvion(?Avion $avion): self
    {
        $this->avion = $avion;

        return $this;
    }

    public function getPilote(): ?Pilote
    {
        return $this->pilote;
    }

    public function setPilote(?Pilote $pilote): self
    {
        $this->pilote = $pilote;

        return $this;
    }

    public function getFacture(): ?Facture
    {
        return $this->facture;
    }

    public function setFacture(?Facture $facture): self
    {
        $this->facture = $facture;

        return $this;
    }


}
