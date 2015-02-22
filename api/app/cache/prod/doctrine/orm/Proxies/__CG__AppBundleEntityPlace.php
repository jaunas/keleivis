<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Place extends \AppBundle\Entity\Place implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'geoLat', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'geoLng', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'comment', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'placeType', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'parents', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'children');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'geoLat', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'geoLng', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'comment', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'placeType', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'parents', '' . "\0" . 'AppBundle\\Entity\\Place' . "\0" . 'children');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Place $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeoLat($geoLat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeoLat', array($geoLat));

        return parent::setGeoLat($geoLat);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeoLat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeoLat', array());

        return parent::getGeoLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeoLng($geoLng)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeoLng', array($geoLng));

        return parent::setGeoLng($geoLng);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeoLng()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeoLng', array());

        return parent::getGeoLng();
    }

    /**
     * {@inheritDoc}
     */
    public function setComment($comment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComment', array($comment));

        return parent::setComment($comment);
    }

    /**
     * {@inheritDoc}
     */
    public function getComment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComment', array());

        return parent::getComment();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlaceType(\AppBundle\Entity\PlaceType $placeType = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlaceType', array($placeType));

        return parent::setPlaceType($placeType);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlaceType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlaceType', array());

        return parent::getPlaceType();
    }

    /**
     * {@inheritDoc}
     */
    public function addParent(\AppBundle\Entity\Place $parents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addParent', array($parents));

        return parent::addParent($parents);
    }

    /**
     * {@inheritDoc}
     */
    public function removeParent(\AppBundle\Entity\Place $parents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeParent', array($parents));

        return parent::removeParent($parents);
    }

    /**
     * {@inheritDoc}
     */
    public function getParents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParents', array());

        return parent::getParents();
    }

    /**
     * {@inheritDoc}
     */
    public function addChild(\AppBundle\Entity\Place $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addChild', array($children));

        return parent::addChild($children);
    }

    /**
     * {@inheritDoc}
     */
    public function removeChild(\AppBundle\Entity\Place $children)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeChild', array($children));

        return parent::removeChild($children);
    }

    /**
     * {@inheritDoc}
     */
    public function getChildren()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChildren', array());

        return parent::getChildren();
    }

}
