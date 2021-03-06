<?php

namespace App\AdminBundle\Repository;

/**
 * MenuRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MenuRepository extends \Doctrine\ORM\EntityRepository
{

	public function queryAll(array $valores = array(), $user)
	  {
	        $em = $this->getEntityManager();
	        $qb = $em->createQueryBuilder();
	        $qb->select('a');
	        $qb->from('AdminBundle:Menu', 'a');

	        if (array_key_exists("nombre", $valores))
	        {
	            $valores['nombre'] = trim($valores['nombre']);
	            if (strlen($valores['nombre'])>0)
	            {
	                $qb->where($qb->expr()->like("a.nombre", "?1"));
	                $qb->setParameter(1,"%".$valores['nombre']."%");
	            }

	            $valores['publico'] = trim($valores['publico']);
	            if (strlen($valores['publico'])>0)
	            {
	                $qb->AndWhere($qb->expr()->like("a.publico", "?2"));
	                $qb->setParameter(2,$valores['publico']);
	                if((intval($valores['publico']))==0)
					{
						$qb->AndWhere("a.Usuario = ?3");
	                	$qb->setParameter(3,$user->getId());
					}
	            }
	        }

	        $consulta = $qb->getQuery();
	        return $consulta;
	  }

	  public function getNumeroMenusFecha()
	{
		$qp = $this->createQueryBuilder('m')->select('m.fechaCreacion','count(m.id) as frecuenciaMenus')->groupBy('m.fechaCreacion')->addOrderBy('m.fechaCreacion', 'ASC');;
		
		return $qp->getQuery()->getResult();
	}

	public function getNumeroMenu()
	{
		$qp = $this->createQueryBuilder('m')->select('count(m.id)');
		
		return $qp->getQuery()->getSingleScalarResult();
	}


}
