<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * HoraIngesta
 *
 * @ORM\Table(name="hora_ingesta")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\HoraIngestaRepository")
 * @UniqueEntity("nombre", message="El nombre insertado ya existe")
 */
class HoraIngesta
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

        // ...
    /**
     * @ORM\ManyToMany(targetEntity="Receta", mappedBy="horasIngesta")
     */
    private $recetas;

    /**
    * @ORM\OneToMany(targetEntity="SubMenu", mappedBy="HoraIngesta",cascade={"all"})
    */

    private $subMenus;

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
     * @return HoraIngesta
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
     * @return HoraIngesta
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

    /**
     * Add subMenu
     *
     * @param \App\AdminBundle\Entity\SubMenu $subMenu
     *
     * @return HoraIngesta
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
}
