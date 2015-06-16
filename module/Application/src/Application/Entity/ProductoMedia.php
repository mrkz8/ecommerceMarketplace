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
 * @ORM\Table(name="productomedia")
 */
class ProductoMedia extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Id del producto
     * @var integer
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $producto;
    /**
     * Id tipo Media
     * @var integer
     * @ORM\ManyToOne(targetEntity="Media")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $media;
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
     * Setea el atributo
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
    public function getMedia()
    {
        return $this->media;
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
     * Regresa si esta activo o no
     * @return Boolean
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
     * 
     * @param Object $producto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }
    /**
     * Setea el atributo
     * @param Object $media
     */
    public function setMedia($media)
    {
        $this->media = $media;
    }
    /**
     * Setea la fecha
     * @param DateTime $fecha
     */
    public function setFecha(datetime $fecha)
    {
        $this->fecha = $fecha;
    }
    /**
     * Setea si esta activo o no
     * @param Boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}