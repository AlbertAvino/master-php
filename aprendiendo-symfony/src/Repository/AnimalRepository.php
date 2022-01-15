<?php
namespace App\Repository;

use App\Entity\Animal;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

class AnimalRepository extends ServiceEntityRepository{
    public function __construct(ManagerRegistry $registry )
    {
        parent::__construct($registry, Animal::class );
    }
    
    public function getAnimalsOrderById($order){
         // query buider
        
        $qb = $this->createQueryBuilder('a')
                            //->andWhere("a.raza = :raza")
                            //->setParameter('raza','americana')
                            ->orderBy('a.id','DESC')
                            ->getQuery();
        $resultset = $qb->execute();
        
        $coleccion = array(
            'name' => 'Coleccion de animales',
            'animales' => $resultset
        );
        return  $coleccion;
    }
}