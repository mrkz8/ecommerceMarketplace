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
 * Datos de la tienda 
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="tags")
 */
class Tags extends Ceo
{
    /**
     * Id de la tienda
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * tags
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $nombre;
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
}