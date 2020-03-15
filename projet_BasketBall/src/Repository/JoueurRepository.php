<?php

namespace App\Repository;

use App\Entity\Joueur\Joueur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;


class JoueurRepository extends ServiceEntityRepository {
    
    public function __construct(ManagerRegistry $registry) {
        parent::__construct($registry, Joueur::class);
    }
    
    /**
     * @method Joueur[] findAll()
     */
    public function findAll() {
        return $this->createQueryBuilder('aj')
            ->select('*')
            ->from('joueur', 'j')
            ->getQuery()
            ->getResult()
            ;
    
    }
}
