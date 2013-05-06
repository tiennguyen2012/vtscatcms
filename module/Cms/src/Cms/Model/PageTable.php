<?php

namespace Cms\Model;

use Zend\Db\TableGateway\TableGateway;

class PageTable {
	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	public function fetchAll() {
		$resultSet = $this->tableGateway->select(array('IsDeleted' => 0));
		return $resultSet;
	}
	public function getPage($id) {
		$id = ( int ) $id;
		$rowset = $this->tableGateway->select ( array (
				'PageId' => $id 
		) );

		$row = $rowset->current ();
		if (! $row) {
			throw new \Exception ( "Error Processing Request", 1 );
		}
		return $row;
	}
	public function savePage(Page $page) {
		$data = array (
				'PageTitle' => $page->PageTitle,
				'PageName' => $page->PageName,
				'PageContent' => $page->PageContent,
				'IsActive' => $page->IsActive,
				'IsDeleted' => $page->IsDeleted 
		);
		
		$id = ( int ) $page->PageId;
		if ($id) {
			$this->tableGateway->insert ( $data );
		} else {
			if ($this->getPageId ()) {
				$this->tableGateway->update ( $data, array (
						'PageId' => $id 
				) );
			} else {
				throw new \Exception ( 'Form id does not exist' );
			}
		}
	}
	
	/**
	 * Delete page
	 */
	public function deletePage($pageId) {
		$this->tableGateway->delete ( $pageId );
	}
}