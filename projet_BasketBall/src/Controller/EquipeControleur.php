<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EquipeControleur extends AbstractController
{

    private $equipeRepository;

    public function __construct(EquipeRepository $equipeRepository)
    {
        $this->equipeRepository = $equipeRepository;
    }
    /**
     * @Route("/Equipe", name="Equipe.index")
     */
    public function index(){
        $equipe = $this->equipeRepository->findAll();
        return $this->render('Equipe/index.html.twig', [
            'equipe' => $equipe
        ]);
    }

    /**
     * @Route("/Equipe/{id}" , name ="Equipe.id"}
     */
    public function id($id){
        return $this->render('Equipe/id.html.twig', [
            'controller_name' => 'EquipeControleur',
        ]);
    }

    /**
     * @Route("/Equipe" , name ="Equipe.insert"}
     */
 public function insert(){
        return $this->render('Equipe/insert.html.twig', [
            'controller_name' => 'EquipeControleur',
        ]);
    }

    /**
     * @Route("/Equipe/{id}" , name ="Equipe.update"}
     */
 public function update($id){
        return $this->render('Equipe/update.html.twig', [
            'controller_name' => 'EquipeControleur',
        ]);
    }

    /**
     * @Route("/Equipe/{id}" , name ="Equipe.delete"}
     */
 public function delete($id){
        return $this->render('Equipe/delete.html.twig', [
            'controller_name' => 'EquipeControleur',
        ]);
    }
}
