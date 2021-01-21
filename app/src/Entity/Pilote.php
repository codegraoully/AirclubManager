<?php

namespace App\Entity;

use App\Entity\Reservation;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pilote
 *
 * @ORM\Table(name="pilote")
 * @ORM\Entity
 */
class Pilote {
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
     * @ORM\Column(name="nom", type="string", length=45, nullable=true)
     */
    private $nom;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prenom", type="string", length=45, nullable=true)
     */
    private $prenom;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Brevet", inversedBy="pilote")
     * @ORM\JoinTable(name="pilote_has_brevet",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pilote_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="brevet_id", referencedColumnName="id")
     *   }
     * )
     */
    private $brevet;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Qualification", inversedBy="pilote")
     * @ORM\JoinTable(name="pilote_has_qualification",
     *   joinColumns={
     *     @ORM\JoinColumn(name="pilote_id", referencedColumnName="id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="qualification_id", referencedColumnName="id")
     *   }
     * )
     */
    private $qualification;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->brevet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->qualification = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|Brevet[]
     */
    public function getBrevet(): Collection
    {
        return $this->brevet;
    }

    public function addBrevet(Brevet $brevet): self
    {
        if (!$this->brevet->contains($brevet)) {
            $this->brevet[] = $brevet;
        }

        return $this;
    }

    public function removeBrevet(Brevet $brevet): self
    {
        if ($this->brevet->contains($brevet)) {
            $this->brevet->removeElement($brevet);
        }

        return $this;
    }

    /**
     * @return Collection|Qualification[]
     */
    public function getQualification(): Collection
    {
        return $this->qualification;
    }

    public function addQualification(Qualification $qualification): self
    {
        if (!$this->qualification->contains($qualification)) {
            $this->qualification[] = $qualification;
        }

        return $this;
    }

    public function removeQualification(Qualification $qualification): self
    {
        if ($this->qualification->contains($qualification)) {
            $this->qualification->removeElement($qualification);
        }

        return $this;
    }
    
    public function __toString() {
        return $this->getNom();
    }
}
