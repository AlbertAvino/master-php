
<?php

/* 
 * Ejercicio 5
 * 
 * crear un array con el contenido de la siguiente tabla
 * Accion   aventura    deportes
 * GTA      Assasins    FIFA
 * COD      CRASH       PES
 * PUGB     PRINCE OF   MOTO GP
 * 
 * i mostrarla en HTML
 * cada fila en un fichero separado (includes)
 */

$tabla = array(
    "Accion" => array("GTA","COD","PUGB"),
    "Aventura" => array ("ASSASINS CREED","CRASH BANDICOOT","PRINCE OF PERSIA"),
    "Deportes" => array ("FIFA","PES","MOTO GP")    
);
$categorias = array_keys($tabla);
?>

<table border="1">
    <?php require_once 'ejercicio5/encabezados.php';?>   
    <?php require_once 'ejercicio5/primera.php';?>   
    <?php require_once 'ejercicio5/segunda.php';?>   
    <?php require_once 'ejercicio5/tercera.php';?> 
</table>


