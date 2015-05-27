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
 * @ORM\Table(name="cliente")
 */
class Cliente extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Nombre del producto
     * @var string
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $red;
    /**
     * Nombre de usuario
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $username;
    /**
     * Email
     * @var string
     * @ORM\Column(type="string", unique=true, length=80, nullable=false)
     */
    private $email;
    /**
     * Nombre del producto
     * @var string
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $password;
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
     * Regresa el Id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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
     * regresa si esta activo
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
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
     * Regresa el atributo
     * @return string
     */
    public function getRed()
    {
        return $this->red;
    }
    /**
     * Setea el atributo
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
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
     * Regresa el Password
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
    /**
     * Setea la red
     * @param string $red
     */
    public function setRed($red)
    {
        $this->red = $red;
    }
    /**
     * Setea el atributo
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}