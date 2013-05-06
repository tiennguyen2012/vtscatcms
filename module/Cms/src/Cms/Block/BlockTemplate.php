<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 5/5/13
 * Time: 9:57 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Block;
use Vts\Core\Block\AbstractBlock;
use Zend\ServiceManager\ServiceManager;

class BlockTemplate extends AbstractBlock    {

    public function __construct(ServiceManager $serviceManager){
        $this->serviceManager = $serviceManager;
    }

    public function menu(){
        $repository = $this->getEntityManager()->getRepository('Cms\Entity\Menu');
        $menus      = $repository->findAll();

        return array("menus" => $menus);
    }
}