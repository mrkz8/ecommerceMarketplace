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
    public function getId()
    {
        return $this->id;
    }
    
    public function getCliente()
    {
        return $this->cliente;
    }
    public function getFecha()
    {
        return $this->fecha;
    }
    public function getActive()
    {
        return $this->active;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
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
    public function setActive($active)
    {
        $this->active = $active;
    }
}
