<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdenCompra
 *
 * @ORM\Table(name="orden_compra")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\OrdenCompraRepository")
 */
class OrdenCompra
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
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad=0;

    /**
     * @var bool
     *
     * @ORM\Column(name="comprado", type="boolean")
     */
    private $comprado=false;

    /**
    * @ORM\ManyToOne(targetEntity="Lista", inversedBy="ordenescompras")
    * @ORM\JoinColumn(name="Lista_id", referencedColumnName="id")
    */
    private $Lista;

    /**
    * @ORM\ManyToOne(targetEntity="Ingrediente", inversedBy="ordenescompras")
    * @ORM\JoinColumn(name="Ingrediente_id", referencedColumnName="id")
    */
    private $Ingrediente;
 
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
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return OrdenCompra
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set comprado
     *
     * @param boolean $comprado
     *
     * @return OrdenCompra
     */
    public function setComprado($comprado)
    {
        $this->comprado = $comprado;

        return $this;
    }

    /**
     * Get comprado
     *
     * @return bool
     */
    public function getComprado()
    {
        return $this->comprado;
    }

    /**
     * Set lista
     *
     * @param \App\AdminBundle\Entity\Lista $lista
     *
     * @return OrdenCompra
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

    /**
     * Set ingrediente
     *
     * @param \App\AdminBundle\Entity\Ingrediente $ingrediente
     *
     * @return OrdenCompra
     */
    public function setIngrediente(\App\AdminBundle\Entity\Ingrediente $ingrediente = null)
    {
        $this->Ingrediente = $ingrediente;

        return $this;
    }

    /**
     * Get ingrediente
     *
     * @return \App\AdminBundle\Entity\Ingrediente
     */
    public function getIngrediente()
    {
        return $this->Ingrediente;
    }
}
