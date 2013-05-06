<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 4/10/13
 * Time: 9:38 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Block;
use Vts\Core\Block\AbstractBlock;
use Zend\ServiceManager\ServiceManager;

class BlockCms extends AbstractBlock    {
	
	public $serviceManager;
	
	public function __construct(ServiceManager $serviceManager){
		$this->serviceManager = $serviceManager;
	}
	
	/**
	 * @var Cms\Model\PageTable
	 */
	public $pageTable;
	
	/**
	 * @var Cms\Model\CategoryTable
	 */
	public $pageCategoryTable;
	
	/**
	 * Get page table
	 * @author tien.nguyen
	 */
	public function getPageTable(){
		if (!$this->pageTable) {
			$this->pageTable = $this->serviceManager->get('Cms\Model\PageTable');
		};
		return $this->pageTable;
	}
	
	/**
	 * Get category table
	 * @author tien.nguyen
	 */
	public function getPageCategoryTable(){
		if (!$this->pageCategoryTable) {
			$this->pageCategoryTable = $this->serviceManager->get('Cms\Model\PageCategoryTable');
		};
		return $this->pageCategoryTable;
	}

	/**
	 * Get detail of page by page id
	 * @param int $pageId
	 */
	public function detailPage($params){
		$res = array();
		$params = $this->convertParams($params);
		$res['Page'] = $this->getPageTable()->getPage($params->id);
		return $res;
	}
	
	/**
	 * 
	 * @param unknown $params
	 * @return multitype:NULL
	 */
	public function getPageCategorys($params){
		$res = array();
		$params = $this->convertParams($params);
		$res['PageCategorys'] = $this->getPageCategoryTable()->fetchAll();
		return $res;
	}

}