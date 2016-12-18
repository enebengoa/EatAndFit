<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puntuacion
 *
 * @ORM\Table(name="puntuacion")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\PuntuacionRepository")
 */
class Puntuacion
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
     * @ORM\Column(name="puntuacion", type="integer")
     */
    private $puntuacion;

        /**
    * @ORM\ManyToOne(targetEntity="Receta", inversedBy="puntuaciones")
    * @ORM\JoinColumn(name="Receta_id", referencedColumnName="id")
    */
    private $Receta;

            /**
    * @ORM\ManyToOne(targetEntity="Usuario", inversedBy="puntuaciones")
    * @ORM\JoinColumn(name="Usuario_id", referencedColumnName="id")
    */
    private $Usuario;

    

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
     * Set puntuacion
     *
     * @param integer $puntuacion
     *
     * @return Puntuacion
     */
    public function setPuntuacion($puntuacion)
    {
        $this->puntuacion = $puntuacion;

        return $this;
    }

    /**
     * Get puntuacion
     *
     * @return integer
     */
    public function getPuntuacion()
    {
        return $this->puntuacion;
    }

    /**
     * Set receta
     *
     * @param \App\AdminBundle\Entity\Receta $receta
     *
     * @return Puntuacion
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
     * Set usuario
     *
     * @param \App\AdminBundle\Entity\Usuario $usuario
     *
     * @return Puntuacion
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
}
