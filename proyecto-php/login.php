<?php
// Iniciar la sessio y la conexio a la bbdd
require_once 'includes/conexion.php';
// recollir les dades del formulari

if (isset($_POST)){
    // borrar error antiguo
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
    }
    // recollim dades
    $email = $_POST['email'] ;
    $password = $_POST['password'] ;
   
    // consulta a bbdd per comprovar les credencials del usuari    
    $sql = "SELECT * FROM usuarios where email = '$email' ";
    $login = mysqli_query($db, $sql);
    
    
    if ( $login && mysqli_num_rows($login) == 1){
        $usuario = mysqli_fetch_assoc($login);
        
        // comprovar la password / cifrarla    
        $verify = password_verify($password, $usuario['password']);
        
        if ($verify){
            // fer servir una sessio per guardar les dades del usuari logejad  
            $_SESSION['usuario'] = $usuario;      
        }
        else
        {
          // si alguna cosa falla enviar una sessio amb el fallo  
            $_SESSION['error_login'] = "Login incorrecto!!";
        }
    }else{
        $_SESSION['error_login'] = "Login incorrecto!!";
    }
    
    header('Location: index.php');
    
    
}









// redirifir al index
