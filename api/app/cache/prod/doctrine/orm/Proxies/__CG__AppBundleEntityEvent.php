<?php

namespace Proxies\__CG__\AppBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Event extends \AppBundle\Entity\Event implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'dateStart', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'dateEnd', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'timeStart', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'timeEnd', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'comment', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'localization');
        }

        return array('__isInitialized__', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'id', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'name', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'dateStart', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'dateEnd', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'timeStart', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'timeEnd', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'comment', '' . "\0" . 'AppBundle\\Entity\\Event' . "\0" . 'localization');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Event $proxy) {
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
    public function setDateStart($dateStart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateStart', array($dateStart));

        return parent::setDateStart($dateStart);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateStart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateStart', array());

        return parent::getDateStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateEnd($dateEnd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateEnd', array($dateEnd));

        return parent::setDateEnd($dateEnd);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateEnd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateEnd', array());

        return parent::getDateEnd();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeStart($timeStart)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeStart', array($timeStart));

        return parent::setTimeStart($timeStart);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeStart()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeStart', array());

        return parent::getTimeStart();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeEnd($timeEnd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeEnd', array($timeEnd));

        return parent::setTimeEnd($timeEnd);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeEnd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeEnd', array());

        return parent::getTimeEnd();
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
    public function setLocalization(\AppBundle\Entity\Localization $localization = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalization', array($localization));

        return parent::setLocalization($localization);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalization()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalization', array());

        return parent::getLocalization();
    }

}
