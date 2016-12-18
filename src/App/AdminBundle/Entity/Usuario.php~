<?php

namespace App\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="App\AdminBundle\Repository\UsuarioRepository")
 */
class Usuario extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

      /**
    * @ORM\OneToMany(targetEntity="Lista", mappedBy="Usuario")
    */

    private $listas;

        /**
    * @ORM\OneToMany(targetEntity="Menu", mappedBy="Usuario")
    */

    private $menus;

      /**
    * @ORM\OneToMany(targetEntity="Comentario", mappedBy="Usuarioo")
    */

    private $comentarios;

      /**
    * @ORM\OneToMany(targetEntity="TemaForo", mappedBy="Usuariooo")
    */

    private $temasforo;

     /**
    * @ORM\OneToMany(targetEntity="Puntuacion", mappedBy="Usuario")
    */

    private $puntuaciones;

    

    /**
     * Add lista
     *
     * @param \App\AdminBundle\Entity\Lista $lista
     *
     * @return Usuario
     */
    public function addLista(\App\AdminBundle\Entity\Lista $lista)
    {
        $this->listas[] = $lista;

        return $this;
    }

    /**
     * Remove lista
     *
     * @param \App\AdminBundle\Entity\Lista $lista
     */
    public function removeLista(\App\AdminBundle\Entity\Lista $lista)
    {
        $this->listas->removeElement($lista);
    }

    /**
     * Get listas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getListas()
    {
        return $this->listas;
    }

    /**
     * Add menu
     *
     * @param \App\AdminBundle\Entity\Menu $menu
     *
     * @return Usuario
     */
    public function addMenu(\App\AdminBundle\Entity\Menu $menu)
    {
        $this->menus[] = $menu;

        return $this;
    }

    /**
     * Remove menu
     *
     * @param \App\AdminBundle\Entity\Menu $menu
     */
    public function removeMenu(\App\AdminBundle\Entity\Menu $menu)
    {
        $this->menus->removeElement($menu);
    }

    /**
     * Get menus
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMenus()
    {
        return $this->menus;
    }

    /**
     * Add comentario
     *
     * @param \App\AdminBundle\Entity\Comentario $comentario
     *
     * @return Usuario
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
     * Add temasforo
     *
     * @param \App\AdminBundle\Entity\TemaForo $temasforo
     *
     * @return Usuario
     */
    public function addTemasforo(\App\AdminBundle\Entity\TemaForo $temasforo)
    {
        $this->temasforo[] = $temasforo;

        return $this;
    }

    /**
     * Remove temasforo
     *
     * @param \App\AdminBundle\Entity\TemaForo $temasforo
     */
    public function removeTemasforo(\App\AdminBundle\Entity\TemaForo $temasforo)
    {
        $this->temasforo->removeElement($temasforo);
    }

    /**
     * Get temasforo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTemasforo()
    {
        return $this->temasforo;
    }

    /**
     * Add puntuacione
     *
     * @param \App\AdminBundle\Entity\Puntuacion $puntuacione
     *
     * @return Usuario
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
}
