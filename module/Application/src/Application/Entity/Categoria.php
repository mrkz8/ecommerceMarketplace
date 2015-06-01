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
 * Segmentación de una tienda
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="categoria")
 */
class Categoria extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Nombre de la categoria
     * @var string
     * @ORM\Column(type="string", length=100, nullable=false)
     */
    private $nombre;
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
     * @var integer
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\Column(columnDefinition="INT DEFAULT 1 NOT NULL")
     * @ORM\JoinColumn(referencedColumnName="id", nullable=true)
     */
    private $padre;
    /**
     * Regresa el Id
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
     * Setea la fecha de registro
     * @param DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
    /**
     * Obtiene el Atributp
     * @return Object
     */
    public function getPadre()
    {
        return $this->padre;
    }
    /**
     * Retorna el atributo
     * @param Object $padre
     */
    public function setPadre($padre)
    {
        $this->padre = $padre;
    }
}
