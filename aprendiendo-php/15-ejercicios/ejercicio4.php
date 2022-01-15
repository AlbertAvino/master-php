<?php

/* 
 * Ejercicio 4
 * 
 * 4 variables 
 * una de tipo array, otra string, otra int, otra boleana  y mostrar el mensaje segun el tipo
 */



$matriz = array("Hola mundo",88);
$titulo = "master";
$numero = 35;
$verdadero = true;

if (is_array($matriz)){
    echo "<h1>El array es un array</h1>";
}

if (is_string($titulo)){
    echo "<h1>$titulo</h1>";
}

if (is_int($numero)){
    echo "<h1>$numero</h1>";
}

if (is_bool($verdadero)){
    echo "<h1>El boleano es verdadero</h1>";
}
