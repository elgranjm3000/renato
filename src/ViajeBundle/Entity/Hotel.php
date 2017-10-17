<?php

namespace ViajeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Hotel
 *
 * @ORM\Table(name="hotel")
 * @ORM\Entity(repositoryClass="ViajeBundle\Repository\HotelRepository")
 */
class Hotel
{

     /**
     * @ORM\OneToMany(targetEntity="Presupuesto", mappedBy="hotel")
     */
    protected $presupuestoh;
 
    public function __construct()
    {
        
        $this->presupuestoh = new ArrayCollection();
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
     * @var int
     *
     
     /**
     * @ORM\ManyToOne(targetEntity="Ciudad", inversedBy="hotel")
     * @ORM\JoinColumn(name="ciudad", referencedColumnName="id")
     */
     
    private $ciudad;

    /**
     * @var string
     *
     * @ORM\Column(name="estrella", type="string", length=255)
     */
    private $estrella;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=255)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tbaja", type="decimal", precision=10, scale=2)
     */
    private $tbaja;

    /**
     * @var string
     *
     * @ORM\Column(name="talta", type="decimal", precision=10, scale=2)
     */
    private $talta;




    // ...
 
    

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
     * Set ciudad
     *
     * @param integer $ciudad
     *
     * @return Hotel
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return int
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set estrella
     *
     * @param string $estrella
     *
     * @return Hotel
     */
    public function setEstrella($estrella)
    {
        $this->estrella = $estrella;

        return $this;
    }

    /**
     * Get estrella
     *
     * @return string
     */
    public function getEstrella()
    {
        return $this->estrella;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     *
     * @return Hotel
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set tbaja
     *
     * @param string $tbaja
     *
     * @return Hotel
     */
    public function setTbaja($tbaja)
    {
        $this->tbaja = $tbaja;

        return $this;
    }

    /**
     * Get tbaja
     *
     * @return string
     */
    public function getTbaja()
    {
        return $this->tbaja;
    }

    /**
     * Set talta
     *
     * @param string $talta
     *
     * @return Hotel
     */
    public function setTalta($talta)
    {
        $this->talta = $talta;

        return $this;
    }

    /**
     * Get talta
     *
     * @return string
     */
    public function getTalta()
    {
        return $this->talta;
    }

    /**
     * Set ciudadid
     *
     * @param integer $ciudadid
     *
     * @return Hotel
     */
    public function setCiudadid($ciudadid)
    {
        $this->ciudadid = $ciudadid;

        return $this;
    }

    /**
     * Get ciudadid
     *
     * @return integer
     */
    public function getCiudadid()
    {
        return $this->ciudadid;
    }

    /**
     * Set ciudadhotel
     *
     * @param \ViajeBundle\Entity\Ciudad $ciudadhotel
     *
     * @return Hotel
     */
    public function setCiudadhotel(\ViajeBundle\Entity\Ciudad $ciudadhotel = null)
    {
        $this->ciudadhotel = $ciudadhotel;

        return $this;
    }

    /**
     * Get ciudadhotel
     *
     * @return \ViajeBundle\Entity\Ciudad
     */
    public function getCiudadhotel()
    {
        return $this->ciudadhotel;
    }

    /**
     * Add presupuestoh
     *
     * @param \ViajeBundle\Entity\Presupuesto $presupuestoh
     *
     * @return Hotel
     */
    public function addPresupuestoh(\ViajeBundle\Entity\Presupuesto $presupuestoh)
    {
        $this->presupuestoh[] = $presupuestoh;

        return $this;
    }

    /**
     * Remove presupuestoh
     *
     * @param \ViajeBundle\Entity\Presupuesto $presupuestoh
     */
    public function removePresupuestoh(\ViajeBundle\Entity\Presupuesto $presupuestoh)
    {
        $this->presupuestoh->removeElement($presupuestoh);
    }

    /**
     * Get presupuestoh
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPresupuestoh()
    {
        return $this->presupuestoh;
    }
}
