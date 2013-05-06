<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 5/6/13
 * Time: 10:24 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Block;
use Vts\Core\Block\AbstractBlock;
use Zend\ServiceManager\ServiceManager;

class BlockPage extends AbstractBlock
{
    public function __construct(ServiceManager $serviceManager){
        $this->serviceManager = $serviceManager;
    }

    public function get(){
        /**
         * Validate you need id
         */
        if($this->params){
            if(!isset($this->params['id'])){
                throw new Zend\Exception("Need page id");
            }
        }

        $repository = $this->getEntityManager()->getRepository('Cms\Entity\Page');
        $page      = $repository->find($this->params['id']);
        return array('page' => $page);
    }
}
