<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Move
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Move
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
     * @var \DateTime
     *
     * @ORM\Column(name="time_start", type="datetime")
     */
    private $timeStart;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_end", type="datetime")
     */
    private $timeEnd;

    /**
     * @var float
     *
     * @ORM\Column(name="distance", type="float")
     */
    private $distance;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;
	
	/**
	 * @ORM\OneToOne(targetEntity="PlaceForJourney")
	 * @ORM\JoinColumn(name="place_end_id", referencedColumnName="id")
	 */
	private $placeEnd;
	
	/**
	 * @ORM\ManyToOne(targetEntity="TravelType")
	 * @ORM\JoinColumn(name="travel_type_id", referencedColumnName="id")
	 */
	private $travelType;


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
     * Set timeStart
     *
     * @param \DateTime $timeStart
     * @return Move
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;

        return $this;
    }

    /**
     * Get timeStart
     *
     * @return \DateTime 
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * Set timeEnd
     *
     * @param \DateTime $timeEnd
     * @return Move
     */
    public function setTimeEnd($timeEnd)
    {
        $this->timeEnd = $timeEnd;

        return $this;
    }

    /**
     * Get timeEnd
     *
     * @return \DateTime 
     */
    public function getTimeEnd()
    {
        return $this->timeEnd;
    }

    /**
     * Set distance
     *
     * @param float $distance
     * @return Move
     */
    public function setDistance($distance)
    {
        $this->distance = $distance;

        return $this;
    }

    /**
     * Get distance
     *
     * @return float 
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Move
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
     * Set placeEnd
     *
     * @param \AppBundle\Entity\PlaceForJourney $placeEnd
     * @return Move
     */
    public function setPlaceEnd(\AppBundle\Entity\PlaceForJourney $placeEnd = null)
    {
        $this->placeEnd = $placeEnd;

        return $this;
    }

    /**
     * Get placeEnd
     *
     * @return \AppBundle\Entity\PlaceForJourney 
     */
    public function getPlaceEnd()
    {
        return $this->placeEnd;
    }

    /**
     * Set travelType
     *
     * @param \AppBundle\Entity\TravelType $travelType
     * @return Move
     */
    public function setTravelType(\AppBundle\Entity\TravelType $travelType = null)
    {
        $this->travelType = $travelType;

        return $this;
    }

    /**
     * Get travelType
     *
     * @return \AppBundle\Entity\TravelType 
     */
    public function getTravelType()
    {
        return $this->travelType;
    }
}
