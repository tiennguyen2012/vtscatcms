<?php
namespace Cms\Model;

class PageCategory {
	public $PageCategoryId;
	public $PageCategoryName;
	
	public function exchangeArray($data){
		$this->PageCategoryId = (isset($data['PageCategoryId']) ? $data['PageCategoryId'] : null);
		$this->PageCategoryName = (isset($data['PageCategoryName']) ? $data['PageCategoryName'] : null);		
	}
}

?>