<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com.mx
 */
namespace Application\Entity;

use Application\Entity\Ceo;
use Doctrine\ORM\Mapping as ORM;

/** 
 * Clase General para el manejo de Direcciones
 * @version 1.0
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Application\Repository\DireccionRepository")
 * @ORM\Table(name="direccion")
 */
class Direccion extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Dirección Genérica
     * @var string
     * @ORM\Column(type="string", length=300, nullable=false)
     */
    private $direccion;
    /**
     * Complemento de la direccion 1
     * @var string
     * @ORM\Column(type="string", length=150, nullable=false)
     */
    private $direcciondos;
    /**
     * Colonia
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $colonia;
    /**
     * Ciudad.
     * @var string
     * @ORM\Column(type="string", length=150, nullable=false)
     */
    private $ciudad;
    /**
     * Delegación o Municipio
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $municipio;
    /**
     * Estado que pertenece la direccion
     * @var string
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $estado;
    /**
     * Código Postal
     * @var string
     * @ORM\Column(type="string", length=6, nullable=false)
     */
    private $codigoPostal;
    /**
     * Regresa el id de la direccion
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Regresa el Valor que solicita
     * @return String
     */
    public function getDireccion()
    {
        return $this->direccion;
    }
    /**
     * Regresa el Valor que solicita
     * @return String
     */
    public function getDirecciondos()
    {
        return $this->direcciondos;
    }
    /**
     * Regresa el Valor que solicita
     * @return String
     */
    public function getColonia()
    {
        return $this->colonia;
    }
    /**
     * Regresa el Valor que solicita
     * @return String
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }
    /**
     * Regresa el Valor que solicita
     * @return String
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }
    /**
     * Regresa el Valor que solicita
     * @return String
     */
    public function getEstado()
    {
        return $this->estado;
    }
    /**
     * Regresa el Valor que solicita
     * @return String
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }
    /**
     * Setea el valor que 
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Setea el valor que solicita
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    /**
     * Setea el valor que solicita
     * @param string $direcciondos
     */
    public function setDirecciondos($direcciondos)
    {
        $this->direcciondos = $direcciondos;
    }
    /**
     * Setea la colonia
     * @param string $colonia
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;
    }
    /**
     * Setea el parametro que solicita
     * @param string $ciudad
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    }
    /**
     * Setea el parametro que solicita
     * @param string $municipio
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;
    }
    /**
     * Setea el parametro que solicita
     * @param string $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }
    /**
     * Setea el parametro que solicita
     * @param string $codigoPostal
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;
    }
    /**
     * Regresa la dirección completa, sin necesidad de construirla
     * @return string
     */
    public function getFullDireccion()
    {
        $respuesta = "";
        $respuesta .= $this->getDireccion() . " ";
        $respuesta .= $this->getDirecciondos() . " ";
        $respuesta .= "Colonia : ".$this->getColonia() . " ";
        $respuesta .= "Ciudad : ".$this->getCiudad() . " ";
        $respuesta .= "Del/Mun : ".$this->getMunicipio() . " ";
        $respuesta .= "Estado : ".$this->getEstado() . " ";
        $respuesta .= "CP : ".$this->getCodigoPostal() . " ";
        return $respuesta;
    }
}
