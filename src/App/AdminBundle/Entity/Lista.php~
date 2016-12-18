<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lista
 *
 * @ORM\Table(name="lista")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\ListaRepository")
 */
class Lista
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */
    private $fechaCreacion;

    /**
    * @ORM\OneToMany(targetEntity="OrdenCompra", mappedBy="Lista")
    */

    private $ordenescompras;

    /**
    * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="listas")
    * @ORM\JoinColumn(name="Usuario_id", referencedColumnName="id")
    */
    private $Usuario;

        // ...
    /**
     * @ORM\ManyToMany(targetEntity="Menu", mappedBy="listas")
     */
    private $menus;
 
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ordenescompras = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menus = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Lista
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Lista
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
     * Add ordenescompra
     *
     * @param \App\AdminBundle\Entity\OrdenCompra $ordenescompra
     *
     * @return Lista
     */
    public function addOrdenescompra(\App\AdminBundle\Entity\OrdenCompra $ordenescompra)
    {
        $this->ordenescompras[] = $ordenescompra;

        return $this;
    }

    /**
     * Remove ordenescompra
     *
     * @param \App\AdminBundle\Entity\OrdenCompra $ordenescompra
     */
    public function removeOrdenescompra(\App\AdminBundle\Entity\OrdenCompra $ordenescompra)
    {
        $this->ordenescompras->removeElement($ordenescompra);
    }

    /**
     * Get ordenescompras
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrdenescompras()
    {
        return $this->ordenescompras;
    }

    /**
     * Set usuario
     *
     * @param \App\AdminBundle\Entity\Usuario $usuario
     *
     * @return Lista
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

    /**
     * Add menu
     *
     * @param \App\AdminBundle\Entity\Menu $menu
     *
     * @return Lista
     */
    public function addMenu(\App\AdminBundle\Entity\Menu $menu)
    {
        $this->menus[] = $menu;

        return $this;
    }

    /**
     * Remove menu
     *
     * @param \App\AdminBundle\Entity\Menu $menu
     */
    public function removeMenu(\App\AdminBundle\Entity\Menu $menu)
    {
        $this->menus->removeElement($menu);
    }

    /**
     * Get menus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenus()
    {
        return $this->menus;
    }
}
