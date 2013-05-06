<?php
namespace Cms\Block;
use Vts\Core\Block\AbstractBlock;
use Zend\ServiceManager\ServiceManager;

class BlockCmsAdmin extends AbstractBlock {
	public $serviceManager;
	
	/**
	 * @var Cms\Model\PageTable
	 */
	public $pageTable;
	
	public function __construct(ServiceManager $serviceManager){
		$this->serviceManager = $serviceManager;
	}
	
	/**
	 * Get page table
	 * @author tien.nguyen
	 * @return Cms\Model\PageTable
	 */
	public function getPageTable(){
		if (!$this->pageTable) {
			$this->pageTable = $this->serviceManager->get('Cms\Model\PageTable');
		};
		return $this->pageTable;
	}
	
	/**
	 * Get pages
	 * @param array $params
	 * @return multitype:NULL
	 */
	public function getPages($params){
		$res = array();
		$params = $this->convertParams($params);
		$res['Pages'] = $this->getPageTable()->fetchAll();
		return $res;
	}
}