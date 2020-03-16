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
    private $id_joueur;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $prenom_joueur;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom_joueur;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $capitaine;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_equipe;

    /**
     * @ORM\Column(type="string", length=11)
     */
    private $poste_joueur;

    public function getIdJoueur(): ?int
    {
        return $this->id_joueur;
    }

    public function getPrenomJoueur(): ?string
    {
        return $this->prenom_joueur;
    }

    public function setPrenomJoueur(?string $prenom_joueur): self
    {
        $this->prenom_joueur = $prenom_joueur;

        return $this;
    }

    public function getNomJoueur(): ?string
    {
        return $this->nom_joueur;
    }

    public function setNomJoueur(string $nom_joueur): self
    {
        $this->nom_joueur = $nom_joueur;

        return $this;
    }

    public function getCapitaine(): ?string
    {
        return $this->capitaine;
    }

    public function setCapitaine(string $capitaine): self
    {
        $this->capitaine = $capitaine;

        return $this;
    }

    public function getIdEquipe(): ?int
    {
        return $this->id_equipe;
    }

    public function setIdEquipe(int $id_equipe): self
    {
        $this->id_equipe = $id_equipe;

        return $this;
    }

    public function getPosteJoueur(): ?string
    {
        return $this->poste_joueur;
    }

    public function setPosteJoueur(string $poste_joueur): self
    {
        $this->poste_joueur = $poste_joueur;

        return $this;
    }
}
