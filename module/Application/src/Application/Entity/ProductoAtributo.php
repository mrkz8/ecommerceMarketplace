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
 * @ORM\Table(name="productoatributo")
 */
class ProductoAtributo extends Ceo
{
    /**
     * Id
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    * @ORM\Column(type="integer")
    */
    private $id;
    /**
     * Id del producto
     * @var integer
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $producto;
    /**
     * Id del atributo
     * @var integer
     * @ORM\ManyToOne(targetEntity="Atributo")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $atributo;
    /**
     * Valor del atributo
     * @var string
     * @ORM\Column(type="string", length=80, nullable=false)
     */
    private $valor;
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
     * @return object
     */
    public function getProducto()
    {
        return $this->producto;
    }
    /**
     * Regresa el atributo
     * @return Object
     */
    public function getAtributo()
    {
        return $this->atributo;
    }
    /**
     * Regresa el valor
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
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
     * Setea el object
     * @param object $producto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;
    }
    /**
     * Seteea el object
     * @param object $atributo
     */
    public function setAtributo($atributo)
    {
        $this->atributo = $atributo;
    }
    /**
     * Setea el atributo
     * @param string $valor
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    }
}
