<?php

namespace GiantBooks\Bundle\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthorBook
 */
class AuthorBook
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\Author
     */
    private $author;

    /**
     * @var \GiantBooks\Bundle\ApiBundle\Entity\Book
     */
    private $book;


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
     * Set author
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Author $author
     * @return AuthorBook
     */
    public function setAuthor(\GiantBooks\Bundle\ApiBundle\Entity\Author $author = null)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return \GiantBooks\Bundle\ApiBundle\Entity\Author 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set book
     *
     * @param \GiantBooks\Bundle\ApiBundle\Entity\Book $book
     * @return AuthorBook
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
}
