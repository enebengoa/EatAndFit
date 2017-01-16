<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemaForo
 *
 * @ORM\Table(name="tema_foro")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\TemaForoRepository")
 */
class TemaForo
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

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */

    private $fechaCreacion;


    

        /**
    * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="temasforo")
    * @ORM\JoinColumn(name="Usuariooo_id", referencedColumnName="id")
    */
    private $Usuariooo;


      /**
    * @ORM\OneToMany(targetEntity="Comentario", mappedBy="Temaforo")
    */

    private $comentarios;

    
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comentarios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return TemaForo
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
     * @return TemaForo
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return TemaForo
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
     * Set usuariooo
     *
     * @param \App\AdminBundle\Entity\Usuario $usuariooo
     *
     * @return TemaForo
     */
    public function setUsuariooo(\App\AdminBundle\Entity\Usuario $usuariooo = null)
    {
        $this->Usuariooo = $usuariooo;

        return $this;
    }

    /**
     * Get usuariooo
     *
     * @return \App\AdminBundle\Entity\Usuario
     */
    public function getUsuariooo()
    {
        return $this->Usuariooo;
    }

    /**
     * Add comentario
     *
     * @param \App\AdminBundle\Entity\Comentario $comentario
     *
     * @return TemaForo
     */
    public function addComentario(\App\AdminBundle\Entity\Comentario $comentario)
    {
        $this->comentarios[] = $comentario;

        return $this;
    }

    /**
     * Remove comentario
     *
     * @param \App\AdminBundle\Entity\Comentario $comentario
     */
    public function removeComentario(\App\AdminBundle\Entity\Comentario $comentario)
    {
        $this->comentarios->removeElement($comentario);
    }

    /**
     * Get comentarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComentarios()
    {
        return $this->comentarios;
    }
}
