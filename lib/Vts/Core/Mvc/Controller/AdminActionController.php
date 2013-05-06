<?php

namespace Vts\Core\Mvc\Controller;
use Zend\Mvc\Controller\AbstractActionController;

class AdminActionController extends AbstractActionController {
	
	public function getViewModelParams(){
		return array('params' => $this->getEvent()->getRouteMatch()->getParams());
	}
}

?>