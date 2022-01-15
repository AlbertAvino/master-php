<?php

/* 
 * 
 */
// debuguear
$nombre = "Albert Aviñó";
var_dump($nombre);

// fechas
echo date('d-m-Y');// d => dia, m => mes, Y => any
echo "<br/>";
// fecha en formato unix
// canvia per cada segon que pasa
echo time();
echo "<br/>";
// matematiques
echo "Raiz cuadrada de 10 : " . sqrt(10);
echo "<br/>";

// random
echo "Numero aleatorio entre 10 y 40 : " . rand(10,40);
echo "<br/>";
// sacarp pi
echo "Numerp pi : " . pi();
echo "<br/>";
// redondear
echo "Redondeo : " . round(pi(),4);
echo "<br/>";

echo "<hr/>";
// Mas funciones Generales

echo gettype($nombre);
echo "<br/>";

// detectar tipado
if (is_string($nombre)){
    echo "esta variable es un string";
}
echo "<br/>";
if (!is_float($nombre)){
    echo "La variable no es un numero con decimales";
}
echo "<br/>";
// detectar si existeix variables
if (isset($edad)){
    echo "la variable existe";
}else{
    echo "la variable no existe";
}
echo "<br/>";

// neteja espais 
$frase = "  mi contenido  " ;
echo var_dump($frase);
echo var_dump(trim($frase));

echo "<br/>";

// eliminar variables / indices array

$year = 2020;
var_dump($year);
unset($year);
var_dump($year);

echo "<hr/>";

// comprovar variable buida i si existeix

$texto = null;

if (empty($texto)){
    echo "La variable texto esta vacia";
}else {
    echo "La variable tiene contenido";
}


echo "<br/>";

// contar caracters d'un string
$cadena = "12345678";
echo strlen($cadena);

echo "<br/>";

// encontrar caracter
$frase = "La vida es bella";
echo strpos($frase, "vida");

echo "<br/>";
echo $frase;
echo "<br/>";
// reemplacar palavbras en un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;

echo "<br/>";

// mayuculas o minusculas

echo strtolower($frase);
echo "<br/>";
echo strtoupper($frase);

echo "<br/>";







