<?php
// src/AppBundle/Entity/FlatUser.php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * A FlatUser of a Flat.
 *
 * @ApiResource
 * @ORM\Entity
 */
class FlatUser
{
    /**
     * @var int The id of this FlatUser.
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @var string the username of the FlatUser.
     *
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @var string the email of the FlatUser
     * 
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;


    /**
     * @var \DateTimeInterface The date of creation of this FlatUser.
     *
     * @ORM\Column(type="datetime")
     */
    private $creationDate;

    /**
     * @var Flat The Flat this FlatUser is about.
     *
     * @ORM\ManyToOne(targetEntity="Flat", inversedBy="FlatUsers")
     */
    private $flat;

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
     * Set username.
     *
     * @param string $username
     *
     * @return FlatUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username.
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    
    /**
     * Set email.
     *
     * @param string $email
     *
     * @return FlatUser
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }


    /**
     * Set creationDate.
     *
     * @param \DateTime $creationDate
     *
     * @return FlatUser
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set Flat.
     *
     * @param \AppBundle\Entity\Flat|null $flat
     *
     * @return FlatUser
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
}
