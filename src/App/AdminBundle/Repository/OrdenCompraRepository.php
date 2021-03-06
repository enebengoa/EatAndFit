<?php

namespace App\AdminBundle\Repository;

/**
 * OrdenCompraRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OrdenCompraRepository extends \Doctrine\ORM\EntityRepository
{
	public function check($ingrediente, $lista)
	{
		$qp = $this->createQueryBuilder('o')->select('o')->where('o.Ingrediente = :ingrediente')->setParameter('ingrediente', $ingrediente->getId())->andWhere('o.Lista = :Lista')->setParameter('Lista', $lista->getId());
		return $qp->getQuery()->getOneOrnullResult();
	}


}
