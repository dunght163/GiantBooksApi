<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Member
 */
class Member
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\User
     */
    private $user;


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
     * Set user
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\User $user
     * @return Member
     */
    public function setUser(\GiantBooks\Bundle\ApiBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
