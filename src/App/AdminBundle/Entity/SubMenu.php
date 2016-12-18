<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SubMenu
 *
 * @ORM\Table(name="sub_menu")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\SubMenuRepository")
 */
class SubMenu
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

     /**
    * @ORM\ManyToOne(targetEntity="Receta", inversedBy="subMenus")
    * @ORM\JoinColumn(name="Receta_id", referencedColumnName="id")
    */
    private $receta;

     /**
    * @ORM\ManyToOne(targetEntity="Menu", inversedBy="subMenus")
    * @ORM\JoinColumn(name="Menu_id", referencedColumnName="id")
    */
    private $Menu;

     /**
    * @ORM\ManyToOne(targetEntity="HoraIngesta", inversedBy="subMenus")
    * @ORM\JoinColumn(name="HoraIngesta_id", referencedColumnName="id")
    */
    private $HoraIngesta;
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->recetas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
   
    /**
     * Set menu
     *
     * @param \App\AdminBundle\Entity\Menu $menu
     *
     * @return SubMenu
     */
    public function setMenu(\App\AdminBundle\Entity\Menu $menu = null)
    {
        $this->Menu = $menu;

        return $this;
    }

    /**
     * Get menu
     *
     * @return \App\AdminBundle\Entity\Menu
     */
    public function getMenu()
    {
        return $this->Menu;
    }

    /**
     * Set horaIngesta
     *
     * @param \App\AdminBundle\Entity\HoraIngesta $horaIngesta
     *
     * @return SubMenu
     */
    public function setHoraIngesta(\App\AdminBundle\Entity\HoraIngesta $horaIngesta = null)
    {
        $this->HoraIngesta = $horaIngesta;

        return $this;
    }

    /**
     * Get horaIngesta
     *
     * @return \App\AdminBundle\Entity\HoraIngesta
     */
    public function getHoraIngesta()
    {
        return $this->HoraIngesta;
    }

    /**
     * Set receta
     *
     * @param \App\AdminBundle\Entity\Receta $receta
     *
     * @return SubMenu
     */
    public function setReceta(\App\AdminBundle\Entity\Receta $receta = null)
    {
        $this->receta = $receta;

        return $this;
    }

    /**
     * Get receta
     *
     * @return \App\AdminBundle\Entity\Receta
     */
    public function getReceta()
    {
        return $this->receta;
    }
}
