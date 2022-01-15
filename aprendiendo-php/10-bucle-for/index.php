<?php

// BUCLE FOR
/*
 *  for (variable contador, condición, actualiza contador){
 *      bloque de instrucciones 
 *  }
 *   */
    
$resultado = 0;

for ($i = 0; $i<=100;$i++){
    //$resultado = $resultado + $i;
           
    $resultado += $i;    
}
echo "<h1> El resultado es : $resultado </h1>";
echo '<hr/>';

if (isset($_GET['numero'])){     
     $numero = (int)$_GET['numero'];     
} else {
    $numero = 1;
}
 
 echo "<h1>Tabla de multiplicar del número $numero</h1>";
 $contador = 0;
 for($contador = 0; $contador <=10 ; $contador++){
     if ($numero == 45){
         echo "No se pueden mostrar estas operaciones prohibidas";
         break;
     }
     echo "$numero + $contador = ".($numero*$contador).'<br/>' ;
   
 }



?>
