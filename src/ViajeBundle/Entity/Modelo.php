<?php

namespace ViajeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Modelo
 *
 * @ORM\Table(name="modelo")
 * @ORM\Entity(repositoryClass="ViajeBundle\Repository\ModeloRepository")
 */
class Modelo
{


     /**
     * @ORM\OneToMany(targetEntity="Presupuesto", mappedBy="modelo")
     */
    protected $presupuesto;

     public function __construct()
    {
        $this->presupuesto = new ArrayCollection();
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
     * @ORM\Column(name="modelonombre", type="string", length=255)
     */
    private $modelonombre;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="categoria", type="string", length=255)
     */
    private $categoria;

    /**
     * @var float
     *
     * @ORM\Column(name="consumo", type="float")
     */
    private $consumo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="ruta", type="string", length=255)
     */
    private $ruta;

    /**
     * @var int
     *
     * @ORM\Column(name="dia17", type="float")
     */
    private $dia17;

    /**
     * @var float
     *
     * @ORM\Column(name="dia20", type="float")
     */
    private $dia20;

    /**
     * @var float
     *
     * @ORM\Column(name="dia21", type="float")
     */
    private $dia21;

    /**
     * @var float
     *
     * @ORM\Column(name="diaextra", type="float")
     */
    private $diaextra;


    /**
     * @var integer
     *
     * @ORM\Column(name="carro_id", type="integer")
     */
    private $carro_id;

    // ...
 
    /**
     * @ORM\ManyToOne(targetEntity="Carro", inversedBy="modelo")
     * @ORM\JoinColumn(name="carro_id", referencedColumnName="id")
     */
    protected $carro;
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
     * Set modelonombre
     *
     * @param string $modelonombre
     *
     * @return Modelo
     */
    public function setModelonombre($modelonombre)
    {
        $this->modelonombre = $modelonombre;

        return $this;
    }

    /**
     * Get modelonombre
     *
     * @return string
     */
    public function getModelonombre()
    {
        return $this->modelonombre;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Modelo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set categoria
     *
     * @param string $categoria
     *
     * @return Modelo
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return string
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set consumo
     *
     * @param float $consumo
     *
     * @return Modelo
     */
    public function setConsumo($consumo)
    {
        $this->consumo = $consumo;

        return $this;
    }

    /**
     * Get consumo
     *
     * @return float
     */
    public function getConsumo()
    {
        return $this->consumo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Modelo
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set ruta
     *
     * @param string $ruta
     *
     * @return Modelo
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
     * Set dia17
     *
     * @param integer $dia17
     *
     * @return Modelo
     */
    public function setDia17($dia17)
    {
        $this->dia17 = $dia17;

        return $this;
    }

    /**
     * Get dia17
     *
     * @return int
     */
    public function getDia17()
    {
        return $this->dia17;
    }

    /**
     * Set dia20
     *
     * @param float $dia20
     *
     * @return Modelo
     */
    public function setDia20($dia20)
    {
        $this->dia20 = $dia20;

        return $this;
    }

    /**
     * Get dia20
     *
     * @return float
     */
    public function getDia20()
    {
        return $this->dia20;
    }

    /**
     * Set dia21
     *
     * @param string $dia21
     *
     * @return Modelo
     */
    public function setDia21($dia21)
    {
        $this->dia21 = $dia21;

        return $this;
    }

    /**
     * Get dia21
     *
     * @return string
     */
    public function getDia21()
    {
        return $this->dia21;
    }

    /**
     * Set diaextra
     *
     * @param float $diaextra
     *
     * @return Modelo
     */
    public function setDiaextra($diaextra)
    {
        $this->diaextra = $diaextra;

        return $this;
    }

    /**
     * Get diaextra
     *
     * @return float
     */
    public function getDiaextra()
    {
        return $this->diaextra;
    }

    /**
     * Set carroId
     *
     * @param integer $carroId
     *
     * @return Modelo
     */
    public function setCarroId($carroId)
    {
        $this->carro_id = $carroId;

        return $this;
    }

    /**
     * Get carroId
     *
     * @return integer
     */
    public function getCarroId()
    {
        return $this->carro_id;
    }

    /**
     * Add presupuesto
     *
     * @param \ViajeBundle\Entity\Presupuesto $presupuesto
     *
     * @return Modelo
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

    /**
     * Set carro
     *
     * @param \ViajeBundle\Entity\Carro $carro
     *
     * @return Modelo
     */
    public function setCarro(\ViajeBundle\Entity\Carro $carro = null)
    {
        $this->carro = $carro;

        return $this;
    }

    /**
     * Get carro
     *
     * @return \ViajeBundle\Entity\Carro
     */
    public function getCarro()
    {
        return $this->carro;
    }
}
