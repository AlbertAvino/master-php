<?php

/* 
 * Ejercicio 3
 * 
 * comprovar si una variable esta vacia y si esta vacia, 
 * rellenarla con texto en minuscula y mostrarlo en mayusculas y negrita
 */


$texto = "";

if (empty($texto)){
    $texto = "hola soy el relleno de la variable texto";
    $textoMayus = strtoupper($texto);
    echo "<strong>$textoMayus</strong>";
}

