<?php

/* 
 * Ejercicio 2.
 * 
 * añadir valores a un array mientras que su longitud sea menor a 120
 * y luego mostrarlo en pantalla
 */

$coleccion = array();
for($i = 0 ; $i <120 ; $i++){
    array_push($coleccion, rand(0,500));    
}

foreach ($coleccion as $item){
    echo "<h5>$item</h5>";
}

