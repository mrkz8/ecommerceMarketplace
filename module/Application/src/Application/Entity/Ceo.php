<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Entity;


/**
 * Clase Abstracta para el 
 *
 * @author rikardo
 */
abstract class Ceo
{
    /**
     * Transformacion de una variable en ceo
     * @param string $string
     */
    public function convertCeo($string)
    {
        $respuesta = $string;
        return $respuesta;
    }
}
