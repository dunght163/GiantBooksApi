<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 */
class User
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $uname;

    /**
     * @var string
     */
    private $pwd;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \DateTime
     */
    private $createDate;

    /**
     * @var boolean
     */
    private $active;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\Person
     */
    private $person;


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
     * Set uname
     *
     * @param string $uname
     * @return User
     */
    public function setUname($uname)
    {
        $this->uname = $uname;

        return $this;
    }

    /**
     * Get uname
     *
     * @return string 
     */
    public function getUname()
    {
        return $this->uname;
    }

    /**
     * Set pwd
     *
     * @param string $pwd
     * @return User
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;

        return $this;
    }

    /**
     * Get pwd
     *
     * @return string 
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return User
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
     * Set active
     *
     * @param boolean $active
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set person
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Person $person
     * @return User
     */
    public function setPerson(\GiantBooks\Bundle\ApiBundle\Entity\Person $person = null)
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Get person
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\Person 
     */
    public function getPerson()
    {
        return $this->person;
    }
}
