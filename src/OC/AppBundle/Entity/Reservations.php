<?php

namespace OC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservations
 *
 * @ORM\Table(name="reservations")
 * @ORM\Entity(repositoryClass="OC\AppBundle\Repository\ReservationsRepository")
 */
class Reservations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $dateReservation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreBillets", type="integer")
     */
    private $nbreBillets;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    public function __construct()
    {
        $this->dateReservation  = new \Datetime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reservations
     */
    public function setDateReservation($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->date;
    }

    /**
     * Set nbreBillets
     *
     * @param integer $nbreBillets
     *
     * @return Reservations
     */
    public function setNbreBillets($nbreBillets)
    {
        $this->nbreBillets = $nbreBillets;

        return $this;
    }

    /**
     * Get nbreBillets
     *
     * @return int
     */
    public function getNbreBillets()
    {
        return $this->nbreBillets;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Reservations
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
}

