<?php

namespace App\Entity;

use App\Repository\InstitutRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InstitutRepository::class)
 */
class Institut
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $nom_inst;
/**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $addresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomi;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomInst(): ?string
    {
        return $this->nom_inst;
    }

    public function setNomInst(?string $nom_inst): self
    {
        $this->nom_inst = $nom_inst;

        return $this;
    }
    public function getAddresse(): ?string
    {
        return $this->addresse;
    }

    public function setAddresse(?string $addresse): self
    {
        $this->addresse = $addresse;

        return $this;
    }

    public function getNomi(): ?string
    {
        return $this->nomi;
    }

    public function setNomi(string $nomi): self
    {
        $this->nomi = $nomi;

        return $this;
    }
}
