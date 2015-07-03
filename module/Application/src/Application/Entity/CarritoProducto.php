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
 * Datos del carrito
 * @version 1.0
 * @ORM\Entity
 * @ORM\Table(name="carritoproducto")
 */
class CarritoProducto extends Ceo
{
    /**
     * Id
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
      * Id del carrito
     * @var integer
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $carrito;
    /**
     * Id 
     * @var integer
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumn(referencedColumnName="id")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $producto;
    public function getId()
    {
        return $this->id;
    }

    public function getCarrito()
    {
        return $this->carrito;
    }

    public function getProducto()
    {
        return $this->producto;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setCarrito($carrito)
    {
        $this->carrito = $carrito;
    }

    public function setProducto($producto)
    {
        $this->producto = $producto;
    }
}
