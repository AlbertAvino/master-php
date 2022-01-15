<?php

/* 
 * ejercicio 3.
 * escribir un programa que imprima por pantalla
 * los cuadrados ( un numero multiplicado por si mismo)
 * de los primeros 40 numero naturales
 * utilizando while
 */


$i = 0;

while ($i<= 40 ){
    $cuadrat = $i * $i;
    echo "<h3>El cuadrado de $i es $cuadrat</h3>";
    $i++;    
}
// amb bucle for
echo "<hr>";
for ($i = 0;$i<= 40;$i++ ){
    $cuadrat = $i * $i;
    echo "<h3>El cuadrado de $i es $cuadrat</h3>";
    
}
       


