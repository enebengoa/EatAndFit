<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Ingrediente
 *
 * @ORM\Table(name="ingrediente")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\IngredienteRepository")
 * @UniqueEntity("nombre", message="El nombre insertado ya existe")
 */
class Ingrediente
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    public function __toString()
        {
            return $this->getNombre();
        }

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;

           /**
     * @var string
     *
     * @ORM\Column(name="tipoIngrediente", type="string")
     */
    private $tipoIngrediente;

        /**
     * @var string
     *
     * @ORM\Column(name="unidadMedida", type="string")
     */
    private $unidadMedida;

    /**
     * @var int
     *
     * @ORM\Column(name="caloriasUnidad", type="integer")
     */
    private $caloriasUnidad;

           /**
     * @var bool
     *
     * @ORM\Column(name="celiaco", type="boolean")
     */
    private $celiaco;


    


     /**
    * @ORM\OneToMany(targetEntity="OrdenCompra", mappedBy="Ingrediente")
    */

    private $ordenescompras;


    /**
    * @ORM\OneToMany(targetEntity="CantidadUtilizada", mappedBy="Ingrediente")
    */

    private $cantidadesUtilizadas;

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Ingrediente
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
     * @return Ingrediente
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
     * Set peso
     *
     * @param integer $peso
     *
     * @return Ingrediente
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return int
     */
    public function getPeso()
    {
        return $this->peso;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ordenescompras = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ordenescompra
     *
     * @param \App\AdminBundle\Entity\OrdenCompra $ordenescompra
     *
     * @return Ingrediente
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
     * Add cantidadesUtilizada
     *
     * @param \App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada
     *
     * @return Ingrediente
     */
    public function addCantidadesUtilizada(\App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada)
    {
        $this->cantidadesUtilizadas[] = $cantidadesUtilizada;

        return $this;
    }

    /**
     * Remove cantidadesUtilizada
     *
     * @param \App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada
     */
    public function removeCantidadesUtilizada(\App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada)
    {
        $this->cantidadesUtilizadas->removeElement($cantidadesUtilizada);
    }

    /**
     * Get cantidadesUtilizadas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCantidadesUtilizadas()
    {
        return $this->cantidadesUtilizadas;
    }

    /**
     * Set unidadMedida
     *
     * @param integer $unidadMedida
     *
     * @return Ingrediente
     */
    public function setUnidadMedida($unidadMedida)
    {
        $this->unidadMedida = $unidadMedida;

        return $this;
    }

    /**
     * Get unidadMedida
     *
     * @return integer
     */
    public function getUnidadMedida()
    {
        return $this->unidadMedida;
    }

    /**
     * Set caloriasUnidad
     *
     * @param integer $caloriasUnidad
     *
     * @return Ingrediente
     */
    public function setCaloriasUnidad($caloriasUnidad)
    {
        $this->caloriasUnidad = $caloriasUnidad;

        return $this;
    }

    /**
     * Get caloriasUnidad
     *
     * @return integer
     */
    public function getCaloriasUnidad()
    {
        return $this->caloriasUnidad;
    }

    /**
     * Set celiaco
     *
     * @param boolean $celiaco
     *
     * @return Ingrediente
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
     * Set tipoIngrediente
     *
     * @param integer $tipoIngrediente
     *
     * @return Ingrediente
     */
    public function setTipoIngrediente($tipoIngrediente)
    {
        $this->tipoIngrediente = $tipoIngrediente;

        return $this;
    }

    /**
     * Get tipoIngrediente
     *
     * @return integer
     */
    public function getTipoIngrediente()
    {
        return $this->tipoIngrediente;
    }
}
