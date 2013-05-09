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
use Cms\Entity\Page;

class BlockPageAdmin extends AbstractBlock
{
    protected $pageTable;

    public function __construct(ServiceManager $serviceManager){
        $this->serviceManager = $serviceManager;
        $this->pageTable = new Page();
    }

    public function pages(){
        $pages = $this->pageTable->findAll();
        return array('pages' => $pages);
    }

    /**
     * Params:
     * _ id: ID of page to change status
     * @return array
     * - result: boolean
     */
    public function changeStatus(){

        /**
         * Validate params
         */
        if(!isset($this->params['id'])){
            throw new Zend\Exception("Need params id for change status.");
        }

        /**
         * change status
         * if is active is true, change to value is false. end else.
         */
        $this->getEntityManager()->persist($this->pageTable);
        $page = $this->getEntityManager()->find('Cms\Entity\Page', $this->params['id']);
        if($page){
            $page->setIsActive(!$page->getIsActive());
            $page->flush();
        }

        return array('result' => 1);
    }
}