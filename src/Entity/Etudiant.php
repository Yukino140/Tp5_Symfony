<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EtudiantRepository::class)
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;
/**
      * @ORM\ManyToOne(targetEntity= "Institut")
      * @ORM\JoinColumn(name="institut_id", referencedColumnName="id")
      */
      Private $instit ;
      /**
     * Set instit
     *
     * @param \Entity\Institut $instit
     *
     * @return Etudiant
     */
    public function setInstit($instit)
    {
        $this->instit = $instit;

        return $this;
    }

    /**
     * Get nome
     *
     * @return \Entity\Institut
     */
    public function getInstit()
    {
        return $this->instit;
    }
 

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }
}
