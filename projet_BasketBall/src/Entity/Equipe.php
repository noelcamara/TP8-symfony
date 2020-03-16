<?php
namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;

/**
  * Equipe
  *
  * @ORM\Table(name="Equipe")
  * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
  */
class Equipe
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_equipe", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
        */
    private $id_equipe;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_equipe", type="string", length=50)
     */
    private $nom_equipe;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_victoire", type="integer")
     */
    private $nb_victoire;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_defaite", type="integer")
     */
    private $nb_defaite;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_points", type="integer")
     */
    private $nb_points;



    /**
     * EntiteJoueurs constructor.
     * @param array
     */
    public function __construct($param) {
        parent::setPersistant(false);
        $this->id_equipe = $param['id_equipe'];
        $this->nom_equipe = $param['nom_equipe'];
        $this->nb_victoire = $param['nb_victoire'];
        $this->nb_defaite = $param['nb_defaite'];
        $this->nb_points = $param['nb_points'];
    }

    /**
     * @return int
     */
    public function getIdEquipe()
    {
        return $this->id_equipe;
    }

    /**
     * @param int $id_equipe
     */
    public function setIdEquipe($id_equipe): void
    {
        $this->id_equipe = $id_equipe;
       return $this;
    }
    /**
     * @return string
     */
    public function getNomEquipe()
    {
        return $this->nom_equipe;
    }

    /**
     * @param string $nom_equipe
     */
    public function setNomEquipe($nom_equipe): void
    {
        $this->nom_equipe = $nom_equipe;
    }

    /**
     * @return int
     */
    public function getNbVictoire()
    {
        return $this->nb_victoire;
    }

    /**
     * @param int $nb_victoire
     */
    public function setNbVictoire($nb_victoire): void
    {
        $this->nb_victoire = $nb_victoire;
    }

    /**
     * @return int
     */
    public function getNbDefaite()
    {
        return $this->nb_defaite;
    }

    /**
     * @param int $nb_defaite
     */
    public function setNbDefaite($nb_defaite): void
    {
        $this->nb_defaite = $nb_defaite;
    }

    /**
     * @return int
     */
    public function getNbPoints()
    {
        return $this->nb_points;
    }

    /**
     * @param int $nb_points
     */
    public function setNbPoints($nb_points): void
    {
        $this->nb_points = $nb_points;
    }

}
?>
