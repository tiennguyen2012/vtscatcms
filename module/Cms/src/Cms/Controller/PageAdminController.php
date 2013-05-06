<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 4/10/13
 * Time: 9:49 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Controller;

use Vts\Core\Mvc\Controller\AdminActionController;
use Zend\View\Model\ViewModel;

class PageAdminController extends AdminActionController {

    public function __construct(){
        parent::__construct();
        $this->getEvent()->getViewModel()->setTemplate('layout/admin');
    }

	public function indexAction(){
		return new ViewModel($this->getViewModelParams());
	}
	
	public function listAction(){

		return new ViewModel($this->getViewModelParams());
	}
}