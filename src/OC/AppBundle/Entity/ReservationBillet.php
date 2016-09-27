<?php
// src/OC/AppBundle/Entity/ReservationBillet.php

namespace OC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="oc_reservation_billet")
 */
class ReservationBillet
{
    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nbreBillets", type="integer")
     */
    private $nbreBillets;

    /**
     * @ORM\ManyToOne(targetEntity="OC\AppBundle\Entity\Reservation")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reservation;

    /**
     * @ORM\ManyToOne(targetEntity="OC\AppBundle\Entity\Billet")
     * @ORM\JoinColumn(nullable=false)
     */
    private $billet;
  
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
     * Set nbreBillets
     *
     * @param integer $nbreBillets
     *
     * @return ReservationBillet
     */
    public function setNbreBillets($nbreBillets)
    {
        $this->nbreBillets = $nbreBillets;

        return $this;
    }

    /**
     * Get nbreBillets
     *
     * @return integer
     */
    public function getNbreBillets()
    {
        return $this->nbreBillets;
    }

    /**
     * Set reservation
     *
     * @param \OC\PlatformBundle\Entity\Reservation $reservation
     *
     * @return ReservationBillet
     */
    public function setReservation(Reservation $reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return \OC\PlatformBundle\Entity\Reservation
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set billet
     *
     * @param \OC\PlatformBundle\Entity\Billet $billet
     *
     * @return ReservationBillet
     */
    public function setBillet(Billet $billet)
    {
        $this->billet = $billet;

        return $this;
    }

    /**
     * Get billet
     *
     * @return \OC\PlatformBundle\Entity\Billet
     */
    public function getBillet()
    {
        return $this->billet;
    }
}
