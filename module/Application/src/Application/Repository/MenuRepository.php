<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Repository;

use Doctrine\ORM\EntityRepository;
use DateTime;

/**
 * Clase que se extiende para queries exactos
 */
class MenuRepository extends EntityRepository
{
    /**
     * Regresa los menus activos
     * @return array
     */
    public function getMenu()
    {
        $fecha  = new DateTime('NOW');
        $qb     = $this->_em->createQueryBuilder();
        $qb->select('u')
            ->from('Application\Entity\Menu', 'u')
            ->andWhere("u.active = 1")
            ->andWhere("u.fechaInicial < :date")
            ->andWhere("u.fechaFinal > :date")
            ->setParameter('date', $fecha->format('Y-m-d'));
        $respuesta = $qb->getQuery()->getResult();
        return $respuesta;
    }
}