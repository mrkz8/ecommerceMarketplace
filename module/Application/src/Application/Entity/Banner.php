<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Entity;

use Application\Entity\Ceo;
use Doctrine\ORM\Mapping as ORM;

/** 
 * Datos del producto
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="banner")
 */
class Banner extends Ceo
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
     * Alto de la foto, sin el tipo de medida px
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $alto;
    /**
     * Ancho de la foto, sin el tipo de medida px
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $ancho;
    /**
     * Template 
     * @var string
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $template;
    /**
     * Regresa el ID
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * @return string
     */
    public function getAlto()
    {
        return $this->alto;
    }
    /**
     * Setea el atributo
     * @return string
     */
    public function getAncho()
    {
        return $this->ancho;
    }
    /**
     * Setea el atributo
     * @param string $alto
     */
    public function setAlto($alto)
    {
        $this->alto = $alto;
    }
    /**
     * Setea el atributo
     * @param string $ancho
     */
    public function setAncho($ancho)
    {
        $this->ancho = $ancho;
    }
    /**
     * Regresa el atributp
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
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
     * Regresa el atributo
     * @return string
     */
    public function getTemplate()
    {
        return $this->template;
    }
    /**
     * Regresa el atributo
     * @param string $template
     */
    public function setTemplate($template)
    {
        $this->template = $template;
    }
}
