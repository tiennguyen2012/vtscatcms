<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 5/6/13
 * Time: 11:16 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Block;
use Vts\Core\Block\AbstractBlock;
use Zend\ServiceManager\ServiceManager;

class BlockPageAdmin extends AbstractBlock
{
    public function __construct(ServiceManager $serviceManager){
        $this->serviceManager = $serviceManager;
    }

    public function pages(){
        $repository = $this->getEntityManager()->getRepository('Cms\Entity\Page');
        $pages      = $repository->findAll();
        return array('pages' => $pages);
    }
}