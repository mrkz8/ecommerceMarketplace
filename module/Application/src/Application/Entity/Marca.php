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
 * Datos de la marca
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="marca")
 */
class Marca extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Nombre de la marca
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $nombre;
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
     * Si esta activo o no la marca
     * @var boolean
     * @ORM\Column(columnDefinition="TINYINT DEFAULT 1 NOT NULL")
     */
    private $active;
    /**
     * Regresa el id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Regresa el nombre
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * Regresa si esta activo o no
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Setea el id
     * @param integer $id id de la tabla
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Setea el nombre de la marca
     * @param string $nombre nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
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
     * Setea el si esta activo o no la marca
     * @param Booelan $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }
}
