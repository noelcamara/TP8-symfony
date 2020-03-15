<?php

namespace App\Entity\Joueur;

use App\Entity\AbstractEntite;

class Joueur extends AbstractEntite {
    
    protected $id_joueur;
    protected $prenom_joueur;
    protected $nom_joueur;
    protected $poste_joueur;
    protected $capitaine;
    protected $f_id_equipe;
    
    
    /**
     * EntiteJoueurs constructor.
     * @param array
     */
    public function __construct($param) {
        parent::setPersistant(false);
        $this->id_joueur = $param['id_joueur'];
        $this->prenom_joueur = $param['prenom_joueur'];
        $this->nom_joueur = $param['nom_joueur'];
        $poste = isset($_POST['poste_joueur']) ? $_POST['poste_joueur'] : NULL;
        $this->poste_joueur = $poste;
        $this->capitaine = $param['capitaine'];
        $this->f_id_equipe = $param['id_equipe'];
    }
    
    
    /**
     * Getteurs et Setteurs :
     */
    
    /**
     * @return mixed
     */
    public function getIdJoueur() {
        return $this->id_joueur;
    }

    /**
     * @param mixed $id_joueur
     */
    public function setIdJoueur($id_joueur): void {
        $this->id_joueur = $id_joueur;
    }

    /**
     * @return mixed
     */
    public function getPrenomJoueur() {
        return $this->prenom_joueur;
    }

    /**
     * @param mixed $prenom_joueur
     */
    public function setPrenomJoueur($prenom_joueur): void {
        $this->prenom_joueur = $prenom_joueur;
    }

    /**
     * @return mixed
     */
    public function getNomJoueur() {
        return $this->nom_joueur;
    }

    /**
     * @param mixed $nom_joueur
     */
    public function setNomJoueur($nom_joueur): void {
        $this->nom_joueur = $nom_joueur;
    }

    /**
     * @return mixed
     */
    public function getPosteJoueur() {
        return $this->poste_joueur;
    }

    /**
     * @param mixed $poste_joueur
     */
    public function setPosteJoueur($poste_joueur): void {
        $this->poste_joueur = $poste_joueur;
    }

    /**
     * @return mixed
     */
    public function getCapitaine() {
        return $this->capitaine;
    }

    /**
     * @param mixed $capitaine
     */
    public function setCapitaine($capitaine): void {
        $this->capitaine = $capitaine;
    }

    /**
     * @return mixed
     */
    public function getFIdEquipe() {
        return $this->f_id_equipe;
    }

    /**
     * @param mixed $f_id_equipe
     */
    public function setFIdEquipe($f_id_equipe): void {
        $this->f_id_equipe = $f_id_equipe;
    }
}
