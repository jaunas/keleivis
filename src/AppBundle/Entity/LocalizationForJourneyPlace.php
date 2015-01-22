<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LocalizationForJourneyPlace
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class LocalizationForJourneyPlace
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
	 * @ORM\ManyToOne(targetEntity="Localization")
	 * @ORM\JoinColumn(name="localization_id", referencedColumnName="id")
	 */
	private $localization;
	
	/**
	 * @ORM\ManyToOne(targetEntity="PlaceForJourney")
	 * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
	 */
	private $place;


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
     * @return LocalizationForJourneyPlace
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
     * Set localization
     *
     * @param \AppBundle\Entity\Localization $localization
     * @return LocalizationForJourneyPlace
     */
    public function setLocalization(\AppBundle\Entity\Localization $localization = null)
    {
        $this->localization = $localization;

        return $this;
    }

    /**
     * Get localization
     *
     * @return \AppBundle\Entity\Localization 
     */
    public function getLocalization()
    {
        return $this->localization;
    }

    /**
     * Set place
     *
     * @param \AppBundle\Entity\PlaceForJourney $place
     * @return LocalizationForJourneyPlace
     */
    public function setPlace(\AppBundle\Entity\PlaceForJourney $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \AppBundle\Entity\PlaceForJourney 
     */
    public function getPlace()
    {
        return $this->place;
    }
}
