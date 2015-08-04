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
 * @ORM\Table(name="carrito")
 */
class Carrito extends Ceo
{
    /**
     * Id
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * Id del cliente
     * @var integer
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $cliente;
    /**
     * Id del cliente
     * @var integer
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $direccion;
    /**
     * Fecha en la que se creo
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha;
    /**
     * Si esta activo o no
     * @var boolean
     * @ORM\Column(columnDefinition="TINYINT DEFAULT 1 NOT NULL")
     */
    private $active;
    /**
     * Obtiene el id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Regresa el integer del cliente
     * @return string
     */
    public function getCliente()
    {
        return $this->cliente;
    }
    /**
     * Regresa la fecha
     * @return DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * Regresa si el objeto está activo o no
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Setea el id 
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Setea el objecto del cliente
     * @param Object $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
    /**
     * Setea el nombre de la fecha
     * @param DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    /**
     * Setea si el objeto esta activo o no
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}
