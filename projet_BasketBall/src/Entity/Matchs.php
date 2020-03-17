<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JoueurRepository")
 */
class Joueur
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_match;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $score_equipe1;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $score_equipe2;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $id_equipe1;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_equipe2;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $eliminatoire;

    public function getIdMatch(): ?int
    {
        return $this->id_match;
    }

    public function getScoreEquipe1(): ?string
    {
        return $this->score_equipe1;
    }

    public function setScoreEquipe1(?int $s): self
    {
        $this->score_equipe1 = $s;

        return $this;
    }

    public function getScoreEquipe2(): ?string
    {
        return $this->score_equipe2;
    }

    public function setScoreEquipe2(?int $s): self
    {
        $this->score_equipe2 = $s;

        return $this;
    }

    public function getIdEquipe1(): ?string
    {
        return $this->id_equipe1;
    }

    public function setIdEquipe1(int $id): self
    {
        $this->id_equipe1 = $id;

        return $this;
    }

    public function getIdEquipe2(): ?string
    {
        return $this->id_equipe1;
    }

    public function setIdEquipe2(int $id): self
    {
        $this->id_equipe2 = $id;

        return $this;
    }

    public function getEliminatoire(): ?string
    {
        return $this->eliminatoire;
    }

    public function setEliminatoire(string $eliminatoire): self
    {
        $this->eliminatoire = $eliminatoire;

        return $this;
    }
}
