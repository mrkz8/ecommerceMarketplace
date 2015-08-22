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
    public function getCeo()
    {
        $texto              = $this->getNombre();
        $textoSinAcentos    = $this->quitarAcentos($texto);
        $textoCaracteres    = str_replace(array("'", '"', '~', '.'), '', $textoSinAcentos);
        $textoMinusculas    = strtolower($textoCaracteres);
        $textoParse         = trim(preg_replace('/[^ A-Za-z0-9_]/', ' ', $textoMinusculas) ); 
        $textoReplace       = preg_replace("/[ \t\n\r]+/", '-', $textoParse);
        $respuesta          = preg_replace("/[ -]+/", '-', $textoReplace);
        return $respuesta;
    }
    /**
    * Convierte los acentos a letras normales
    * 
    * @version 1.0
    * @param string $valor
    * @return string
    */
   public function quitarAcentos($valor)
   {
        return str_replace(
            array('Á','À','Ä','á','à','ä','É','È','Ë','é','è','ë','Í','Ì','Ï','í','ì','ï','Ó','Ò','Ö','ó','ò','ö','Ú','Ù','Ü','ú','ù','ü', 'ñ', 'Ñ'),
            array('A','A','A','a','a','a','E','E','E','e','e','e','I','I','I','i','i','i','O','O','O','o','o','o','U','U','U','u','u','u', 'n', 'N'),
            $valor);
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
