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
 * @ORM\Table(name="bannercomercialfoto")
 */
class BannerComercialFoto extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Id del banner
     * @var integer
     * @ORM\ManyToOne(targetEntity="Banner")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $banner;
    /**
     * Id del comercialfoto
     * @var integer
     * @ORM\ManyToOne(targetEntity="ComercialFoto")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $comercialfoto;
    /**
     * Fecha en la que se inicia
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechainicio;
    /**
     * Fecha en la que se finaliza
     * @var datetime
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $fechafinal;
    /**
     * Si esta activo o no
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
     * Regresa el atributo
     * @return string
     */
    public function getBanner()
    {
        return $this->banner;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getComercialfoto()
    {
        return $this->comercialfoto;
    }
    /**
     * Regresa el atributo
     * @return DateTime
     */
    public function getFechainicio()
    {
        return $this->fechainicio;
    }
    /**
     * Regresa el atributo
     * @return DateTime
     */
    public function getFechafinal()
    {
        return $this->fechafinal;
    }
    /**
     * Regresa el atributo
     * @return Boolean
     */
    public function getActive()
    {
        return $this->active;
    }
    /**
     * Regresa el atributo
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    /**
     * Setea el atributo
     * @param string $banner
     */
    public function setBanner($banner)
    {
        $this->banner = $banner;
    }
    /**
     * Setea el atributo
     * @param string $comercialfoto
     */
    public function setComercialfoto($comercialfoto)
    {
        $this->comercialfoto = $comercialfoto;
    }
    /**
     * Setea el atributo
     * @param DateTime $fechainicio
     */
    public function setFechainicio($fechainicio)
    {
        $this->fechainicio = $fechainicio;
    }
    /**
     * Setea el atributo
     * @param DateTime $fechafinal
     */
    public function setFechafinal(datetime $fechafinal)
    {
        $this->fechafinal = $fechafinal;
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