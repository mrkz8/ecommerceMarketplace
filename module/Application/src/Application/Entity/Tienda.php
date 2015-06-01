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
 * Datos de la tienda 
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="tienda")
 */
class Tienda extends Ceo
{
    /**
     * Id de la tienda
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * Url de la foto de la tienda
     * @var string
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $photo;
    /**
     * Nombre de la Tienda
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $nombre;
    /**
     * Url de la tienda
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $url;
    /**
     * Información de la tienda
     * @var string
     * @ORM\Column(type="string", length=8000, nullable=false)
     */
    private $informacion;
    /**
     * Id del proveedor
     * @var integer
     * @ORM\ManyToOne(targetEntity="Proveedor")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $proveedor;
    /**
     * Fecha en la que se creo
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fecha;
    /**
     * Si esta activo o no la tienda
     * @var boolean
     * @ORM\Column(columnDefinition="TINYINT DEFAULT 1 NOT NULL")
     */
    private $active;
    /**
     * Regresa el atributo
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Setea el atributo
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Setea el atributo
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Setea el atributo
     * @return string
     */
    public function getInformacion()
    {
        return $this->informacion;
    }
    /**
     * Setea el atributo
     * @return Object
     */
    public function getProveedor()
    {
        return $this->proveedor;
    }
    /**
     * Setea el atributo
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Setea el atributo
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
     * Setea el atributo
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * Setea el atributo
     * @param string $informacion
     */
    public function setInformacion($informacion)
    {
        $this->informacion = $informacion;
    }
    /**
     * Setea el atributo
     * @param Application\Entity\Proveedor $proveedor
     */
    public function setProveedor($proveedor)
    {
        $this->proveedor = $proveedor;
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
     * Regresa el atributo
     * @return Datetime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    /**
     * Setea el atributo
     * @param DateTime $fecha
     */
    public function setFecha(DateTime $fecha)
    {
        $this->fecha = $fecha;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
    /**
     * Setea el atributo
     * @param string $photo
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
}
