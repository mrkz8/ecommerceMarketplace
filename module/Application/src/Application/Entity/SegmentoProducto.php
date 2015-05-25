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
 * Segmentación de una tienda
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="segmentoproducto")
 */
class SegmentoProducto extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Producto
     * @var integer
     * @ORM\Column(type="integer", nullable=true)
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $producto;
    /**
     * Segmento
     * @var integer
     * @ORM\Column(type="integer", nullable=true)
     * @ORM\ManyToOne(targetEntity="Segmento")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $segmento;
    /**
     * Regresa el Id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Regresa el objecto
     * @return Object
     */
    public function getProducto()
    {
        return $this->producto;
    }
    /**
     * Regresa el object
     * @return Object
     */
    public function getSegmento()
    {
        return $this->segmento;
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
     * Setea el Objecto
     * @param Object $producto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }
    /**
     * Setea el Objecto
     * @param Object $segmento
     */
    public function setSegmento($segmento)
    {
        $this->segmento = $segmento;
    }
}