<?php
namespace Vts\Core\View\Helper;
use Zend\View\Helper\Partial;
use Zend\ServiceManager\ServiceLocatorAwareInterface;

class Block extends Partial implements ServiceLocatorAwareInterface
{	
	use \Zend\ServiceManager\ServiceLocatorAwareTrait;
	
    public function __invoke($block, $template = null, $params = null)
    {
    	$tmp = explode(":", $block);
    	if(count($tmp) < 2){
    		throw new \Exception("Params block invalid ".$block);
    	}
    	
    	//check block name
    	if(!class_exists($tmp[0])){
    		throw new \Exception("Not exist block name ".$tmp[0]);
    	}
    	
    	$blockObject = $this->getServiceLocator()->getServiceLocator()->get($tmp[0]);
    	
    	//$blockObject = new $tmp[0]($params);
    	
    	if(!method_exists($blockObject, $tmp[1])){
    		throw new \Exception("Not exist method name ".$tmp[1]);
    	}
        $blockObject->setParams($params);
    	$result = $blockObject->{$tmp[1]}();
    	if(is_array($result)){
    		return parent::__invoke($template, $result);
    	}else{
    		throw new \Exception("Result ". $block." not return array.");
    	}
    }
}