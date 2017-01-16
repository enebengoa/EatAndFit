<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Tecnica
 *
 * @ORM\Table(name="tecnica")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\TecnicaRepository")
 * @UniqueEntity("nombre", message="El nombre insertado ya existe")
 */
class Tecnica
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */
    private $fechaCreacion;

    /**
     * @var string
     *
     * @ORM\Column(name="vid", type="text", nullable=true)
     */
    private $vid;

     /**
     * @ORM\ManyToMany(targetEntity="Utensilio", inversedBy="tecnicas")
     * @ORM\JoinTable(name="tecnicas_utensilios")
     */
    private $utensilios;
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->utensilios = new \Doctrine\Common\Collections\ArrayCollection();
        $this->puntuaciones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Tecnica
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
     * @return Tecnica
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
     * @return Tecnica
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
     * Set vid
     *
     * @param string $vid
     *
     * @return Tecnica
     */
    public function setVid($vid)
    {
        $this->vid = $vid;

        return $this;
    }

    /**
     * Get vid
     *
     * @return string
     */
    public function getVid()
    {
        return $this->vid;
    }

    /**
     * Add utensilio
     *
     * @param \App\AdminBundle\Entity\Utensilio $utensilio
     *
     * @return Tecnica
     */
    public function addUtensilio(\App\AdminBundle\Entity\Utensilio $utensilio)
    {
        $this->utensilios[] = $utensilio;

        return $this;
    }

    /**
     * Remove utensilio
     *
     * @param \App\AdminBundle\Entity\Utensilio $utensilio
     */
    public function removeUtensilio(\App\AdminBundle\Entity\Utensilio $utensilio)
    {
        $this->utensilios->removeElement($utensilio);
    }

    /**
     * Get utensilios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtensilios()
    {
        return $this->utensilios;
    }

    /**
     * Add puntuacione
     *
     * @param \App\AdminBundle\Entity\Puntuacion $puntuacione
     *
     * @return Tecnica
     */
    public function addPuntuacione(\App\AdminBundle\Entity\Puntuacion $puntuacione)
    {
        $this->puntuaciones[] = $puntuacione;

        return $this;
    }

    /**
     * Remove puntuacione
     *
     * @param \App\AdminBundle\Entity\Puntuacion $puntuacione
     */
    public function removePuntuacione(\App\AdminBundle\Entity\Puntuacion $puntuacione)
    {
        $this->puntuaciones->removeElement($puntuacione);
    }

    /**
     * Get puntuaciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPuntuaciones()
    {
        return $this->puntuaciones;
    }

    /**
     * Add comentario
     *
     * @param \App\AdminBundle\Entity\Comentario $comentario
     *
     * @return Tecnica
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
