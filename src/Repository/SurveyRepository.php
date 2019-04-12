<?php

namespace App\Repository;

use App\Entity\Survey;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

final class SurveyRepository
{
    /**
     * @var EntityRepository
     */
    private $repository;

    /**
     * SurveyRepository constructor.
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->repository = $entityManager->getRepository(Survey::class);
    }

    public function getAllSurveys($current_page, $limit, $sort, $direction)
    {
        $s = in_array($sort,["first_name", "last_name", "age"])
            ? $sort: 'last_name';
        $d = $direction == 'desc'? 'desc':'asc';

        $query = $this->repository->createQueryBuilder("s")
            ->orderBy("s.".$s, $d)
            ->getQuery();

        return $this->paginate($query, $current_page, $limit);
    }

    public function paginate($dql, $page, $limit)
    {
        $paginator = new Paginator($dql);

        $paginator->getQuery()
            ->setFirstResult($limit * ($page - 1))// Offset
            ->setMaxResults($limit); // Limit

        return $paginator;
    }
}