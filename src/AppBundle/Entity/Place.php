<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Place
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Place
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var float
     *
     * @ORM\Column(name="geo_lat", type="float")
     */
    private $geoLat;

    /**
     * @var float
     *
     * @ORM\Column(name="geo_lng", type="float")
     */
    private $geoLng;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;
	
	/**
	 * @ORM\ManyToOne(targetEntity="PlaceType")
	 * @ORM\JoinColumn(name="place_type_id", referencedColumnName="id")
	 */
	private $placeType;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Place", mappedBy="children")
	 */
	private $parents;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Place", inversedBy="parents")
	 * @ORM\JoinTable(name="place_graph",
	 *			joinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")},
	 *			inverseJoinColumns={@ORM\JoinColumn(name="child_id", referencedColumnName="id")}
	 *		)
	 */
	private $children;


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
     * Set name
     *
     * @param string $name
     * @return Place
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set geoLat
     *
     * @param float $geoLat
     * @return Place
     */
    public function setGeoLat($geoLat)
    {
        $this->geoLat = $geoLat;

        return $this;
    }

    /**
     * Get geoLat
     *
     * @return float 
     */
    public function getGeoLat()
    {
        return $this->geoLat;
    }

    /**
     * Set geoLng
     *
     * @param float $geoLng
     * @return Place
     */
    public function setGeoLng($geoLng)
    {
        $this->geoLng = $geoLng;

        return $this;
    }

    /**
     * Get geoLng
     *
     * @return float 
     */
    public function getGeoLng()
    {
        return $this->geoLng;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Place
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parents = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set placeType
     *
     * @param \AppBundle\Entity\PlaceType $placeType
     * @return Place
     */
    public function setPlaceType(\AppBundle\Entity\PlaceType $placeType = null)
    {
        $this->placeType = $placeType;

        return $this;
    }

    /**
     * Get placeType
     *
     * @return \AppBundle\Entity\PlaceType 
     */
    public function getPlaceType()
    {
        return $this->placeType;
    }

    /**
     * Add parents
     *
     * @param \AppBundle\Entity\Place $parents
     * @return Place
     */
    public function addParent(\AppBundle\Entity\Place $parents)
    {
        $this->parents[] = $parents;

        return $this;
    }

    /**
     * Remove parents
     *
     * @param \AppBundle\Entity\Place $parents
     */
    public function removeParent(\AppBundle\Entity\Place $parents)
    {
        $this->parents->removeElement($parents);
    }

    /**
     * Get parents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Add children
     *
     * @param \AppBundle\Entity\Place $children
     * @return Place
     */
    public function addChild(\AppBundle\Entity\Place $children)
    {
        $this->children[] = $children;

        return $this;
    }

    /**
     * Remove children
     *
     * @param \AppBundle\Entity\Place $children
     */
    public function removeChild(\AppBundle\Entity\Place $children)
    {
        $this->children->removeElement($children);
    }

    /**
     * Get children
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getChildren()
    {
        return $this->children;
    }
}
