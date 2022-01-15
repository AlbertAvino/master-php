<?php

// operadors aritmétics
$numero1 = 55;
$numero2 = 33;

echo 'Suma : ' . ($numero1 + $numero2) . '<br/>';
echo 'Resta : ' . ($numero1 - $numero2) . '<br/>';
echo 'Multiplicación : ' . ($numero1 * $numero2) . '<br/>';
echo 'Division : ' . ($numero1 / $numero2) . '<br/>';
echo 'Resto :' . ($numero1%$numero2);

// operadores de incremento y decremento

$year = 2019;

echo '<h2>' . $year . '</h2><br/>';
// incrementa
$year++;
echo '<h3>' . $year . '</h3><br/>';
// decremento 
$year--;
echo '<h3>' . $year . '</h3><br/>';
// Pre-incremento
// 1+$year
++$year;
echo '<h3>' . $year . '</h3><br/>';
// Pre-decremento 
// 1-$year
--$year;
echo '<h3>' . $year . '</h3><br/>';

// operadores de asignación

$edad = 55;

echo  $edad . '<br/>';

// $edad = $edad + 5 
echo ($edad+=5) . '<br/>';

echo ($edad-=5) .'<br/>';
echo ($edad*=5) .'<br/>';
echo ($edad/=5) .'<br/>';



?>
