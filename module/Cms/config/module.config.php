<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Cms\Controller\Page' => 'Cms\Controller\PageController',
            'Cms\Controller\PageAdmin' => 'Cms\Controller\PageAdminController'
        )
    ),
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'cms' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/page[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'Cms\Controller\Page',
                        'action' => 'index'
                    )
                )
            ),
            'admin-cms' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/admin/page[/][:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+'
                    ),
                    'defaults' => array(
                        'controller' => 'Cms\Controller\PageAdmin',
                        'action' => 'list'
                    )
                )
            )
        )
    ),
    'doctrine' => array(
        'driver' => array(
            'cms_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Cms/Entity')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Cms\Entity' => 'cms_entities'
                )
            )
        )
    )
);