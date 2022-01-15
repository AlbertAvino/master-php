<?php

if (isset($_POST)){
    // conexio a la bbdd
    require_once 'includes/conexion.php';
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']) : false;
    //array de errores
    $errores = array();
    // validem les dades abans de guardar les dades
    
    // validem el nom 
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)){
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    if (count($errores) == 0){
        $sql = "INSERT INTO categorias VALUES (NULL,'$nombre');";
        $guardar = mysqli_query($db,$sql);        
    }
    
    
}

 header('Location: index.php');