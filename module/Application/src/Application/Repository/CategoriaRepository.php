<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Clase que se extiende para queries exactos
 */
class CategoriaRepository extends EntityRepository
{
    public function getCategoria($padre = null)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
            ->from('Application\Entity\Categoria', 'u')
            ->andWhere("u.active = 1");
        if(is_null($padre)) {
            $qb->andWhere("u.padre is null");
        } else {
            $qb->andWhere("u.padre = :padre")
                ->setParameter('padre', $padre);
            
        }
        return $qb->getQuery()->getResult();
    }
}
