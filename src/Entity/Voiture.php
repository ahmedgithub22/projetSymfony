<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $idvoiture;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marque;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdvoiture(): ?string
    {
        return $this->idvoiture;
    }

    public function setIdvoiture(string $idvoiture): self
    {
        $this->idvoiture = $idvoiture;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }
}
