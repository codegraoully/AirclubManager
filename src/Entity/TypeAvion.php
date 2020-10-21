<?php

namespace App\Entity;

use App\Entity\Avion;
use Doctrine\ORM\Mapping as ORM;

/**
 * TypeAvion
 *
 * @ORM\Table(name="type_avion")
 * @ORM\Entity
 */
class TypeAvion {
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
     * @ORM\Column(name="libelle", type="string", length=30, nullable=true)
     */
    private $libelle;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
    
    public function __toString() {
        return $this->getLibelle();
    }
    
}
