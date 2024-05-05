<?php

namespace App\Repository;

use App\Entity\Evenement;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Evenement>
 *
 * @method Evenement|null find($id, $lockMode = null, $lockVersion = null)
 * @method Evenement|null findOneBy(array $criteria, array $orderBy = null)
 * @method Evenement[]    findAll()
 * @method Evenement[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EvenementRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Evenement::class);
    }

//    /**
//     * @return Evenement[] Returns an array of Evenement objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Evenement
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
// EvenementRepository.php

public function findBySearchTerm(string $searchTerm): array
{
    return $this->createQueryBuilder('e')
        ->andWhere('e.nom LIKE :searchTerm')
        ->setParameter('searchTerm', $searchTerm . '%') // Recherche des noms commençant par le terme de recherche
        ->getQuery()
        ->getResult();
}
// EvenementRepository.php

public function findByPrice(): array
{
    return $this->createQueryBuilder('e')
        ->orderBy('e.prix', 'ASC')
        ->getQuery()
        ->getResult();
}

public function countEventsByCategory($category): int
{
    return $this->createQueryBuilder('e')
        ->select('COUNT(e)')
        ->where('e.categorie = :category')
        ->setParameter('category', $category)
        ->getQuery()
        ->getSingleScalarResult();
}

// Nouvelle méthode pour compter le nombre d'événements par catégorie
public function countCategorie($category): int
{
    return $this->createQueryBuilder('e')
        ->select('COUNT(e)')
        ->where('e.categorie = :category')
        ->setParameter('category', $category)
        ->getQuery()
        ->getSingleScalarResult();
}





public function getStatistiques()
{
    return $this->createQueryBuilder('e')
        ->select('e.categorie, COUNT(e.id) AS nbEvenements')
        ->groupBy('e.categorie')
        ->getQuery()
        ->getResult();
}


}
