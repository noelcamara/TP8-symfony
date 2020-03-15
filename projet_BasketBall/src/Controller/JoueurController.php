<?php
namespace App\Controller;

use App\Entity\Joueur;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JoueurController extends AbstractController {
    
    public function vueAll() {
        return $this->render('template', array('joueur' => $this->getDoctrine()->getRepository(Joueur\Joueur::class)->findAll()));
    }
    
}