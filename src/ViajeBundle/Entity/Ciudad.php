<?php

namespace ViajeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciudad
 *
 * @ORM\Table(name="ciudad")
 * @ORM\Entity(repositoryClass="ViajeBundle\Repository\CiudadRepository")
 */
class Ciudad
{

   /**
     * @ORM\OneToMany(targetEntity="Hotel", mappedBy="ciudad")
     */
    protected $hotel;
 
    public function __construct()
    {
        $this->hotel = new ArrayCollection();
    }

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
     * @ORM\Column(name="nombreciudad", type="string", length=255)
     */
    private $nombreciudad;


    /**
     * @var integer
     *
     * @ORM\Column(name="paisid", type="integer")
     */
    private $paisid;

    // ...
 
    /**
     * @ORM\ManyToOne(targetEntity="Pais", inversedBy="ciudad")
     * @ORM\JoinColumn(name="paisid", referencedColumnName="id")
     */
    protected $pais;


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
     * Set nombreciudad
     *
     * @param string $nombreciudad
     *
     * @return Ciudad
     */
    public function setNombreciudad($nombreciudad)
    {
        $this->nombreciudad = $nombreciudad;

        return $this;
    }

    /**
     * Get nombreciudad
     *
     * @return string
     */
    public function getNombreciudad()
    {
        return $this->nombreciudad;
    }

    /**
     * Set paisId
     *
     * @param integer $paisId
     *
     * @return Ciudad
     */
    public function setPaisId($paisId)
    {
        $this->pais_id = $paisId;

        return $this;
    }

    /**
     * Get paisId
     *
     * @return integer
     */
    public function getPaisId()
    {
        return $this->pais_id;
    }

    /**
     * Set carro
     *
     * @param \ViajeBundle\Entity\Pais $carro
     *
     * @return Ciudad
     */
    public function setCarro(\ViajeBundle\Entity\Pais $carro = null)
    {
        $this->carro = $carro;

        return $this;
    }

    /**
     * Get carro
     *
     * @return \ViajeBundle\Entity\Pais
     */
    public function getCarro()
    {
        return $this->carro;
    }

    /**
     * Set pais
     *
     * @param \ViajeBundle\Entity\Pais $pais
     *
     * @return Ciudad
     */
    public function setPais(\ViajeBundle\Entity\Pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \ViajeBundle\Entity\Pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Add hotel
     *
     * @param \ViajeBundle\Entity\Hotel $hotel
     *
     * @return Ciudad
     */
    public function addHotel(\ViajeBundle\Entity\Hotel $hotel)
    {
        $this->hotel[] = $hotel;

        return $this;
    }

    /**
     * Remove hotel
     *
     * @param \ViajeBundle\Entity\Hotel $hotel
     */
    public function removeHotel(\ViajeBundle\Entity\Hotel $hotel)
    {
        $this->hotel->removeElement($hotel);
    }

    /**
     * Get hotel
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getHotel()
    {
        return $this->hotel;
    }
}
