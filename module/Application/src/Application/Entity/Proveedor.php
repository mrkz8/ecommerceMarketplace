<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/** 
 * Datos del ciclo escolar
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="proveedor")
 */
class Proveedor
{
    /**
     * Id del cilo
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Nombre del proveedor
     * @var string
     * @ORM\Column(type="string", length=200, nullable=false)
     */
    private $nombre;
    /**
     * Apellido Paterno del usuario
     * @var string
     * @ORM\Column(type="string", length=200, nullable=false)
     */
    private $apellido;
    /**
     * Email del usuario
     * @var string
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $email;
    /**
     * Numero telefónico
     * @var string
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $telefono;
    /**
     * @var integer
     * @ORM\ManyToOne(targetEntity="Direccion")
     * @ORM\Column(columnDefinition="INT DEFAULT 1 NOT NULL")
     * @ORM\JoinColumn(referencedColumnName="id", nullable=false)
     */
    private $direccion;
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
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Regresa el atributo
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    /**
     * Regresa el atributo
     * @return object
     */
    public function getDireccion()
    {
        return $this->direccion;
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
     * Setea el atributp
     * @param string $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }
    /**
     * Setea el atributo
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * Setea el atributo
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }
    /**
     * Setea el atributo
     * @param dyting $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    /**
     * Regresa una copia del objeto actual
     * @return array
     */
    public function exchageArray()
    {
        $respuesta = get_object_vars($this);
        return $respuesta;
    }
}
