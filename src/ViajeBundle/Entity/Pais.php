<?php

namespace ViajeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="pais")
 * @ORM\Entity(repositoryClass="ViajeBundle\Repository\PaisRepository")
 */
class Pais
{

     /**
     * @ORM\OneToMany(targetEntity="Ciudad", mappedBy="pais")
     */
    protected $ciudad;
 
    public function __construct()
    {
        $this->ciudad = new ArrayCollection();
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
     * @ORM\Column(name="nombrepais", type="string", length=255)
     */
    private $nombrepais;


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
     * @return Pais
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
     * Set nombrepais
     *
     * @param string $nombrepais
     *
     * @return Pais
     */
    public function setNombrepais($nombrepais)
    {
        $this->nombrepais = $nombrepais;

        return $this;
    }

    /**
     * Get nombrepais
     *
     * @return string
     */
    public function getNombrepais()
    {
        return $this->nombrepais;
    }

    /**
     * Add ciudad
     *
     * @param \ViajeBundle\Entity\Ciudad $ciudad
     *
     * @return Pais
     */
    public function addCiudad(\ViajeBundle\Entity\Ciudad $ciudad)
    {
        $this->ciudad[] = $ciudad;

        return $this;
    }

    /**
     * Remove ciudad
     *
     * @param \ViajeBundle\Entity\Ciudad $ciudad
     */
    public function removeCiudad(\ViajeBundle\Entity\Ciudad $ciudad)
    {
        $this->ciudad->removeElement($ciudad);
    }

    /**
     * Get ciudad
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
}
