<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$archivo = $_FILES['archivo'];
//var_dump($archivo);
$nombre = $archivo['name'];
$tipo = $archivo['type'];
if ($tipo == "image/jpg" || $tipo == "image/jpeg" ||
    $tipo == "image/png" || $tipo == "image/gif"  ){
    if (!is_dir('images')){
        mkdir('images',0777);
    }
    // actualitza la pagina i redirigeix als 5 segons
    header("Refresh: 5; URL=index.php");
    move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
    echo "<h1>Imagen subida correctamente</h1>";
}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>sube una imagen con un formato correcto, por favor...</h1>";
    
}

