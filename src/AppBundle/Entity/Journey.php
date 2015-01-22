<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Journey
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Journey
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
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;
	
	/**
	 * @ORM\OneToOne(targetEntity="PlaceForJourney")
	 * @ORM\JoinColumn(name="start_place_id", referencedColumnName="id")
	 */
	private $startPlace;


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
     * @return Journey
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
     * Set comment
     *
     * @param string $comment
     * @return Journey
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
     * Set startPlace
     *
     * @param \AppBundle\Entity\PlaceForJourney $startPlace
     * @return Journey
     */
    public function setStartPlace(\AppBundle\Entity\PlaceForJourney $startPlace = null)
    {
        $this->startPlace = $startPlace;

        return $this;
    }

    /**
     * Get startPlace
     *
     * @return \AppBundle\Entity\PlaceForJourney 
     */
    public function getStartPlace()
    {
        return $this->startPlace;
    }
}
