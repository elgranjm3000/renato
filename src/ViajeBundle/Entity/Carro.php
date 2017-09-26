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
}

