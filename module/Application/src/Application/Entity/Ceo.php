<?php
/**
 * @author Ricardo Ruiz <rrcfesc@gmail.com>
 * @version 1.0
 * @copyright (c) 2015, Yaguer.com
 */
namespace Application\Entity;

/**
 * Clase Abstracta para el Ceo
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
        $respuesta = parse_url($string);
        return $respuesta;
    }
    /**
     * Regresa los valores del Objecto en un array
     * @return Array
     */
    public function exchangeArray()
    {
        $respuesta = get_object_vars($this);
        return $respuesta;
    }
}
