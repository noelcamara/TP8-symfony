<?php

namespace App\Controller;

use App\Repository\EquipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{
    
    private $equipeRepository;
    
    public function __construct(EquipeRepository $equipeRepository)
    {
        $this->equipeRepository=$equipeRepository;
    }
    
    /**
     * @Route("/equipe", name="equipe")
     */
    public function index()
    {
        $equipes = ($this->equipeRepository->findAll());
        return $this->render('equipe/index.html.twig', [
            'equipes' => $equipes
        ]);
    }
}
