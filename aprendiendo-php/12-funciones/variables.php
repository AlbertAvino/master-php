<?php

/* 
 * Variables locales
 * son las que se declaran dentro de una funcion y no pueden 
 * ser usadas fuera de la funcion, solo estan disponibles dentro.
 * A no ser que hagamos un return
 * 
 * Variables gloales
 * las que se declaran fuera de una funcion i estan disponibles 
 * dentro y fuera de las funciones
 */

// variable global
$frase = "Ni los genios son tan genios, ni los mediocres tan mediocres";


echo $frase;

function holaMundo(){
    // s'ha de declarar com a global per 
    // poderla fer servi a la funcio
    global $frase;
    echo "<h1>$frase</h1>";
    
    $year = 2019;
    echo "<h1>$year</h1>";
    
    return "per imprimir la variable year : $year";
}
holaMundo();
// d'aquesta forma imprimeix el return de year
echo holaMundo();


// funciones variables 
echo "<hr>";
function buenasDias(){
    return "Hola! Buenos dias";
}
function buenasTardes(){
    return "Hey! Que tal ha ido la comida";    
}

function buenasNoches(){
    return "¿Te vas a dormir ya? Buenas Noches !";
}
$horario = "buenasNoches";
echo $horario;
echo "<hr>";

// imprimeix la funcio de buenasNoches();
echo $horario();
echo "<hr>";
// altres formas de imprimir la funcio
// imprimira les funcions de 
// buenasTardes() o buenasNoches() en el seu apartat 
// dins la variable $miFuncion();
$horario = "Noches";
// tambe es pot pasar per variable de la seguent forma
// $horario = $_GET['horario'];
$miFuncion = "buenas".$horario;
echo $miFuncion();
echo "<br/>";
$horario = "Tardes";
$miFuncion = "buenas".$horario;
echo $miFuncion();
echo "<hr>";


?>