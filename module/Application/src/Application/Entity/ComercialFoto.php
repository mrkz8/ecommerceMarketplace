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
 * @ORM\Table(name="comercialfoto")
 */
class ComercialFoto extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Nombre del path
     * @var string
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $path;
    /**
     * Nombre de la foto a mostrar
     * @var string
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $fotoNombre;
    /**
     * Alt de la foto
     * @var string
     * @ORM\Column(type="string", length=800, nullable=true)
     */
    private $altFoto;
    /**
     * Estension de la foto
     * @var string
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $extension;
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
     * Peso de la foto
     * @var string
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $size;
    /**
     * Regresa el ID
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
    public function getFotoNombre()
    {
        return $this->fotoNombre;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getAltFoto()
    {
        return $this->altFoto;
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
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }
    /**
     * Setea el atributo
     * @param string $fotoNombre
     */
    public function setFotoNombre($fotoNombre)
    {
        $this->fotoNombre = $fotoNombre;
    }
    /**
     * Setea el atributo
     * @param string $altFoto
     */
    public function setAltFoto($altFoto)
    {
        $this->altFoto = $altFoto;
    }
    /**
     * Setea el atributo
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
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
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * Setea el atributo
     * @param string $extension
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
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
     * Setea el atributo
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }
}
