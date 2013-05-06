<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 5/5/13
 * Time: 5:09 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="PageCategorys")
 */
class PageCategory
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="PageCategoryId")
     */
    protected $pageCategoryId;

    /**
     * @ORM\Column(type="string", name="PageCategoryName")
     */
    protected $pageCategoryName;

    public function setPageCategoryId($pageCategoryId)
    {
        $this->pageCategoryId = $pageCategoryId;
    }

    public function getPageCategoryId()
    {
        return $this->pageCategoryId;
    }

    public function setPageCategoryName($pageCategoryName)
    {
        $this->pageCategoryName = $pageCategoryName;
    }

    public function getPageCategoryName()
    {
        return $this->pageCategoryName;
    }


}