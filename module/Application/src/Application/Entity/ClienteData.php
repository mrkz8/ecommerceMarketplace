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
 * @ORM\Table(name="clientedata")
 */
class ClienteData extends Ceo
{
    /**
     * Id
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * Nombre de usuario
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $nombre;
    /**
     * Apellido del usuario de usuario
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $apellido;
    /**
     * Fecha de nac
     * @var datetime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $fechaNacimiento;
    /**
     * Fecha de registro
     * @var datetime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $registro;
    /**
     * Apellido del usuario de usuario
     * @var string
     * @ORM\Column(type="string", length=2)
     */
    private $sexo;
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
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    /**
     * Regresa el atributo
     * @return DateTime
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
    /**
     * Regresa el atributo
     * @return DateTime
     */
    public function getRegistro()
    {
        return $this->registro;
    }
    /**
     * Regresa el atributp
     * @return string
     */
    public function getSexo()
    {
        return $this->sexo;
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
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    /**
     * Setea el atributo
     * @param DateTime $fechaNacimiento
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }
    /**
     * Setea el atributo
     * @param DateTime $registro
     */
    public function setRegistro($registro)
    {
        $this->registro = $registro;
    }
    /**
     * Setea el atributo
     * @param string $sexo
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }
}