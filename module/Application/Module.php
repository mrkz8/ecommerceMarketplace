<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    /**
     * Evento al cargarse la aplicacion
     * @param MvcEvent $e
     */
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
        $navigation = array(
            'home' => array(
               'name' => 'Home',
               'route' => 'home',
            ),
            'profile' => array(
               'name' => 'Profile',
               'route' => 'myroute',
               'active' => true
            ),
         );

//        $view = $e->getApplication('application')->getMvcEvent()->getViewModel();
//
//        $view->navigation = $navigation;
        $ZfcTwigRenderer = $e->getApplication()->getServiceManager()->get('ZfcTwigRenderer');
        $ZfcTwigRenderer->navigation = $navigation;
    }
    /**
     * Obtiene la configuracion
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
    /**
     * Autocarga de Config
     * @return array
     */
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
    /**
     * Return Factories
     * @return array
     */
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
            )
        );
    }
}
