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
 * @ORM\Table(name="media")
 */
class Media extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Path del elemento
     * @var string
     * @ORM\Column(type="string", length=150, nullable=false)
     */
    private $path;
    /**
     * Elemento URL
     * @var string
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $url;
    /**
     * Tipo de Elemento
     * @var string
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $tipo;
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
     * Regresa el atributo
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
    public function getPath()
    {
        return $this->path;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * Setea el Path
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
    /**
     * Setea la URL
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }
    /**
     * Setea el atributo
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
    /**
     * Setea la fecha
     * @param DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    /**
     * Setea el atributo
     * @param Boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}