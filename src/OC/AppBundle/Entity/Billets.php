<?php

namespace OC\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Billets
 *
 * @ORM\Table(name="billets")
 * @ORM\Entity(repositoryClass="OC\AppBundle\Repository\BilletsRepository")
 */
class Billets
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
     * @var string
     *
     * @ORM\Column(name="nomBillet", type="string", length=255)
     */
    private $nomBillet;

    /**
     * @var float
     *
     * @ORM\Column(name="tarifBillet", type="float")
     */
    private $tarifBillet;


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
     * Set nomBillet
     *
     * @param string $nomBillet
     *
     * @return Billets
     */
    public function setNomBillet($nomBillet)
    {
        $this->nomBillet = $nomBillet;

        return $this;
    }

    /**
     * Get nomBillet
     *
     * @return string
     */
    public function getNomBillet()
    {
        return $this->nomBillet;
    }

    /**
     * Set tarifBillet
     *
     * @param float $tarifBillet
     *
     * @return Billets
     */
    public function setTarifBillet($tarifBillet)
    {
        $this->tarifBillet = $tarifBillet;

        return $this;
    }

    /**
     * Get tarifBillet
     *
     * @return float
     */
    public function getTarifBillet()
    {
        return $this->tarifBillet;
    }
}

