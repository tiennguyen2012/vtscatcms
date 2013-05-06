<?php

/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 4/10/13
 * Time: 9:37 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Vts\Core\Block;

class AbstractBlock {

	public $params;
    public $serviceManager;

//	public function __construct($params) {
//		$this->params = $this->convertParams ( $params );
//	}

    public function __construct(ServiceManager $serviceManager){
        $this->serviceManager = $serviceManager;
    }

    public function setParams($params){
        $this->params = $params;
    }

    /**
     * Sets the EntityManager
     *
     * @param EntityManager $em
     * @access protected
     * @return PostController
     */
    protected function setEntityManager($em)
    {
        $this->entityManager = $em;
        return $this;
    }

    /**
     * Returns the EntityManager
     *
     * Fetches the EntityManager from ServiceLocator if it has not been initiated
     * and then returns it
     *
     * @access protected
     * @return EntityManager
     */
    protected function getEntityManager()
    {
        if (null === $this->entityManager) {
            $this->setEntityManager($this->serviceManager->get('Doctrine\ORM\EntityManager'));
        }
        return $this->entityManager;
    }

    /**
     * Convert params array to object
     *
     * @param array|object $params
     * @return Ambigous <\stdClass, unknown>
     */
    public function convertParams($params) {
        $object = new \stdClass ();
        if (is_array ( $params )) {
            foreach ( $params as $key => $value ) {
                $object->{$key} = $value;
            }
        } else if (is_object ( $params )) {
            $object = $params;
        }

        return $object;
    }
}