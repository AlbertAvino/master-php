<?php
if (isset($_POST)){
    
    require_once 'includes/conexion.php';
    // agafem els valors del formulari de actualizacion
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db,$_POST['nombre']) : false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db,$_POST['apellidos']) : false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db,trim($_POST['email'])) : false;
    
    
    // Array de errores 
    $errores = array();
    // validem les dades abans de guardar les dades
    
    // validem el nom 
    if (!empty($nombre) && !is_numeric($nombre) && !preg_match('/[0-9]/', $nombre)){
        $nombre_validado = true;
    }else {
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es válido";
    }
    // validem cognoms
    if (!empty($apellidos) && !is_numeric($apellidos) && !preg_match('/[0-9]/', $apellidos)){
        
        $apellidos_validado = true;
    }else {
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son válidos";
    }
    //validem el correu
    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else {
        $email_validado = false;
        $errores['email'] = "El mail no es válido";
    }
    $guardar_usuario = false;
    if (count($errores) == 0){
        // Insertem usuari a la base de dades
        $guardar_usuario = true;        
        // Actualitzar usuari en la bbdd
        $usuario = $_SESSION['usuario'];
        // comprovar que el email introduit existeix
        
        $sql = "SELECT email from usuarios WHERE email='$email'";
        $isset_email = mysqli_query($db, $sql);
        $isset_user = mysqli_fetch_assoc($isset_email);
        if ($isset_user['id'] == $usuario['id'] || empty($isset_user)){
            $sql = "UPDATE usuarios SET ".
                    "nombre = '$nombre' ,".
                    "apellidos = '$apellidos' ,".
                    "email = '$email' ".
                    "where id = ".$usuario['id'];

            $guardar = mysqli_query($db, $sql);

            if ($guardar){
                $_SESSION['usuario']['nombre'] = $nombre;
                $_SESSION['usuario']['apellidos'] = $apellidos;
                $_SESSION['usuario']['email'] = $email;
                $_SESSION['completado'] = 'Tus datos se han actualizado con éxito';
            }else{
                $_SESSION['errores']['general'] = "Fallo al actualizar tus datos!!";
            }     
        } 
        else
        {
            $_SESSION['errores']['general'] = "El usuario ya existe!!";
        }
    }else{
        $_SESSION['errores'] = $errores;        
    }   
    
    header('Location: mis-datos.php');
    
    
    
}