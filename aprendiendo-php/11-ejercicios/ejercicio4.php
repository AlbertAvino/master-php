<?php

/* 
 * Ejercicio 4
 * 
 * Agafar 2 numeros per get
 * 
 * fer totes les operacions matematiques
 * 
 */
if(isset($_GET['numero1']) && isset($_GET['numero2']) ){
    
$numero1 = $_GET['numero1'];
$numero2 = $_GET['numero2'];

echo "<h3>La suma es ".($numero1+$numero2)."</h3>";
echo "<h3>La resta es ".($numero1-$numero2)."</h3>";
echo "<h3>La multiplicacion es ".($numero1*$numero2)."</h3>";
echo "<h3>La division es ".($numero1/$numero2)."</h3>";
echo "<h3>El resto  es ".($numero1%$numero2)."</h3>";
} else {
echo "<h1>Introduir els valors per la URL </h1>";    
}
?>

