<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * menus_listas
 *
 * @ORM\Table(name="menus_listas")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\menus_listasRepository")
 */
class menus_listas
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
     * @var int
     *
     * @ORM\Column(name="numeroComensales", type="integer")
     */
    private $numeroComensales;

    /**
    * @ORM\ManyToOne(targetEntity="Menu", inversedBy="menus_listas")
    * @ORM\JoinColumn(name="Menu_id", referencedColumnName="id")
    */
    private $Menu;

      /**
    * @ORM\ManyToOne(targetEntity="Lista", inversedBy="menus_listas")
    * @ORM\JoinColumn(name="Lista_id", referencedColumnName="id")
    */
    private $Lista;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numeroComensales
     *
     * @param integer $numeroComensales
     *
     * @return menus_listas
     */
    public function setNumeroComensales($numeroComensales)
    {
        $this->numeroComensales = $numeroComensales;

        return $this;
    }

    /**
     * Get numeroComensales
     *
     * @return int
     */
    public function getNumeroComensales()
    {
        return $this->numeroComensales;
    }

    /**
     * Set menu
     *
     * @param \App\AdminBundle\Entity\Menu $menu
     *
     * @return menus_listas
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
     * Set lista
     *
     * @param \App\AdminBundle\Entity\Lista $lista
     *
     * @return menus_listas
     */
    public function setLista(\App\AdminBundle\Entity\Lista $lista = null)
    {
        $this->Lista = $lista;

        return $this;
    }

    /**
     * Get lista
     *
     * @return \App\AdminBundle\Entity\Lista
     */
    public function getLista()
    {
        return $this->Lista;
    }
}
