<?php

namespace Cms\Model;
use Zend\Db\TableGateway\TableGateway;

class PageCategoryTable {
	protected $tableGateway;
	public function __construct(TableGateway $tableGateway) {
		$this->tableGateway = $tableGateway;
	}
	public function fetchAll() {
		$resultSet = $this->tableGateway->select ();
		return $resultSet;
	}
	public function getPage($id) {
		$id = ( int ) $id;
		$rowset = $this->tableGateway->select ( array (
				'PageCategoryId' => $id
		) );
	
		$row = $rowset->current ();
		if (! $row) {
			throw new \Exception ( "Error Processing Request", 1 );
		}
		return $row;
	}
	public function savePage(PageCategory $pageCategory) {
		$data = array (
				'PageCategoryId' => $pageCategory->PageCategoryId,
				'PageCategoryName' => $pageCategory->PageCategoryName
		);
	
		$id = ( int ) $pageCategory->PageCategoryId;
		if ($id) {
			$this->tableGateway->insert ( $data );
		} else {
			if ($this->getPageId ()) {
				$this->tableGateway->update ( $data, array (
						'PageCategoryId' => $id
				) );
			} else {
				throw new \Exception ( 'Form id does not exist' );
			}
		}
	}
	
	/**
	 * Delete page
	 */
	public function deletePage($pageCategoryId) {
		$this->tableGateway->delete ( $pageCategoryId );
	}
}

?>