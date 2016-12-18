<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comentario
 *
 * @ORM\Table(name="comentario")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\ComentarioRepository")
 */
class Comentario
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
     * @ORM\Column(name="contenido", type="text", nullable=true)
     */
    private $contenido;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */
    private $fechaCreacion;

    /**
    * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="comentarios")
    * @ORM\JoinColumn(name="Usuarioo_id", referencedColumnName="id")
    */
    private $Usuarioo;

        /**
    * @ORM\ManyToOne(targetEntity="TemaForo", inversedBy="comentarios")
    * @ORM\JoinColumn(name="Temaforo_id", referencedColumnName="id")
    */
    private $Temaforo;

        /**
    * @ORM\ManyToOne(targetEntity="Receta", inversedBy="comentarios")
    * @ORM\JoinColumn(name="Receta_id", referencedColumnName="id")
    */
    private $Receta;


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
     * Set contenido
     *
     * @param string $contenido
     *
     * @return Comentario
     */
    public function setContenido($contenido)
    {
        $this->contenido = $contenido;

        return $this;
    }

    /**
     * Get contenido
     *
     * @return string
     */
    public function getContenido()
    {
        return $this->contenido;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Comentario
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
     * Set usuarioo
     *
     * @param \App\AdminBundle\Entity\Usuario $usuarioo
     *
     * @return Comentario
     */
    public function setUsuarioo(\App\AdminBundle\Entity\Usuario $usuarioo = null)
    {
        $this->Usuarioo = $usuarioo;

        return $this;
    }

    /**
     * Get usuarioo
     *
     * @return \App\AdminBundle\Entity\Usuario
     */
    public function getUsuarioo()
    {
        return $this->Usuarioo;
    }

    /**
     * Set temaforo
     *
     * @param \App\AdminBundle\Entity\TemaForo $temaforo
     *
     * @return Comentario
     */
    public function setTemaforo(\App\AdminBundle\Entity\TemaForo $temaforo = null)
    {
        $this->Temaforo = $temaforo;

        return $this;
    }

    /**
     * Get temaforo
     *
     * @return \App\AdminBundle\Entity\TemaForo
     */
    public function getTemaforo()
    {
        return $this->Temaforo;
    }

    /**
     * Set receta
     *
     * @param \App\AdminBundle\Entity\Receta $receta
     *
     * @return Comentario
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
}
