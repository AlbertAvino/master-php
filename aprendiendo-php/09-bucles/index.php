<?php

    //  BUCLE WHILE
    /*  estructura de contol que itera o repite la ejecución 
     * de una sere de instrucciones tantas veces como sea 
     *  necesario, en base a una condición     
     *
     *  while (condicion){
     *      bloque de instrucciones
     *  } 
    */
echo '</hr>';

$numero = 0;
 while ($numero <=100){
     echo $numero;
     if($numero != 100){
         echo ", ";
     }
     $numero++;
 }
 
 // ejemplo
 // isset es per si la variable existeix, es veura a posteriori
 if (isset($_GET['numero'])){
     // Cambiar tipo de dato
     $numero = (int)$_GET['numero'];     
 }
 else
 {
     $numero = 1;
 }
 
 echo "<h1>Tabla de multiplicar del número $numero</h1>";
 $contador = 0;
 while ($contador <=10){
     echo "$numero + $contador = ".($numero*$contador).'<br/>' ;
     $contador++;
 }
 
 echo '<hr/>';
 // Do while
 /* do {     
     // bloque de instrucciones
    }while (condicion);
 */
 $edad = 17;
 $contador = 1;
 
 do {
    echo "tienes acceso al local privado $contador <br>";
    $contador++;
 } while ($edad >=18 && $contador <=10);
 
         

?>