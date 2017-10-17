<?php

namespace ViajeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Carro
 *
 * @ORM\Table(name="carro")
 * @ORM\Entity(repositoryClass="ViajeBundle\Repository\CarroRepository")
 */
class Carro
{

    /**
     * @ORM\OneToMany(targetEntity="Modelo", mappedBy="carro")
     */
    protected $modelo;


    
 
    public function __construct()
    {
        $this->modelo = new ArrayCollection();
        
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
     * @ORM\Column(name="marca", type="string", length=255)
     */
    private $marca;

     /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=255)
     */
    private $ruta;


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
     * Set marca
     *
     * @param string $marca
     *
     * @return Carro
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }



     /**
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Carro
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Add modelo
     *
     * @param \ViajeBundle\Entity\Modelo $modelo
     *
     * @return Carro
     */
    public function addModelo(\ViajeBundle\Entity\Modelo $modelo)
    {
        $this->modelo[] = $modelo;

        return $this;
    }

    /**
     * Remove modelo
     *
     * @param \ViajeBundle\Entity\Modelo $modelo
     */
    public function removeModelo(\ViajeBundle\Entity\Modelo $modelo)
    {
        $this->modelo->removeElement($modelo);
    }

    /**
     * Get modelo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Add presupuesto
     *
     * @param \ViajeBundle\Entity\Presupuesto $presupuesto
     *
     * @return Carro
     */
    public function addPresupuesto(\ViajeBundle\Entity\Presupuesto $presupuesto)
    {
        $this->presupuesto[] = $presupuesto;

        return $this;
    }

    /**
     * Remove presupuesto
     *
     * @param \ViajeBundle\Entity\Presupuesto $presupuesto
     */
    public function removePresupuesto(\ViajeBundle\Entity\Presupuesto $presupuesto)
    {
        $this->presupuesto->removeElement($presupuesto);
    }

    /**
     * Get presupuesto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPresupuesto()
    {
        return $this->presupuesto;
    }
}
