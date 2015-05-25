<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Entity;

use Application\Entity\Ceo;
use Doctrine\ORM\Mapping as ORM;
use DateTime;

/** 
 * Datos del producto
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="enviotienda")
 */
class EnvioTienda extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Precio de envio
     * @var float
     * @ORM\Column(type="float", nullable=false)
     */
    private $precio;
    /**
     * Fecha en la que inicio
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechainicio;
    /**
     * Fecha en la que termina
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechafinal;
        /**
     * Id de la tienda
     * @var integer
     * @ORM\ManyToOne(targetEntity="Tienda")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $tienda;
    /**
     * Setea el id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Obtiene el atributo
     * @return float
     */
    public function getPrecio()
    {
        return $this->precio;
    }
    /**
     * Regresa la fecha del inicio
     * @return DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }
    /**
     * Regresa la fecha final
     * @return DateTime
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }
    /**
     * Setea el ID
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Setea el precio
     * @param float $precio
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;
    }
    /**
     * Setea la fecha de Inicio
     * @param DateTime $fechainicio
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    }
    /**
     * Setea la fecha final
     * @param DateTime $fechafinal
     */
    public function setFechafinal(datetime $fechafinal)
    {
        $this->fechafinal = $fechafinal;
    }
    /**
     * Setea el objecto
     * @return Object
     */
    public function getTienda()
    {
        return $this->tienda;
    }
    /**
     * Setea el objecto
     * @param Object $tienda
     */
    public function setTienda($tienda)
    {
        $this->tienda = $tienda;
    }
}