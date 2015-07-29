<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
            'findme' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/wsfindme',
                    'constraints' => array(
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Application\Controller\Find',
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController'
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.twig',
            'application/index/index' => __DIR__ . '/../view/application/index/index.twig',
            'error/404'               => __DIR__ . '/../view/error/404.twig',
            'error/index'             => __DIR__ . '/../view/error/index.twig'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        )
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'application_entities' => array(
                'class' =>'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Application/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'application_entities'
                )
            )
        )
    ),
    'zfctwig' => array(
        /**
         * Service manager alias of the loader to use with ZfcTwig. By default, it uses
         * the included ZfcTwigLoaderChain which includes a copy of ZF2's TemplateMap and
         * TemplatePathStack.
         */
        'environment_loader' => 'ZfcTwigLoaderChain',
        
        /**
         * Options that are passed directly to the Twig_Environment.
         */
        'environment_options' => array(
            'debug' => true
            
        ),
        /**
         * Optional class name override for instantiating the Twig Environment in the factory.
         */
        'environment_class' => 'Twig_Environment',
        /**
         * Service manager alias of any additional loaders to register with the chain. The default
         * has the TemplateMap and TemplatePathStack registered. This setting only has an effect
         * if the `environment_loader` key above is set to ZfcTwigLoaderChain.
         */
        'loader_chain' => array(
            'ZfcTwigLoaderTemplateMap',
            'ZfcTwigLoaderTemplatePathStack'
        ),
        /**
         * Service manager alias or fully qualified domain name of extensions. ZfcTwigExtension
         * is required for this module to function!
         */
        'extensions' => array(
            'zfctwig' => 'ZfcTwigExtension'
        ),
        'suffix' => 'twig',
        'disable_zf_model' => true,
    ),
    'navigation' => array('default' =>array(
        array('label' => 'Home', 'route' => 'home', 'pages' => array(
                array('label' => 'Profile', 'route' => 'myroute'),
            ),
        ),
      ),
    ),
);
