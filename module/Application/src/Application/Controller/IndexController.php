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
     * Obtiene la configuracion de un indice en especifico
     * @param string $key
     * @return array
     */
    private function getConfigurationKey($key)
    {
        $respuesta = array();
        $config     = $this->serviceLocator->get('configuration');
        if(key_exists($key, $config)) {
            $respuesta = $config[$key];
        }
        return $respuesta;
    }
    /**
     * Regresa 
     * @return array
     */
    private function getCategoria()
    {
        $categoriaEntity    = $this->getEntityManager()->getRepository('Application\Entity\Categoria');
        $categoria          = $categoriaEntity->getCategoria();
        return $categoria;
    }
    /**
     * Obtiene los landing habiitados
     * @return array
     */
    private function getMenu()
    {
        $menuEntity     = $this->getEntityManager()->getRepository('Application\Entity\Menu');
        $menu           = $menuEntity->getMenu();
        return $menu;
    }
    /**
     * 
     * @return ViewModel
     */
    public function indexAction()
    {
        $site = $this->getConfigurationKey('siteConfig');
        return array(
            'menu'          => $this->getCategoria(),
            'landing'       => $this->getMenu(),
            "title"         => $site['title']
        );
    }
}
