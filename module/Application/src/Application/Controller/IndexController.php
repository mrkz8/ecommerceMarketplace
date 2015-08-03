<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;

class IndexController extends AbstractActionController
{
    /**
     * Variable para obtener el entitiManager
     * @var EntityManager
     */
    protected $em;
    /**
     * Regresa el entityManager para poder hacer pruebas unitarias
     * @return EntityManager
     */
    public function getEntityManager()
    {
        if (null === $this->em) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }
        return $this->em;
    }
    /**
     * 
     * @return ViewModel
     */
    public function indexAction()
    {
        $categoriaEntity    = $this->getEntityManager()->getRepository('Application\Entity\Categoria');
        $categoria          = $categoriaEntity->getCategoria();
        return array(
            'test'=>'aaa',
            'menu'=>array(
                
            )
        );
    }
}
