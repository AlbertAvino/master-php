<?php

/*
 * CONDICIONALES
 * 
 * IF : 
 *  if (condicion){
 *      instrucciones 
 *  }
 *  else {
 *      otras instrucciones
 *  }
 * 
 * Operadores de comparación
 * ==   ->  igual
 * ===  ->  idéntico
 * !=   ->  diferente
 * <>   ->  diferente
 * !==  ->  no idéntico
 * <    ->  menor que
 * >    ->  mayor que
 * <=   ->  menor o igual que
 * >=   ->  mayor o igual que
 * 
 * Operadores lógicos
 * &&   -> AND y
 * ||   -> OR o 
 * !    -> NOT no 
 * and, or 
 * 
 */

// ejemplo 1
$color = 'verde';

if ($color == "rojo"){
    echo 'El color es rojo';
}else {
    echo 'El color NO es rojo';
}

echo '<br/>';
// ejemplo 2
$year = 2019;

if($year == 2019){
    echo 'Estamos en el 2019';
}else {
    echo 'No estamos en el 2019';
}

// ejemplo 3
$nombre = 'David Extremadura';
$ciudad = 'Madrid';
$continente = 'Asia';

$edad = 42;
$mayoria_edad = 18;

if ($edad >= $mayoria_edad){
    echo "<h1>$nombre es mayor de edad</h1>";
    if ($continente == 'Europa'){
        echo "<h2>Y es de $ciudad</h2>";    
    }else{
        echo "No es de Europa";
    }
}else {
    echo "<h1>$nombre NO es mayor de edad</h1>";
}

// ejemplo 4
echo "<hr>";
$dia = 4;

if ($dia == 1){
    echo "Es Lunes";
}elseif ($dia == 2){
    echo "Es Martes";
}elseif ($dia == 3){
    echo "Es Miércoles";
}elseif ($dia == 4){
    echo "Es Jueves";
}elseif ($dia == 5){
    echo "Es Viernes";
}else {
    echo "Es fin de semana";
}
// ejemplo 5
echo "<hr>";
$edad1 = 18;
$edad2 = 64; 

$edad_oficial = 20;

if ($edad_oficial >= $edad1 && $edad_oficial<= $edad2){
    echo 'Esta en edad de trabajar';
}else {
    echo 'No puede trabajar';
}
echo "<hr>";
$pais ='Mexico';
if($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia'){
    echo 'En este país se habla español';
}else {
    echo 'En este país NO se habla español';
}

echo "<hr>";

//swhich

$dia = 1;

switch ($dia){
    case 1: 
        echo "Lunes";
        break;
    case 2: 
        echo "Mares";
        break;
    case 3: 
        echo "Miércoles";
        break;
    case 4: 
        echo "Jueves";
        break;
    case 5: 
        echo "Viernes";
        break;
    default : 
        echo "Es fin de semana";
        break;        
}

// GOTO
echo '<hr>';

//goto marca;
echo '<h3> instrucción 1 </h3>';
echo '<h3> instrucción 2 </h3>';
echo '<h3> instrucción 3 </h3>';
echo '<h3> instrucción 4 </h3>';
echo '<h3> instrucción 5 </h3>';

marca:
    echo '<h1>Me he saltado 5 echo</h1>';




?>
