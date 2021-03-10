<?php


namespace App\Repository;

use App\Entity\Evaluation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
    /**
     * @method Evaluation|null find($id, $lockMode = null, $lockVersion = null)
     * @method Evaluation|null findOneBy(array $criteria, array $orderBy = null)
     * @method Evaluation[]    findAll()
     * @method Evaluation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
     */
class EvaluationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evaluation::class);
    }
}