<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoReceta
 *
 * @ORM\Table(name="tipo_receta")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\TipoRecetaRepository")
 */
class TipoReceta
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
    * @ORM\OneToMany(targetEntity="Receta", mappedBy="TipoReceta")
    */

    private $recetas;

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
     * @return TipoReceta
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
     * Constructor
     */
    public function __construct()
    {
        $this->recetas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add receta
     *
     * @param \App\AdminBundle\Entity\Receta $receta
     *
     * @return TipoReceta
     */
    public function addReceta(\App\AdminBundle\Entity\Receta $receta)
    {
        $this->recetas[] = $receta;

        return $this;
    }

    /**
     * Remove receta
     *
     * @param \App\AdminBundle\Entity\Receta $receta
     */
    public function removeReceta(\App\AdminBundle\Entity\Receta $receta)
    {
        $this->recetas->removeElement($receta);
    }

    /**
     * Get recetas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecetas()
    {
        return $this->recetas;
    }
}
