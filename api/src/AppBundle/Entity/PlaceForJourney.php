<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaceForJourney
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class PlaceForJourney
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
     * @ORM\Column(name="comment", type="text")
     */
    private $comment;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Place")
	 * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
	 */
	private $place;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Move")
	 * @ORM\JoinColumn(name="move_to_id", referencedColumnName="id")
	 */
	private $moveTo;


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
     * Set comment
     *
     * @param string $comment
     * @return PlaceForJourney
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
     * Set place
     *
     * @param \AppBundle\Entity\Place $place
     * @return PlaceForJourney
     */
    public function setPlace(\AppBundle\Entity\Place $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \AppBundle\Entity\Place 
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * Set moveTo
     *
     * @param \AppBundle\Entity\Move $moveTo
     * @return PlaceForJourney
     */
    public function setMoveTo(\AppBundle\Entity\Move $moveTo = null)
    {
        $this->moveTo = $moveTo;

        return $this;
    }

    /**
     * Get moveTo
     *
     * @return \AppBundle\Entity\Move 
     */
    public function getMoveTo()
    {
        return $this->moveTo;
    }
}
