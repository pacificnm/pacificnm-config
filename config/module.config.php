<?php
/**
 * Pacific NM (https://www.pacificnm.com)
 *
 * @link      https://github.com/pacificnm/pnm for the canonical source repository
 * @copyright Copyright (c) 20011-2016 Pacific NM USA Inc. (https://www.pacificnm.com)
 * @license
 */
return array(
    'module' => array(
        'Config' => array(
            'name' => 'Config',
            'version' => '1.0.3',
            'install' => array(
                'require' => array(),
                'sql' => 'sql/config.sql'
            )
        )
    ),
    'controllers' => array(
        'factories' => array(
            'Config\Controller\ConsoleController' => 'Config\Controller\Factory\ConsoleControllerFactory',
            'Config\Controller\CreateController' => 'Config\Controller\Factory\CreateControllerFactory',
            'Config\Controller\DeleteController' => 'Config\Controller\Factory\DeleteControllerFactory',
            'Config\Controller\IndexController' => 'Config\Controller\Factory\IndexControllerFactory',
            'Config\Controller\RestController' => 'Config\Controller\Factory\RestControllerFactory',
            'Config\Controller\UpdateController' => 'Config\Controller\Factory\UpdateControllerFactory',
            'Config\Controller\ViewController' => 'Config\Controller\Factory\ViewControllerFactory'
        )
    ),
    'controller_plugins' => array(
        'factories' => array(
            'CanRegister' => 'Config\Controller\Plugin\Factory\CanRegisterFactory',
            'CanResetPassword' => 'Config\Controller\Plugin\Factory\CanResetPasswordFactory'
        )
    ),
    'service_manager' => array(
        'factories' => array(
            'Config\Mapper\MysqlMapperInterface' => 'Config\Mapper\Factory\MysqlMapperFactory',
            'Config\Service\ServiceInterface' => 'Config\Service\Factory\ServiceFactory',
            'Config\Form\Form' => 'Config\Form\Factory\FormFactory',
            
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
                        'controller' => 'Config\Controller\CreateController',
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
                        'controller' => 'Config\Controller\DeleteController',
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
                        'controller' => 'Config\Controller\IndexController',
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
                        'controller' => 'Config\Controller\RestController',
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
                        'controller' => 'Config\Controller\UpdateController',
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
                        'controller' => 'Config\Controller\ViewController',
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
        ),
    ),
    'view_helpers' => array(
        'factories' => array(
            'AppConfig' => 'Config\View\Helper\Factory\AppConfigFactory',
        ),
    ),
    'view_manager' => array(
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
    
    ),
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
                        'active' => true,
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
)
;