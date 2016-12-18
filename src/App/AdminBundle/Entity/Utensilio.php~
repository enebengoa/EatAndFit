<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Utensilio
 *
 * @ORM\Table(name="utensilio")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\UtensilioRepository")
 */
class Utensilio
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
     * @ORM\Column(name="descripcion", type="text", nullable=true)
     */
    private $descripcion;

        /**
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

     /**
     * @ORM\Column(type="string")
     * @Assert\File(
     * maxSize="6000000",
     * mimeTypes = {"image/png","image/jpeg", "image/gif", "image/png", "image/tiff","image/jpg"},
     * mimeTypesMessage = "Por favor introduzca una archivo de tipo imagen"
     *)
     */
    private $imagen;

    // ...
    /**
     * @ORM\ManyToMany(targetEntity="Tecnica", mappedBy="utensilios")
     */
    private $tecnicas;

    // ...
    /**
     * @ORM\ManyToMany(targetEntity="Receta", mappedBy="utensilios")
     */
    private $recetass;
  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tecnicas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->recetass = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Utensilio
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
     * @return Utensilio
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
     * Add tecnica
     *
     * @param \App\AdminBundle\Entity\Tecnica $tecnica
     *
     * @return Utensilio
     */
    public function addTecnica(\App\AdminBundle\Entity\Tecnica $tecnica)
    {
        $this->tecnicas[] = $tecnica;

        return $this;
    }

    /**
     * Remove tecnica
     *
     * @param \App\AdminBundle\Entity\Tecnica $tecnica
     */
    public function removeTecnica(\App\AdminBundle\Entity\Tecnica $tecnica)
    {
        $this->tecnicas->removeElement($tecnica);
    }

    /**
     * Get tecnicas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTecnicas()
    {
        return $this->tecnicas;
    }

    /**
     * Add recetass
     *
     * @param \App\AdminBundle\Entity\Receta $recetass
     *
     * @return Utensilio
     */
    public function addRecetass(\App\AdminBundle\Entity\Receta $recetass)
    {
        $this->recetass[] = $recetass;

        return $this;
    }

    /**
     * Remove recetass
     *
     * @param \App\AdminBundle\Entity\Receta $recetass
     */
    public function removeRecetass(\App\AdminBundle\Entity\Receta $recetass)
    {
        $this->recetass->removeElement($recetass);
    }

    /**
     * Get recetass
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRecetass()
    {
        return $this->recetass;
    }

    /**
     * Add puntuacione
     *
     * @param \App\AdminBundle\Entity\Puntuacion $puntuacione
     *
     * @return Utensilio
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
     * @return Utensilio
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

    /**
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Utensilio
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }

    /**
     * Get imagen
     *
     * @return string
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set rating
     *
     * @param integer $rating
     *
     * @return Utensilio
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return integer
     */
    public function getRating()
    {
        return $this->rating;
    }
}
