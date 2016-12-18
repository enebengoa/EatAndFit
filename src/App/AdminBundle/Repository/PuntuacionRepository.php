<?php

namespace App\AdminBundle\Repository;

/**
 * PuntuacionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PuntuacionRepository extends \Doctrine\ORM\EntityRepository
{

		public function getMediaPuntuacionReceta($receta_id)
	{
		$qp = $this->createQueryBuilder('p')->select('AVG(p.puntuacion)')->where('p.Receta= :receta_id')->setParameter('receta_id', $receta_id);
		return $qp->getQuery()->getSingleScalarResult();
	}
}