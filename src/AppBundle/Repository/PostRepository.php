<?php

namespace AppBundle\Repository;

/**
 * PostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PostRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAllByTitle($title){
        $query = $this->createQueryBuilder('post')
            ->where('post.title LIKE :title')
            ->setParameter('title' , '%'.$title.'%')
            ->orderBy('post.title' , 'ASC')
            ->getQuery();

        return $query->getResult();
    }
}
