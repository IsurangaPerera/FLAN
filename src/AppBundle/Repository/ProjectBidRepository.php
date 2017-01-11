<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ProjectBidRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProjectBidRepository extends EntityRepository
{
    public function getAverageBid($id)
    {
        $repository = $this->getEntityManager()
    	->getRepository('AppBundle:ProjectBid');

		$query = $repository->createQueryBuilder('u')
		->select('avg(u.bidAmount)')
    	->where('u.projectId = :idBid')
    	->setParameter('idBid', $id)
    	->getQuery();

		$avg = $query->getResult();
		return $avg[0][1];
    }

    public function getBidCount($id)
    {
        $repository = $this->getEntityManager()
    	->getRepository('AppBundle:ProjectBid');

		$query = $repository->createQueryBuilder('u')
		->select('count(u.projectId)')
    	->where('u.projectId = :idBid')
    	->setParameter('idBid', $id)
    	->getQuery();

		$count = $query->getResult();
		return $count[0][1];
    }
}
