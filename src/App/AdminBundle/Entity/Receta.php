<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Receta
 *
 * @ORM\Table(name="receta")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\RecetaRepository")
 */
class Receta
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
     * @var \DateTime
     *
     * @ORM\Column(name="fechaCreacion", type="date")
     */

    private $fechaCreacion;
    
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
     * @ORM\Column(name="dificultad", type="integer", nullable=false)
     */
    private $dificultad;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tiempoPreparacion", type="time")
     */
    private $tiempoPreparacion;

        /**
     * @var int
     *
     * @ORM\Column(name="calorias", type="integer")
     */
    private $calorias;

        /**
     * @var int
     *
     * @Assert\Range(
     *      min = 1,
     *     minMessage = "Tiene que ser para al menos 1 comensal"
     *  
     * )
     * @ORM\Column(name="numeroComensales", type="integer")
     */
    private $numeroComensales;

     /**
     * @var int
     *
     * @ORM\Column(name="mediaPuntuacion", type="integer")
     */
    private $mediaPuntuacion;

       /**
     * @var bool
     *
     * @ORM\Column(name="celiaco", type="boolean")
     */
    private $celiaco;

    /**
     * @ORM\Column(type="string")
     * @Assert\File(
     * maxSize="6000000",
     * mimeTypes = {"image/png","image/jpeg", "image/gif", "image/png", "image/tiff","image/jpg"},
     * mimeTypesMessage = "Por favor introduzca una archivo de tipo imagen"
     *)
     */
    private $imagen;

    /**
    * @ORM\ManyToOne(targetEntity="TipoReceta", inversedBy="recetas")
    * @ORM\JoinColumn(name="TipoReceta_id", referencedColumnName="id")
    */
    private $TipoReceta;

    /**
    * @ORM\OneToMany(targetEntity="CantidadUtilizada", mappedBy="Receta",cascade={"all"})
    */

    private $cantidadesUtilizadas;
    
    // ...

    /**
    * @ORM\OneToMany(targetEntity="SubMenu", mappedBy="receta",cascade={"all"})
    */

    private $subMenus;

        /**
     * @ORM\ManyToMany(targetEntity="HoraIngesta", inversedBy="recetas")
     * @ORM\JoinTable(name="recetas_horasIngesta")
     */
    private $horasIngesta;

    /**
     * @ORM\ManyToMany(targetEntity="Utensilio", inversedBy="recetass")
     * @ORM\JoinTable(name="recetass_utensilios")
     */
    private $utensilios;

      /**
    * @ORM\OneToMany(targetEntity="Comentario", mappedBy="Receta")
    */

    private $comentarios;

      /**
    * @ORM\OneToMany(targetEntity="Puntuacion", mappedBy="Receta")
    */

    private $puntuaciones;

 
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->cantidadesUtilizadas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->menus = new \Doctrine\Common\Collections\ArrayCollection();
        $this->horasIngesta = new \Doctrine\Common\Collections\ArrayCollection();
        $this->utensilios = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return Receta
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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Receta
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
     * @return Receta
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
     * Set dificultad
     *
     * @param integer $dificultad
     *
     * @return Receta
     */
    public function setDificultad($dificultad)
    {
        $this->dificultad = $dificultad;

        return $this;
    }

    /**
     * Get dificultad
     *
     * @return integer
     */
    public function getDificultad()
    {
        return $this->dificultad;
    }

    /**
     * Set tiempoPreparacion
     *
     * @param \DateTime $tiempoPreparacion
     *
     * @return Receta
     */
    public function setTiempoPreparacion($tiempoPreparacion)
    {
        $this->tiempoPreparacion = $tiempoPreparacion;

        return $this;
    }

    /**
     * Get tiempoPreparacion
     *
     * @return \DateTime
     */
    public function getTiempoPreparacion()
    {
        return $this->tiempoPreparacion;
    }

    /**
     * Set calorias
     *
     * @param integer $calorias
     *
     * @return Receta
     */
    public function setCalorias($calorias)
    {
        $this->calorias = $calorias;

        return $this;
    }

    /**
     * Get calorias
     *
     * @return integer
     */
    public function getCalorias()
    {
        return $this->calorias;
    }

    /**
     * Set numeroComensales
     *
     * @param integer $numeroComensales
     *
     * @return Receta
     */
    public function setNumeroComensales($numeroComensales)
    {
        $this->numeroComensales = $numeroComensales;

        return $this;
    }

    /**
     * Get numeroComensales
     *
     * @return integer
     */
    public function getNumeroComensales()
    {
        return $this->numeroComensales;
    }

    /**
     * Set celiaco
     *
     * @param boolean $celiaco
     *
     * @return Receta
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
     * Set tipoReceta
     *
     * @param \App\AdminBundle\Entity\TipoReceta $tipoReceta
     *
     * @return Receta
     */
    public function setTipoReceta(\App\AdminBundle\Entity\TipoReceta $tipoReceta = null)
    {
        $this->TipoReceta = $tipoReceta;

        return $this;
    }

    /**
     * Get tipoReceta
     *
     * @return \App\AdminBundle\Entity\TipoReceta
     */
    public function getTipoReceta()
    {
        return $this->TipoReceta;
    }

    /**
     * Add cantidadesUtilizada
     *
     * @param \App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada
     *
     * @return Receta
     */
    public function addCantidadesUtilizada(\App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada)
    {
        if(!$this->cantidadesUtilizadas->contains($cantidadesUtilizada)){
            $this->cantidadesUtilizadas->add($cantidadesUtilizada);
            $cantidadesUtilizada->setReceta($this);
        }
            
        return $this;
    }

    /**
     * Remove cantidadesUtilizada
     *
     * @param \App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada
     */
    public function removeCantidadesUtilizada(\App\AdminBundle\Entity\CantidadUtilizada $cantidadesUtilizada)
    {
        if(!$this->cantidadesUtilizadas->contains($cantidadesUtilizada)){
            $this->cantidadesUtilizadas->removeElement($cantidadesUtilizada);
        }
        return $this;
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
     * Add horasIngestum
     *
     * @param \App\AdminBundle\Entity\HoraIngesta $horasIngestum
     *
     * @return Receta
     */
    public function addHorasIngestum(\App\AdminBundle\Entity\HoraIngesta $horasIngestum)
    {
        $this->horasIngesta[] = $horasIngestum;

        return $this;
    }

    /**
     * Remove horasIngestum
     *
     * @param \App\AdminBundle\Entity\HoraIngesta $horasIngestum
     */
    public function removeHorasIngestum(\App\AdminBundle\Entity\HoraIngesta $horasIngestum)
    {
        $this->horasIngesta->removeElement($horasIngestum);
    }

    /**
     * Get horasIngesta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHorasIngesta()
    {
        return $this->horasIngesta;
    }

    /**
     * Add utensilio
     *
     * @param \App\AdminBundle\Entity\Utensilio $utensilio
     *
     * @return Receta
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
     * Add comentario
     *
     * @param \App\AdminBundle\Entity\Comentario $comentario
     *
     * @return Receta
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
     * Add subMenu
     *
     * @param \App\AdminBundle\Entity\SubMenu $subMenu
     *
     * @return Receta
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
     * Add puntuacione
     *
     * @param \App\AdminBundle\Entity\Puntuacion $puntuacione
     *
     * @return Receta
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
     * Set imagen
     *
     * @param string $imagen
     *
     * @return Receta
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
     * Set mediaPuntuacion
     *
     * @param integer $mediaPuntuacion
     *
     * @return Receta
     */
    public function setMediaPuntuacion($mediaPuntuacion)
    {
        $this->mediaPuntuacion = $mediaPuntuacion;

        return $this;
    }

    /**
     * Get mediaPuntuacion
     *
     * @return integer
     */
    public function getMediaPuntuacion()
    {
        return $this->mediaPuntuacion;
    }
}
