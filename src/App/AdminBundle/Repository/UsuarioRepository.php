<?php

namespace App\AdminBundle\Repository;

/**
 * UsuarioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UsuarioRepository extends \Doctrine\ORM\EntityRepository
{
	public function getNumeroUsuario()
	{
		$qp = $this->createQueryBuilder('u')->select('count(u.id)');
		
		return $qp->getQuery()->getSingleScalarResult();
	}
}
