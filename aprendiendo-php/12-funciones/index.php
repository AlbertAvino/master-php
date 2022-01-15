<?php

/* 
 * FUNCIONES
 * es un conjunto de instrucciones agrupadas 
 * bajo un nombre en concreto y que pueden 
 * reutilizarse solamente invocando a la 
 * funcion antas veces como queramos
 * 
 * declarar
 * function nombreDeMiFuncion($parametro){
 *      // bloque / conjundo de instrucciones
 * }
 * 
 * para usar
 * nombreDeMiFuncion($mi_parametro);
 * 
 */

// Ejemplo 1

function muestraNombres(){
    echo "Victor <br/>";
    echo "Juan <br/>";
    echo "Jose <br/>";
    echo "Alvaro <br/>";
    
}
// invocar funcion
muestraNombres();

// Ejemplo 2
function tabla($numero){
    echo "<h3>Tabla de multiplicar de $numero</h3>";
    for ($i = 0; $i <= 10; $i++){
        echo "<p>$numero x $i = ".($i*$numero)."</p>";
    }
}
if(isset($_GET['numero']))
{
    tabla ($_GET['numero']);
}
else{
    echo "no hay numero para multiplicar";
}

// Ejemplo 3

function calculadora($numero1,$numero2,$negrita = false){
    // conjunto de instrucciones a ejecutar
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multi = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    
    $cadena_texto = "";
    if ($negrita ){
        $cadena_texto .= "<h1>";
    }
    
    $cadena_texto .=  "Suma : $suma<br/>";
    $cadena_texto .=  "Resta : $resta<br/>";
    $cadena_texto .=  "Multiplicación : $multi<br/>";
    $cadena_texto .=  "División : $division<br/>";
    
    if ($negrita ){
        $cadena_texto .=  "</h1>";
    }
    
    return $cadena_texto;
}

echo calculadora(10,30);
echo calculadora(20,10,true);
echo "<hr>";
// funcio amb return
function devuelveElNombre($nombre){
    return "El nombre es : $nombre";
}

echo devuelveElNombre("Don Pepito");

echo "<hr>";

//ejemplo 4

function getNombre($nombre){
    $texto =  "El nombre es : $nombre";
    return $texto;
}
function getApellido($apellido){
    $texto =  "Los apellidos son : $apellido";
    return $texto;
}

function devuelveElNombrecompleto($nombre,$apellidos){
    $texto = getNombre($nombre).
                "<br/>".
                getApellido($apellidos);
    return $texto;
}

echo devuelveElNombrecompleto('Juan', 'Fernandez');
