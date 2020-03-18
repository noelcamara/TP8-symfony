<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchsRepository")
 */
class Matchs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_match;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $date_match;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $elim_directe;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $type;

    /**
     * @ORM\Column(type="integer")
     */
    private $score_equipe1;

    /**
     * @ORM\Column(type="integer")
     */
    private $score_equipe2;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_equipe1;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_equipe2;

    public function getIdMatch(): ?int
    {
        return $this->id_match;
    }

    public function getDateMatch(): ?string
    {
        return $this->date_match;
    }

    public function setDateMatch(\DateTimeInterface $date_match): self
    {
        $this->date_match = $date_match;

        return $this;
    }

    public function getElimDirecte(): ?string
    {
        return $this->elim_directe;
    }

    public function setElimDirecte(string $elim_directe): self
    {
        $this->elim_directe = $elim_directe;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getScoreEquipe1(): ?int
    {
        return $this->score_equipe1;
    }

    public function setScoreEquipe1(int $score_equipe1): self
    {
        $this->score_equipe1 = $score_equipe1;

        return $this;
    }

    public function getScoreEquipe2(): ?int
    {
        return $this->score_equipe2;
    }

    public function setScoreEquipe2(int $score_equipe2): self
    {
        $this->score_equipe2 = $score_equipe2;

        return $this;
    }

    public function getIdEquipe1(): ?int
    {
        return $this->id_equipe1;
    }

    public function setIdEquipe1(int $id_equipe1): self
    {
        $this->id_equipe1 = $id_equipe1;

        return $this;
    }

    public function getIdEquipe2(): ?int
    {
        return $this->id_equipe2;
    }

    public function setIdEquipe2(int $id_equipe2): self
    {
        $this->id_equipe2 = $id_equipe2;

        return $this;
    }
}
