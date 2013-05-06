<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Vts\Core\Mvc\Controller\DefaultActionController;
use Zend\View\Model\ViewModel;

class IndexController extends DefaultActionController
{
    public function indexAction()
    {
        $repository = $this->getEntityManager()->getRepository('Cms\Entity\Page');
        $pages      = $repository->findAll();

        return new ViewModel();
    }
}
