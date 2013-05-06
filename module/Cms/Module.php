<?php

namespace Cms;

use Cms\Model\PageTable;
use Cms\Model\Page;
use Cms\Model\PageCategoryTable;
use Cms\Model\PageCategory;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;


class Module
{
    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php'
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__
                )
            )
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    // Add this method:
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Cms\Block\BlockCms' => function ($sm) {
                    return new \Cms\Block\BlockCms($sm);
                },
                'Cms\Block\BlockCmsAdmin' => function ($sm) {
                    return new \Cms\Block\BlockCmsAdmin($sm);
                },
                'Cms\Block\BlockTemplate' => function ($sm) {
                    return new \Cms\Block\BlockTemplate($sm);
                },
                'Cms\Block\BlockPage' => function ($sm) {
                    return new \Cms\Block\BlockPage($sm);
                },
                'Cms\Block\BlockPageAdmin' => function ($sm) {
                    return new \Cms\Block\BlockPageAdmin($sm);
                }
            )
        );
    }
}