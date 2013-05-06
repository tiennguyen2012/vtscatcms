<?php

namespace Cms;

use Cms\Model\PageTable;
use Cms\Model\Page;
use Cms\Model\PageCategoryTable;
use Cms\Model\PageCategory;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;


class Module {
	public function getAutoloaderConfig() {
		return array (
				'Zend\Loader\ClassMapAutoloader' => array (
						__DIR__ . '/autoload_classmap.php' 
				),
				'Zend\Loader\StandardAutoloader' => array (
						'namespaces' => array (
								__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__ 
						) 
				) 
		);
	}
	public function getConfig() {
		return include __DIR__ . '/config/module.config.php';
	}
	
	// Add this method:
	public function getServiceConfig() {
		return array (
				'factories' => array (
						'Cms\Model\PageTable' => function ($sm) {
							$tableGateway = $sm->get ( 'PageTableGateway' );
							$table = new PageTable ( $tableGateway );
							return $table;
						},
						'PageTableGateway' => function ($sm) {
							$dbAdapter = $sm->get ( 'Zend\Db\Adapter\Adapter' );
							$resultSetPrototype = new ResultSet ();
							$resultSetPrototype->setArrayObjectPrototype ( new Page () );
							return new TableGateway ( 'Pages', $dbAdapter, null, $resultSetPrototype );
						},
						'Cms\Model\PageCategoryTable' => function ($sm) {
							$tableGateway = $sm->get ( 'PageCategoryTableGateway' );
							$table = new PageCategoryTable($tableGateway );
							return $table;
						},
						'PageCategoryTableGateway' => function ($sm) {
							$dbAdapter = $sm->get ( 'Zend\Db\Adapter\Adapter' );
							$resultSetPrototype = new ResultSet ();
							$resultSetPrototype->setArrayObjectPrototype ( new PageCategory() );
							return new TableGateway ( 'PageCategorys', $dbAdapter, null, $resultSetPrototype );
						},
						'Cms\Block\BlockCms' => function ($sm){
							return new \Cms\Block\BlockCms($sm);
						},
						'Cms\Block\BlockCmsAdmin' => function ($sm){
							return new \Cms\Block\BlockCmsAdmin($sm);
						},
                        'Cms\Block\BlockTemplate' => function ($sm){
                            return new \Cms\Block\BlockTemplate($sm);
                        }
				) 
		);
	}
}