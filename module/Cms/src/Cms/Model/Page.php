<?php
/**
* Model for page 
*/
namespace Cms\Model;
class Page {

	public $PageId;
	public $PageName;
	public $PageTitle;
	public $PageContent;
	public $IsActive;

	public function exchangeArray($data){
		$this->PageId = (isset($data['PageId']) ? $data['PageId'] : null);
		$this->PageName = (isset($data['PageName']) ? $data['PageName'] : null);
		$this->PageTitle = (isset($data['PageTitle']) ? $data['PageTitle'] : null);
		$this->PageContent = (isset($data['PageContent']) ? $data['PageContent'] : null);
		$this->IsActive = (isset($data['IsActive']) ? $data['IsActive'] : null);
		$this->PageCategoryId = (isset($data['PageCategoryId']) ? $data['PageCategoryId'] : null);
	}
}