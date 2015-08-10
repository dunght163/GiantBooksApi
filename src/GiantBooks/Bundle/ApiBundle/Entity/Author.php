<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Author
 */
class Author
{
    /**
     * @var integer
     */
    private $id;

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
     * Set person
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Person $person
     * @return Author
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
