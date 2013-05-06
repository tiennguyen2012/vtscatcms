<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Tien
 * Date: 5/5/13
 * Time: 8:57 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Cms\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Menus")
 */
class Menu
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", name="MenuId")
     */
    protected $menuId;

    /**
     * @ORM\Column(type="string", name="MenuName")
     */
    protected $menuName;

    /**
     * @ORM\Column(type="string", name="MenuTitle")
     */
    protected $menuTitle;

    /**
     * @ORM\Column(type="integer", name="IsActive")
     */
    protected $isActive = 1;

    /**
     * @ORM\Column(type="string", name="Link")
     */
    protected $link;

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setMenuId($menuId)
    {
        $this->menuId = $menuId;
    }

    public function getMenuId()
    {
        return $this->menuId;
    }

    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }

    public function getMenuName()
    {
        return $this->menuName;
    }

    public function setMenuTitle($menuTitle)
    {
        $this->menuTitle = $menuTitle;
    }

    public function getMenuTitle()
    {
        return $this->menuTitle;
    }


}
