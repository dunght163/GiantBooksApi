<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Book
 */
class Book
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $descr;

    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var \DateTime
     */
    private $writenFromDate;

    /**
     * @var \DateTime
     */
    private $writenToDate;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\Category
     */
    private $category;


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
     * Set title
     *
     * @param string $title
     * @return Book
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set descr
     *
     * @param string $descr
     * @return Book
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;

        return $this;
    }

    /**
     * Get descr
     *
     * @return string 
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Book
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set writenFromDate
     *
     * @param \DateTime $writenFromDate
     * @return Book
     */
    public function setWritenFromDate($writenFromDate)
    {
        $this->writenFromDate = $writenFromDate;

        return $this;
    }

    /**
     * Get writenFromDate
     *
     * @return \DateTime 
     */
    public function getWritenFromDate()
    {
        return $this->writenFromDate;
    }

    /**
     * Set writenToDate
     *
     * @param \DateTime $writenToDate
     * @return Book
     */
    public function setWritenToDate($writenToDate)
    {
        $this->writenToDate = $writenToDate;

        return $this;
    }

    /**
     * Get writenToDate
     *
     * @return \DateTime 
     */
    public function getWritenToDate()
    {
        return $this->writenToDate;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Book
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
     * Set category
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Category $category
     * @return Book
     */
    public function setCategory(\GiantBooks\Bundle\ApiBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
