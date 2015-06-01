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
 * @ORM\Table(name="boletin")
 */
class Boletin extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Email
     * @var string
     * @ORM\Column(type="string", unique=true, length=80, nullable=false)
     */
    private $email;
    /**
     * Fecha en la que se creo
     * @var datetime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $fecha;
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
    public function getEmail()
    {
        return $this->email;
    }
    /**
     * Regresa el atributo
     * @return Datetime
     */
    public function getFecha()
    {
        return $this->fecha;
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
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    /**
     * Setea el atributo
     * @param DateTime $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }
}