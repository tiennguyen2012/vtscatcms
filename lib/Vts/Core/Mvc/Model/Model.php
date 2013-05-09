<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 5/8/13
 * Time: 10:56 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Vts\Core\Mvc\Model;

use Zend\ServiceManager\ServiceManager;

class Model {

    public $serviceManager;

    public function __construct(ServiceManager $serviceManager){
        $this->serviceManager = $serviceManager;
    }
}