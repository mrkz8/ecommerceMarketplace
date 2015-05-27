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
 * Datos de la lista del deseo
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="whishlist")
 */
class Wishlist extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\Column(columnDefinition="INT DEFAULT 1 NOT NULL")
     * @ORM\JoinColumn(referencedColumnName="id", nullable=false)
     */
    private $producto;
    /**
     * Fecha en la que se creo
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha;
    /**
     * Regresa el Id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * Regresa el atributo
     * @return Object
     */
    public function getProducto()
    {
        return $this->producto;
    }
    /**
     * Regresa el atributo
     * @return Object
     */
    public function getFecha()
    {
        return $this->tag;
    }
    /**
     * Setea el atributo
     * @param Object $producto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }
    /**
     * Setea la fecha
     * @param DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}
