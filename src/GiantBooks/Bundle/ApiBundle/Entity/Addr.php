<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Addr
 */
class Addr
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $addr;

    /**
     * @var string
     */
    private $district;

    /**
     * @var integer
     */
    private $postalCode;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $location;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\City
     */
    private $city;


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
     * Set addr
     *
     * @param string $addr
     * @return Addr
     */
    public function setAddr($addr)
    {
        $this->addr = $addr;

        return $this;
    }

    /**
     * Get addr
     *
     * @return string 
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * Set district
     *
     * @param string $district
     * @return Addr
     */
    public function setDistrict($district)
    {
        $this->district = $district;

        return $this;
    }

    /**
     * Get district
     *
     * @return string 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set postalCode
     *
     * @param integer $postalCode
     * @return Addr
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return integer 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Addr
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Addr
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Addr
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
     * Set city
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\City $city
     * @return Addr
     */
    public function setCity(\GiantBooks\Bundle\ApiBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }
}
