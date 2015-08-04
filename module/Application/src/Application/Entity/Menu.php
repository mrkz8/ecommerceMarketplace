<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Entity;

use DateTime;
use Application\Entity\Ceo;
use Doctrine\ORM\Mapping as ORM;

/** 
 * Datos extra para el menu
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="menu")
 */
class Menu extends Ceo
{
    /**
     * Id
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * Nombre del Banner
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $nombre;
    /**
     * Link del Banner
     * @var string
     * @ORM\Column(type="string", length=800, nullable=false)
     */
    private $link;
    /**
     * Fecha en la que se levantará el menu
     * @var datetime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $fechaInicial;
    /**
     * Fecha en la que se terminará el menu
     * @var datetime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $fechaFinal;
    /**
     * Si esta activo o no
     * @var boolean
     * @ORM\Column(columnDefinition="TINYINT DEFAULT 1 NOT NULL")
     */
    private $active;
    /**
     * Setea el id del objecto
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Obtiene el string de la categoria para el menu
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Regresa la url a pintar
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
    /**
     * Regresa la fecha
     * @return DateTime
     */
    public function getFechaInicial()
    {
        return $this->fechaInicial;
    }
    /**
     * Regresa la fecha
     * @return DateTime
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
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
     * Setea el id del objeto a poner
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Setea el nombre del objeto
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }
    /**
     * Setea la url del menu
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }
    /**
     * Setea la fecha inicial
     * @param DateTime $fechaInicial
     */
    public function setFechaInicial($fechaInicial)
    {
        $this->fechaInicial = $fechaInicial;
    }
    /**
     * Setea la fecha final del menu
     * @param DateTime $fechaFinal
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;
    }
    /**
     * Setea si activo o no
     * @param boolean $active
     */
    function setActive($active)
    {
        $this->active = $active;
    }
}
