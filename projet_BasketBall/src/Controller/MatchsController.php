<?php

namespace App\Controller;

use App\Repository\JoueurRepository;
use App\Repository\MatchsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MatchsController extends AbstractController
{
    
    private $matchsRepository;
    
    public function __construct(MatchsRepository $matchsRepository)
    {
        $this->matchsRepository=$matchsRepository;
    }
    
    /**
     * @Route("/matchs", name="matchs")
     */
    public function index()
    {
        $matchs=($this->matchsRepository->findAll());
        return $this->render('matchs/index.html.twig', [
            'matchs' => $matchs,
        ]);
    }
}
