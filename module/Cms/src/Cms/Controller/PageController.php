<?php
namespace Cms\Controller;

use Vts\Core\Mvc\Controller\DefaultActionController;
use Zend\View\Model\ViewModel;

class PageController extends DefaultActionController
{	
    public function indexAction()
    {

    }

    public function viewAction(){
    	return new ViewModel($this->getViewModelParams());
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
}