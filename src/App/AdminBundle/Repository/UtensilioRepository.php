<?php

namespace App\AdminBundle\Repository;

/**
 * UtensilioRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UtensilioRepository extends \Doctrine\ORM\EntityRepository
{
	public function queryAll(array $valores = array())
	    {
	        $em = $this->getEntityManager();
	        $qb = $em->createQueryBuilder();
	        $qb->select('a');
	        $qb->from('AdminBundle:Utensilio', 'a');

	        if (array_key_exists("nombre", $valores))
	        {
	            $valores['nombre'] = trim($valores['nombre']);
	            if (strlen($valores['nombre'])>0)
	            {
	                $qb->where($qb->expr()->like("a.nombre", "?1"));
	                $qb->setParameter(1,"%".$valores['nombre']."%");
	            }
	        }

	        $consulta = $qb->getQuery();
	        return $consulta;
	    }
}
