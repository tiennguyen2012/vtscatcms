<?php

namespace Vts\Core\Mvc\Controller;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\ServiceManager\ServiceManager;

class AdminActionController extends AbstractActionController
{
    /**
     * On dispatch
     * @param \Zend\Mvc\MvcEvent $e
     * @return mixed|void
     */
    public function onDispatch(\Zend\Mvc\MvcEvent $e) {
        $e->getTarget()->layout('layout/admin');
        parent::onDispatch($e);
    }

    /**
     * @var Zend\ServiceManager\ServiceManager
     */
    protected $entityManager;

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
     * @return Zend\ServiceManager\ServiceManager
     */
    protected function getEntityManager()
    {
        if (null === $this->entityManager) {
            $this->setEntityManager($this->getServiceLocator()->get('Doctrine\ORM\EntityManager'));
        }
        return $this->entityManager;
    }

    public function getViewModelParams()
    {
        return array('params' => $this->getEvent()->getRouteMatch()->getParams());
    }
}

?>