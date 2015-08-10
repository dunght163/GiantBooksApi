<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UploadBookData
 */
class UploadBookData
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    /**
     * @var integer
     */
    private $pages;

    /**
     * @var integer
     */
    private $partNumber;

    /**
     * @var \DateTime
     */
    private $uploadDate;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\Book
     */
    private $book;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\Member
     */
    private $member;


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
     * Set path
     *
     * @param string $path
     * @return UploadBookData
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set pages
     *
     * @param integer $pages
     * @return UploadBookData
     */
    public function setPages($pages)
    {
        $this->pages = $pages;

        return $this;
    }

    /**
     * Get pages
     *
     * @return integer 
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Set partNumber
     *
     * @param integer $partNumber
     * @return UploadBookData
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

        return $this;
    }

    /**
     * Get partNumber
     *
     * @return integer 
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Set uploadDate
     *
     * @param \DateTime $uploadDate
     * @return UploadBookData
     */
    public function setUploadDate($uploadDate)
    {
        $this->uploadDate = $uploadDate;

        return $this;
    }

    /**
     * Get uploadDate
     *
     * @return \DateTime 
     */
    public function getUploadDate()
    {
        return $this->uploadDate;
    }

    /**
     * Set book
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Book $book
     * @return UploadBookData
     */
    public function setBook(\GiantBooks\Bundle\ApiBundle\Entity\Book $book = null)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\Book 
     */
    public function getBook()
    {
        return $this->book;
    }

    /**
     * Set member
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Member $member
     * @return UploadBookData
     */
    public function setMember(\GiantBooks\Bundle\ApiBundle\Entity\Member $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\Member 
     */
    public function getMember()
    {
        return $this->member;
    }
}
