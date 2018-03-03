<?php
// src/AppBundle/Entity/Task.php

namespace AppBundle\Entity;

//use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Annotation\ApiResource;
//use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Task.
 *
 * @ApiResource(attributes={"filters"={"task.search_filter"}})
 * @ORM\Entity
 */
class Task
{
    /**
     * @var int The id of this Task.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Flat The Flat this Task is about.
     *
     * @ORM\ManyToOne(targetEntity="Flat", inversedBy="tasks")
     */
    private $flat;

    /**
     * @var string The title of this Task.
     *
     * @ORM\Column
     */
    private $title;

    /**
     * @var string The description of this Task.
     *
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @var string The author of this Task.
     *
     * @ORM\Column
     */
    private $author;

    /**
     * @var \DateTimeInterface The publication date of this Task.
     *
     * @ORM\Column(type="datetime")
     */
    private $publicationDate;

    /**
     * @var boolean Is the task completed
     *
     * @ORM\Column(type="boolean")
     */
    private $completed;

    ///**
     //* Constructor
     //*/
    // public function __construct()
    // {
    //     $this->flat = new \Doctrine\Common\Collections\ArrayCollection();
    // }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Flat.
     *
     * @param \AppBundle\Entity\Flat|null $flat
     *
     * @return Task
     */
    public function setFlat(\AppBundle\Entity\Flat $flat = null)
    {
        $this->flat = $flat;

        return $this;
    }

    /**
     * Get Flat.
     *
     * @return \AppBundle\Entity\Flat|null
     */
    public function getFlat()
    {
        return $this->flat;
    }


    /**
     * Set title.
     *
     * @param string $title
     *
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set author.
     *
     * @param string $author
     *
     * @return Task
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author.
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set publicationDate.
     *
     * @param \DateTime $publicationDate
     *
     * @return Task
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;

        return $this;
    }

    /**
     * Get publicationDate.
     *
     * @return \DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * Set completed.
     *
     * @param boolean $completed
     *
     * @return Task
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed.
     *
     * @return boolean
     */
    public function getCompleted()
    {
        return $this->completed;
    }

}
