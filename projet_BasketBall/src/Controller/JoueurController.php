<?php

namespace App\Controller;

use App\Repository\JoueurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class JoueurController extends AbstractController
{
    
    private $joueurRepository;
    
    public function __construct(JoueurRepository $joueurRepository)
    {
        $this->joueurRepository = $joueurRepository;
    }
    
    /**
     * @Route("/joueur", name="joueur")
     */
    public function index()
    {
        $players=($this->joueurRepository->findAll());
        return $this->render('joueur/index.html.twig', [
            'players' => $players
        ]);
    }
}
