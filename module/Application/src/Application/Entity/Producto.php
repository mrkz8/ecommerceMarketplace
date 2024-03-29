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
 * @ORM\Table(name="producto")
 */
class Producto extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Nombre del producto
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $nombre;
    /**
     * Descripción del producto
     * @var string
     * @ORM\Column(type="string", length=8000, nullable=false)
     */
    private $descripcion;
    /**
     * Id de la marca
     * @var integer
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $marca;
    /**
     * Nombre del producto
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $sku;
    /**
     * Precio de Adquisición
     * @var float
     * @ORM\Column(type="float", nullable=false)
     */
    private $precioMinimo;
    /**
     * Precio de Venta
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $precioVenta;
    /**
     * Precio de Venta Publico
     * @var float
     * @ORM\Column(type="float", nullable=false)
     */
    private $precioVentaPublico;
    /**
     * Fecha en la que se creo
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha;
    /**
     * Fecha en la que se modificó
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $modificacion;
    /**
     * Precio de Envio
     * @var float
     * @ORM\Column(type="float", nullable=false)
     */
    private $costoEnvio;
    /**
     * Si esta activo o no
     * @var boolean
     * @ORM\Column(columnDefinition="TINYINT DEFAULT 1 NOT NULL")
     */
    private $active;
    /**
     * Id de la tienda
     * @var integer
     * @ORM\ManyToOne(targetEntity="Tienda")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $tienda;
    /**
     * Regresa el 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Regresa el Objeto
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
    /**
     * Regresa el precio
     * @return float
     */
    public function getPrecioMinimo()
    {
        return $this->precioMinimo;
    }
    /**
     * Regresa el precio
     * @return float
     */
    public function getPrecioVentaPublico()
    {
        return $this->precioVentaPublico;
    }
    /**
     * regresa si esta activo
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
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
     * Setea el atributo
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    /**
     * Setea el objetpo
     * @param string $marca
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    /**
     * Seta el atributo
     * @param string $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }
    /**
     * Setea el atributo
     * @param float $precioMinimo
     */
    public function setPrecioMinimo($precioMinimo)
    {
        $this->precioMinimo = $precioMinimo;
    }
    /**
     * Setea el atributo
     * @param float $precioVentaPublico
     */
    public function setPrecioVentaPublico($precioVentaPublico)
    {
        $this->precioVentaPublico = $precioVentaPublico;
    }
    /**
     * Setea el atributo
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
    /**
     * Regresa la fecha de creacion
     * @return Datetime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * Fecha de modificacion
     * @return DateTime
     */
    public function getModificacion()
    {
        return $this->modificacion;
    }
    /**
     * Setea la fecha de registro
     * @param DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    /**
     * Setea la fecha en la que hubo algun cambio
     * @param Datetime $modificacion
     */
    public function setModificacion($modificacion)
    {
        $this->modificacion = $modificacion;
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
    /**
     * Recupera el valor del atributo
     * @return type
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * REcupera el valor del atributo
     * @return type
     */
    public function getPrecioVenta()
    {
        return $this->precioVenta;
    }
    /**
     * Setea el valor del atributo
     * @param string $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }
    /**
     * Setea el valor del atributo
     * @param float $precioVenta
     */
    public function setPrecioVenta($precioVenta)
    {
        $this->precioVenta = $precioVenta;
    }
    /**
     * Regresa el calculo del precio Real, no importando si hay precio de Venta
     * @return float
     */
    public function calculatePrecio()
    {
        $precio = $this->getPrecioVentaPublico();
        if (!is_null($this->getPrecioVenta())) {
            $precio = ($this->getPrecioVentaPublico()>$this->getPrecioVenta()) ? $this->getPrecioVenta(): $this->getPrecioVentaPublico();
        }
        return $precio;
    }
    /**
     * Regresa el costo de Envio
     * @return type
     */
    public function getCostoEnvio()
    {
        return $this->costoEnvio;
    }
    /**
     * Setea el costo de envio
     * @param Float $costoEnvio
     */
    public function setCostoEnvio($costoEnvio)
    {
        $this->costoEnvio = $costoEnvio;
    }
}
