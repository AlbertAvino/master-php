<?php
    $error = "faltan_valores";

    if( !empty($_POST['nombre']) && !empty($_POST['apellidos']) &&
        !empty($_POST['edad'])   && !empty($_POST['email']) &&
        !empty($_POST['pass']) ){
            $error = "ok";
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $edad = (int)$_POST['edad'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            
            if(!is_string($nombre) || !preg_match("/[a-z A-Z]+/", $nombre)){
                $error='nombre';                
            }
            if(!is_string($apellidos) || !preg_match("/[a-z A-Z]+/", $apellidos)){
                $error='apellidos';                
            }
            if(!is_int($edad) || !filter_var($edad,FILTER_VALIDATE_INT)){
                $error='edad';                
            }
            
            if(!is_string($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error='email';                
            }
            if(empty($pass) || strlen($pass)< 5){
                $error='password';                
            }
            /*
            var_dump($_POST);
            var_dump($error);
            */
            
        }else{
            
            header("Location:index.php?error=$error");
        }
        if ($error != "ok"){
            header("Location:index.php?error=$error");
        }
        
?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Validacion de formularios PHP</title>
    </head>
    <body>
        <?php if($error=='ok'): ?>
        <p><?=$nombre?></p>
        <p><?=$apellidos?></p>
        <p><?=$edad?></p>
        <p><?=$email?></p>
        
        <?php        endif;?>
    </body>

</html>
