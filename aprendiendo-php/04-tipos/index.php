<?php

/* 
 * Tipos de datos :
 * entero (int / integer) - 99
 * coma flotante / decimales ( float / double) - 3.45
 * cadena (string) - "Hola yo soy un string"
 * boleano (bool) - true false
 * null 
 * Array (coleccion de datos)
 * objetos
 */
$numero = 100;
$decimal = 27.9;
// per tema de velocitat al server es millor fer servir cometes simples
// \n salt de linea
// per caracters especials es posa \ per poder mostrar 
$texto = "soy un texto";


$verdadero = true;

$nula = null;

echo gettype($numero)."<br>";
echo gettype($decimal)."<br>";
echo gettype($texto)."<br>";
echo gettype($verdadero)."<br>";
echo gettype($nula)."<br>";

// debugear 

$mi_nombre = "Albert Aviñó Teixidó";
// ens mostra informacio de la variable, tant com tipus i contingut de la variable
var_dump($mi_nombre);

?>