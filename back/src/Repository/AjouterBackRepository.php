<?php

namespace App\Repository;

use App\Entity\Ajouter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Ajouter>
 *
 * @method Ajouter|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ajouter|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ajouter[]    findAll()
 * @method Ajouter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AjouterBackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ajouter::class);
    }

    public function save(Ajouter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Ajouter $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getSalesFromSevenDays()
    {
        $result = array();
        $date = new \DateTime();

        for ($i = 0; $i < 7; $i++) {
            $formattedDate = $date->format('Y-m-d');
            $count = $this->createQueryBuilder('a')
                ->select('SUM(a.qte)')
                ->andWhere('a.date = :formattedDate')
                ->setParameter('formattedDate', $formattedDate)
                ->getQuery()
                ->getSingleScalarResult();

            $result[$formattedDate] = $count;

            $date->modify('-1 day');
        }

        return $result;
    }

    public function getSalesFromFiveWeeks()
    {
        $result = array();
        $date = new \DateTime();

        for ($i = 0; $i < 5; $i++) {
            $weekStart = clone $date;
            $weekStart->modify('Monday this week')->modify('-' . ($i * 7) . ' days');
            $weekEnd = clone $weekStart;
            $weekEnd->modify('Sunday this week');

            $formattedWeekStart = $weekStart->format('Y-m-d');
            $formattedWeekEnd = $weekEnd->format('Y-m-d');

            $count = $this->createQueryBuilder('c')
                ->select('SUM(c.qte)')
                ->andWhere('c.date >= :weekStart')
                ->andWhere('c.date <= :weekEnd')
                ->setParameter('weekStart', $formattedWeekStart)
                ->setParameter('weekEnd', $formattedWeekEnd)
                ->getQuery()
                ->getSingleScalarResult();

            $result[$formattedWeekStart] = $count;
        }

        return $result;
    }

    public function getSalesFromSevenDaysCategory()
    {
        $result = array();
        $date = new \DateTime();

        $qb = $this->createQueryBuilder('a');
        $qb->select('c.nom')
            ->leftJoin('a.produit', 'p')
            ->leftJoin('p.categorie', 'c')
            ->orderBy('c.nom', 'ASC')
            ->addGroupBy('c.nom', 'a.date')
            ->distinct(true);

        $query = $qb->getQuery();
        $results = $query->getResult();

        for ($i = 0; $i < 7; $i++) {
            foreach ($results as $row) {
                $category = $row['nom'];
                $formattedDate = $date->format('Y-m-d');

                $count = $this->createQueryBuilder('a')
                    ->select('SUM(a.qte)')
                    ->leftJoin('a.produit', 'p')
                    ->leftJoin('p.categorie', 'c')
                    ->andWhere('a.date = :formattedDate')
                    ->andWhere('c.nom = :category')
                    ->setParameter('formattedDate', $formattedDate)
                    ->setParameter('category', $category)
                    ->getQuery()
                    ->getSingleScalarResult();

                $result[$formattedDate][$category] = $count;
            }
            $date->modify('-1 day');
        }
        return $result;
    }

    public function getSalesFromFiveWeeksCategory()
    {

        $result = array();
        $date = new \DateTime();

        $qb = $this->createQueryBuilder('a');
        $qb->select('c.nom')
            ->leftJoin('a.produit', 'p')
            ->leftJoin('p.categorie', 'c')
            ->orderBy('c.nom', 'ASC')
            ->addGroupBy('c.nom', 'a.date')
            ->distinct(true);

        $query = $qb->getQuery();
        $results = $query->getResult();

        for ($i = 0; $i < 7; $i++) {
            $weekStart = clone $date;
            $weekStart->modify('Monday this week')->modify('-' . ($i * 7) . ' days');
            $weekEnd = clone $weekStart;
            $weekEnd->modify('Sunday this week');

            $formattedWeekStart = $weekStart->format('Y-m-d');
            $formattedWeekEnd = $weekEnd->format('Y-m-d');
            foreach ($results as $row) {
                $category = $row['nom'];

                $count = $this->createQueryBuilder('a')
                    ->select('SUM(a.qte)')
                    ->leftJoin('a.produit', 'p')
                    ->leftJoin('p.categorie', 'c')
                    ->andWhere('a.date >= :weekStart')
                    ->andWhere('a.date <= :weekEnd')
                    ->setParameter('weekStart', $formattedWeekStart)
                    ->setParameter('weekEnd', $formattedWeekEnd)
                    ->andWhere('c.nom = :category')
                    ->setParameter('category', $category)
                    ->getQuery()
                    ->getSingleScalarResult();

                $result[$formattedWeekStart][$category] = $count;
            }
        }
        return $result;
    }

}
