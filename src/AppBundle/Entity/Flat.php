<?php
// src/AppBundle/Entity/Flat.php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use ApiPlatform\Core\Annotation\ApiSubresource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Flat.
 *
 * @ApiResource
 * @ORM\Entity
 */
class Flat
{
    /**
     * @var int The id of this Flat.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string The title of this Flat.
     *
     * @ORM\Column
     */
    private $title;

    /**
     * @var string The adress of this Flat.
     *
     * @ORM\Column(type="text")
     */
    private $adress;

    /**
     * @var \DateTimeInterface The publication date of this Flat.
     *
     * @ORM\Column(type="datetime")
     */
    private $publicationDate;

    /**
     * @var Task[] Available tasks for this Flat.
     *
     * @ORM\OneToMany(targetEntity="Task", mappedBy="flat")
     * @ApiSubresource
     */
    private $tasks;

    /**
     * @var FlatUser[] FlatUsers for this Flat.
     *
     * @ORM\OneToMany(targetEntity="FlatUser", mappedBy="flat")
     * @ApiSubresource
     */
    private $FlatUsers;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->FlatUsers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tasks = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set title.
     *
     * @param string $title
     *
     * @return Flat
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
     * Set adress.
     *
     * @param string $adress
     *
     * @return Flat
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress.
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set publicationDate.
     *
     * @param \DateTime $publicationDate
     *
     * @return Flat
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
     * Add task.
     *
     * @param \AppBundle\Entity\Task $task
     *
     * @return Flat
     */
    public function addTask(\AppBundle\Entity\Task $task)
    {
        $this->tasks[] = $task;

        return $this;
    }

    /**
     * Remove task.
     *
     * @param \AppBundle\Entity\Task $task
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeTask(\AppBundle\Entity\Task $task)
    {
        return $this->tasks->removeElement($task);
    }

    /**
     * Get tasks.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTasks()
    {
        return $this->tasks;
    }


    /**
     * Add FlatUser.
     *
     * @param \AppBundle\Entity\FlatUser $FlatUser
     *
     * @return Flat
     */
    public function addFlatUser(\AppBundle\Entity\FlatUser $FlatUser)
    {
        $this->FlatUsers[] = $FlatUser;

        return $this;
    }

    /**
     * Remove FlatUser.
     *
     * @param \AppBundle\Entity\FlatUser $FlatUser
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeFlatUser(\AppBundle\Entity\FlatUser $FlatUser)
    {
        return $this->FlatUsers->removeElement($FlatUser);
    }

    /**
     * Get FlatUsers.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFlatUsers()
    {
        return $this->FlatUsers;
    }
}
