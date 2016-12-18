<?php

namespace Proxies\__CG__\App\AdminBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Menu extends \App\AdminBundle\Entity\Menu implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'id', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'nombre', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'descripcion', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'caloriasTotales', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'fechaCreacion', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'publico', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'celiaco', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'subMenus', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'puntuaciones', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'comentarios', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'listas', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'Usuario'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'id', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'nombre', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'descripcion', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'caloriasTotales', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'fechaCreacion', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'publico', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'celiaco', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'subMenus', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'puntuaciones', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'comentarios', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'listas', '' . "\0" . 'App\\AdminBundle\\Entity\\Menu' . "\0" . 'Usuario'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Menu $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', [$nombre]);

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', []);

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', [$descripcion]);

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', []);

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setCaloriasTotales($caloriasTotales)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCaloriasTotales', [$caloriasTotales]);

        return parent::setCaloriasTotales($caloriasTotales);
    }

    /**
     * {@inheritDoc}
     */
    public function getCaloriasTotales()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCaloriasTotales', []);

        return parent::getCaloriasTotales();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaCreacion($fechaCreacion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaCreacion', [$fechaCreacion]);

        return parent::setFechaCreacion($fechaCreacion);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaCreacion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaCreacion', []);

        return parent::getFechaCreacion();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublico($publico)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublico', [$publico]);

        return parent::setPublico($publico);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublico()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublico', []);

        return parent::getPublico();
    }

    /**
     * {@inheritDoc}
     */
    public function setCeliaco($celiaco)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCeliaco', [$celiaco]);

        return parent::setCeliaco($celiaco);
    }

    /**
     * {@inheritDoc}
     */
    public function getCeliaco()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCeliaco', []);

        return parent::getCeliaco();
    }

    /**
     * {@inheritDoc}
     */
    public function setLista(\App\AdminBundle\Entity\Lista $lista = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLista', [$lista]);

        return parent::setLista($lista);
    }

    /**
     * {@inheritDoc}
     */
    public function getLista()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLista', []);

        return parent::getLista();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubMenu(\App\AdminBundle\Entity\SubMenu $subMenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubMenu', [$subMenu]);

        return parent::addSubMenu($subMenu);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubMenu(\App\AdminBundle\Entity\SubMenu $subMenu)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubMenu', [$subMenu]);

        return parent::removeSubMenu($subMenu);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubMenus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubMenus', []);

        return parent::getSubMenus();
    }

    /**
     * {@inheritDoc}
     */
    public function addPuntuacione(\App\AdminBundle\Entity\Puntuacion $puntuacione)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPuntuacione', [$puntuacione]);

        return parent::addPuntuacione($puntuacione);
    }

    /**
     * {@inheritDoc}
     */
    public function removePuntuacione(\App\AdminBundle\Entity\Puntuacion $puntuacione)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePuntuacione', [$puntuacione]);

        return parent::removePuntuacione($puntuacione);
    }

    /**
     * {@inheritDoc}
     */
    public function getPuntuaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPuntuaciones', []);

        return parent::getPuntuaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function addComentario(\App\AdminBundle\Entity\Comentario $comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addComentario', [$comentario]);

        return parent::addComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function removeComentario(\App\AdminBundle\Entity\Comentario $comentario)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeComentario', [$comentario]);

        return parent::removeComentario($comentario);
    }

    /**
     * {@inheritDoc}
     */
    public function getComentarios()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComentarios', []);

        return parent::getComentarios();
    }

    /**
     * {@inheritDoc}
     */
    public function addLista(\App\AdminBundle\Entity\Lista $lista)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLista', [$lista]);

        return parent::addLista($lista);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLista(\App\AdminBundle\Entity\Lista $lista)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLista', [$lista]);

        return parent::removeLista($lista);
    }

    /**
     * {@inheritDoc}
     */
    public function getListas()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getListas', []);

        return parent::getListas();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsuario(\App\AdminBundle\Entity\Usuario $usuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsuario', [$usuario]);

        return parent::setUsuario($usuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsuario', []);

        return parent::getUsuario();
    }

}