<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Menu
 *
 * @ORM\Table(name="menu")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\MenuRepository")
 * @UniqueEntity("nombre", message="El nombre insertado ya existe")
 */
class Menu
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    public function __toString()
        {
            return $this->getNombre();
        }

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    /**
     * @var int
     *
     * @ORM\Column(name="caloriasTotales", type="integer", nullable=true)
     */
    private $caloriasTotales;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */
    private $fechaCreacion;

    /**
     * @var bool
     *
     * @ORM\Column(name="publico", type="boolean", nullable=false)
     */
    private $publico;

    /**
     * @var bool
     *
     * @ORM\Column(name="celiaco", type="boolean", nullable=false)
     */
    private $celiaco;

    /**
    * @ORM\OneToMany(targetEntity="SubMenu", mappedBy="Menu",cascade={"all"})
    */

    private $subMenus;

      /**
    * @ORM\OneToMany(targetEntity="menus_listas", mappedBy="Menu",cascade={"all"})
    */

    private $menus_listas;

     /**
    * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="menus")
    * @ORM\JoinColumn(name="Usuario_id", referencedColumnName="id")
    */
    private $Usuario;

    
    
   
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subMenus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menus_listas = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Menu
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Menu
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set caloriasTotales
     *
     * @param integer $caloriasTotales
     *
     * @return Menu
     */
    public function setCaloriasTotales($caloriasTotales)
    {
        $this->caloriasTotales = $caloriasTotales;

        return $this;
    }

    /**
     * Get caloriasTotales
     *
     * @return integer
     */
    public function getCaloriasTotales()
    {
        return $this->caloriasTotales;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Menu
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set publico
     *
     * @param boolean $publico
     *
     * @return Menu
     */
    public function setPublico($publico)
    {
        $this->publico = $publico;

        return $this;
    }

    /**
     * Get publico
     *
     * @return boolean
     */
    public function getPublico()
    {
        return $this->publico;
    }

    /**
     * Set celiaco
     *
     * @param boolean $celiaco
     *
     * @return Menu
     */
    public function setCeliaco($celiaco)
    {
        $this->celiaco = $celiaco;

        return $this;
    }

    /**
     * Get celiaco
     *
     * @return boolean
     */
    public function getCeliaco()
    {
        return $this->celiaco;
    }

    /**
     * Add subMenu
     *
     * @param \App\AdminBundle\Entity\SubMenu $subMenu
     *
     * @return Menu
     */
    public function addSubMenu(\App\AdminBundle\Entity\SubMenu $subMenu)
    {
        $this->subMenus[] = $subMenu;

        return $this;
    }

    /**
     * Remove subMenu
     *
     * @param \App\AdminBundle\Entity\SubMenu $subMenu
     */
    public function removeSubMenu(\App\AdminBundle\Entity\SubMenu $subMenu)
    {
        $this->subMenus->removeElement($subMenu);
    }

    /**
     * Get subMenus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubMenus()
    {
        return $this->subMenus;
    }

    /**
     * Add menusLista
     *
     * @param \App\AdminBundle\Entity\menus_listas $menusLista
     *
     * @return Menu
     */
    public function addMenusLista(\App\AdminBundle\Entity\menus_listas $menusLista)
    {
        $this->menus_listas[] = $menusLista;

        return $this;
    }

    /**
     * Remove menusLista
     *
     * @param \App\AdminBundle\Entity\menus_listas $menusLista
     */
    public function removeMenusLista(\App\AdminBundle\Entity\menus_listas $menusLista)
    {
        $this->menus_listas->removeElement($menusLista);
    }

    /**
     * Get menusListas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenusListas()
    {
        return $this->menus_listas;
    }

    /**
     * Set usuario
     *
     * @param \App\AdminBundle\Entity\Usuario $usuario
     *
     * @return Menu
     */
    public function setUsuario(\App\AdminBundle\Entity\Usuario $usuario = null)
    {
        $this->Usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \App\AdminBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }
}
