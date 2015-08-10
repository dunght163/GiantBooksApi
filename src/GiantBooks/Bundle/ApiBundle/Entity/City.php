<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 */
class City
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $city;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\Country
     */
    private $country;


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
     * Set city
     *
     * @param string $city
     * @return City
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return City
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set country
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Country $country
     * @return City
     */
    public function setCountry(\GiantBooks\Bundle\ApiBundle\Entity\Country $country = null)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }
}
