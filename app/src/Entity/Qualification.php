<?php

namespace App\Entity;

use App\Entity\Pilote;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Qualification
 *
 * @ORM\Table(name="qualification")
 * @ORM\Entity
 */
class Qualification {
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
     * @ORM\Column(name="libelle", type="string", length=30, nullable=false)
     */
    private $libelle;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Pilote", mappedBy="qualification")
     */
    private $pilote;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pilote = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * @return Collection|Pilote[]
     */
    public function getPilote(): Collection
    {
        return $this->pilote;
    }

    public function addPilote(Pilote $pilote): self
    {
        if (!$this->pilote->contains($pilote)) {
            $this->pilote[] = $pilote;
            $pilote->addQualification($this);
        }

        return $this;
    }

    public function removePilote(Pilote $pilote): self
    {
        if ($this->pilote->contains($pilote)) {
            $this->pilote->removeElement($pilote);
            $pilote->removeQualification($this);
        }

        return $this;
    }
    
    public function __toString() {
        return $this->getLibelle();
    }
}
