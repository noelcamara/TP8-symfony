<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
 */
class Equipe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id_equipe;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_equipe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_victoire;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nb_defaite;

    /**
     * @ORM\Column(type="integer")
     */
    private $nb_points;

    public function getIdEquipe(): ?int
    {
        return $this->id_equipe;
    }

    public function getNomEquipe(): ?string
    {
        return $this->nom_equipe;
    }

    public function setNomEquipe(string $nom_equipe): self
    {
        $this->nom_equipe = $nom_equipe;

        return $this;
    }

    public function getNbVictoire(): ?int
    {
        return $this->nb_victoire;
    }

    public function setNbVictoire(?int $nb_victoire): self
    {
        $this->nb_victoire = $nb_victoire;

        return $this;
    }

    public function getNbDefaite(): ?int
    {
        return $this->nb_defaite;
    }

    public function setNbDefaite(?int $nb_defaite): self
    {
        $this->nb_defaite = $nb_defaite;

        return $this;
    }

    public function getNbPoints(): ?int
    {
        return $this->nb_points;
    }

    public function setNbPoints(int $nb_points): self
    {
        $this->nb_points = $nb_points;

        return $this;
    }
}
