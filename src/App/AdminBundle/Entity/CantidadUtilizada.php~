<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CantidadUtilizada
 *
 * @ORM\Table(name="cantidad_utilizada")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\CantidadUtilizadaRepository")
 */
class CantidadUtilizada
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
    private $cantidad;

     /**
    * @ORM\ManyToOne(targetEntity="Receta", inversedBy="cantidadesUtilizadas")
    * @ORM\JoinColumn(name="Receta_id", referencedColumnName="id")
    */
    private $Receta;

      /**
    * @ORM\ManyToOne(targetEntity="Ingrediente", inversedBy="cantidadesUtilizadas")
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
     * @return CantidadUtilizada
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
     * Set receta
     *
     * @param \App\AdminBundle\Entity\Receta $receta
     *
     * @return CantidadUtilizada
     */
    public function setReceta(\App\AdminBundle\Entity\Receta $receta = null)
    {
        $this->Receta = $receta;

        return $this;
    }

    /**
     * Get receta
     *
     * @return \App\AdminBundle\Entity\Receta
     */
    public function getReceta()
    {
        return $this->Receta;
    }

    /**
     * Set ingrediente
     *
     * @param \App\AdminBundle\Entity\Ingrediente $ingrediente
     *
     * @return CantidadUtilizada
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
