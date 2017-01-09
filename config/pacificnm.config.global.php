<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link https://github.com/pacificnm/pacificnm-config for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license https://github.com/pacificnm/pacificnm-config/blob/master/LICENSE.md
 */
return array(
    'module' => array(
        'Config' => array(
            'name' => 'Config',
            'version' => '1.0.5',
            'install' => array(
                'require' => array(),
                'sql' => 'sql/config.sql'
            )
        )
    ),
    'controllers' => array(
        'factories' => array(
            'Pacificnm\Config\Controller\ConsoleController' => 'Pacificnm\Config\Controller\Factory\ConsoleControllerFactory',
            'Pacificnm\Config\Controller\CreateController' => 'Pacificnm\Config\Controller\Factory\CreateControllerFactory',
            'Pacificnm\Config\Controller\DeleteController' => 'Pacificnm\Config\Controller\Factory\DeleteControllerFactory',
            'Pacificnm\Config\Controller\IndexController' => 'Pacificnm\Config\Controller\Factory\IndexControllerFactory',
            'Pacificnm\Config\Controller\RestController' => 'Pacificnm\Config\Controller\Factory\RestControllerFactory',
            'Pacificnm\Config\Controller\UpdateController' => 'Pacificnm\Config\Controller\Factory\UpdateControllerFactory',
            'Pacificnm\Config\Controller\ViewController' => 'Pacificnm\Config\Controller\Factory\ViewControllerFactory'
        )
    ),
    'controller_plugins' => array(
        'factories' => array(
            'CanRegister' => 'Pacificnm\Config\Controller\Plugin\Factory\CanRegisterFactory',
            'CanResetPassword' => 'Pacificnm\Config\Controller\Plugin\Factory\CanResetPasswordFactory'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'Pacificnm\Config\Mapper\MysqlMapperInterface' => 'Pacificnm\Config\Mapper\Factory\MysqlMapperFactory',
            'Pacificnm\Config\Service\ServiceInterface' => 'Pacificnm\Config\Service\Factory\ServiceFactory',
            'Pacificnm\Config\Form\Form' => 'Pacificnm\Config\Form\Factory\FormFactory',
        )
        
    ),
    'router' => array(
        'routes' => array(
            'config-create' => array(
                'pageTitle' => 'Config',
                'pageSubTitle' => 'New',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'config-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'literal',
                'options' => array(
                    'route' => '/admin/config/create',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Config\Controller\CreateController',
                        'action' => 'index'
                    )
                )
            ),
            'config-delete' => array(
                'pageTitle' => 'Config',
                'pageSubTitle' => 'Delete',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'config-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/config/delete/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Config\Controller\DeleteController',
                        'action' => 'index'
                    ),
                    'constraints' => array(
                        'id' => '[0-9]+'
                    )
                )
            ),
            'config-index' => array(
                'pageTitle' => 'Config',
                'pageSubTitle' => 'Home',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'config-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'literal',
                'options' => array(
                    'route' => '/admin/config',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Config\Controller\IndexController',
                        'action' => 'index'
                    )
                )
            ),
            'config-reset' => array(
                'pageTitle' => 'Rest',
                'pageSubTitle' => '',
                'activeMenuItem' => '',
                'activeSubMenuItem' => '',
                'icon' => 'fa fa-gear',
                'layout' => 'rest',
                'type' => 'segment',
                'options' => array(
                    'route' => '/api/config[/:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Config\Controller\RestController'
                    ),
                    'constraints' => array(
                        'id' => '[0-9]+'
                    )
                )
            ),
            'config-update' => array(
                'pageTitle' => 'Config',
                'pageSubTitle' => 'Edit',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'config-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/config/update/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Config\Controller\UpdateController',
                        'action' => 'index'
                    ),
                    'constraints' => array(
                        'id' => '[0-9]+'
                    )
                )
            ),
            'config-view' => array(
                'pageTitle' => 'Config',
                'pageSubTitle' => 'View',
                'activeMenuItem' => 'admin-index',
                'activeSubMenuItem' => 'config-index',
                'icon' => 'fa fa-gear',
                'layout' => 'admin',
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/config/view/[:id]',
                    'defaults' => array(
                        'controller' => 'Pacificnm\Config\Controller\ViewController',
                        'action' => 'index'
                    ),
                    'constraints' => array(
                        'id' => '[0-9]+'
                    )
                )
            )
        )
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
                'config-console-index' => array()
            )
        )
    ),
    'view_helpers' => array(
        'factories' => array(
            'AppConfig' => 'Pacificnm\Config\View\Helper\Factory\AppConfigFactory'
        )
    ),
    'view_manager' => array(
        'controller_map' => array(
            'Pacificnm\Config' => true
        ),
        'template_map' => array(
            'pacificnm/config/create/index' => __DIR__ . '/../view/config/create/index.phtml',
            'pacificnm/config/delete/index' => __DIR__ . '/../view/config/delete/index.phtml',
            'pacificnm/config/index/index' => __DIR__ . '/../view/config/index/index.phtml',
            'pacificnm/config/update/index' => __DIR__ . '/../view/config/update/index.phtml',
            'pacificnm/config/view/index' => __DIR__ . '/../view/config/view/index.phtml'
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    'acl' => array(
        'default' => array(
            'guest' => array(),
            'user' => array(),
            'administrator' => array(
                'config-create',
                'config-delete',
                'config-index',
                'config-update',
                'config-view'
            )
        )
    )
    ,
    'menu' => array(
        'default' => array(
            array(
                'name' => 'Admin',
                'route' => 'admin-index',
                'icon' => 'fa fa-gear',
                'order' => 99,
                'active' => true,
                'location' => 'left',
                'items' => array(
                    array(
                        'name' => 'Config',
                        'route' => 'config-index',
                        'icon' => 'fa fa-gear',
                        'order' => 2,
                        'active' => true
                    )
                )
            )
        )
    ),
    'navigation' => array(
        'default' => array(
            array(
                'label' => 'Admin',
                'route' => 'admin-index',
                'useRouteMatch' => true,
                'pages' => array(
                    array(
                        'label' => 'Config',
                        'route' => 'config-index',
                        'useRouteMatch' => true,
                        'pages' => array(
                            array(
                                'label' => 'Edit Config',
                                'route' => 'config-update',
                                'useRouteMatch' => true
                            )
                        )
                    )
                )
            )
        )
    )
);