<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 5/5/13
 * Time: 5:04 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Pages")
 */
class Page
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="PageId")
     */
    protected $pageId;

    /**
     * @ORM\Column(type="string", name="PageTitle")
     */
    protected $pageTitle;

    /**
     * @ORM\Column(type="string", name="PageName")
     */
    protected $pageName;

    /**
     * @ORM\Column(type="string", name="PageContent")
     */
    protected $pageContent;

    /**
     * @ORM\Column(type="boolean", name="IsActive")
     */
    protected $isActive = true;

    /**
     * @ORM\Column(type="boolean", name="IsDeleted")
     */
    protected $isDeleted;

    /**
     * @ORM\Column(type="datetime", name="CreatedDate")
     */
    protected $createdDate;

    /**
     * @ORM\Column(type="datetime", name="UpdatedDate")
     */
    protected $updatedDate;

    public function setPageId($pageId)
    {
        $this->pageId = $pageId;
    }

    public function getPageId()
    {
        return $this->pageId;
    }



    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setIsDeleted($isDeleted)
    {
        $this->isDeleted = $isDeleted;
    }

    public function getIsDeleted()
    {
        return $this->isDeleted;
    }

    public function setPageContent($pageContent)
    {
        $this->pageContent = $pageContent;
    }

    public function getPageContent()
    {
        return $this->pageContent;
    }

    public function setPageName($pageName)
    {
        $this->pageName = $pageName;
    }

    public function getPageName()
    {
        return $this->pageName;
    }

    public function setPageTitle($pageTitle)
    {
        $this->pageTitle = $pageTitle;
    }

    public function getPageTitle()
    {
        return $this->pageTitle;
    }

    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
    }

    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;
    }

    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }


}
