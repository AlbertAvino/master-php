<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <title>Validacion de formularios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Validar formularios en PHP</h1>
        
        <?php 
            If (isset($_GET['error'])){
                $error = $_GET['error'];
                if ($error == "faltan_valores"){
                    echo '<strong style="color:red">Introduce todos los datos en todos los campos</strong>';
                }
                if ($error == "nombre"){
                    echo '<strong style="color:red">Introduce bien el nombre</strong>';
                }
                if ($error == "apellidos"){
                    echo '<strong style="color:red">Los apellidos no son correctos</strong>';
                }
                if ($error == "email"){
                    echo '<strong style="color:red">Introduce email correcto</strong>';
                }
                if ($error == "edad"){
                    echo '<strong style="color:red">Introduce una edad correcta</strong>';
                }
                if ($error == "password"){
                    echo '<strong style="color:red">Introduce contraseña de mas de 5 caracteres</strong>';
                }
            }
            
        ?>
        
        <form method="POST" action="procesar_formulario.php" >
            <label for="nombre">Nombre</label><br/>
            <input type="text" name="nombre" required="required" pattern="[A-Z a-z]+"/><br/>
            
            <label for="apellido">Apellido</label><br/>
            <input type="text" name="apellidos" required="required" pattern="[A-Z a-z]+"/><br/>
            
            <label for="edad">Edad</label><br/>
            <input type="number" name="edad" required="required" pattern="[0-9]+"/><br/>
            
            <label for="email">Email</label><br/>
            <input type="email" name="email" required="required"/><br/>
            
            <label for="pass">Contraseña</label><br/>
            <input type="password" name="pass" required="required" minlength="5"/><br/>
            
            <input type="submit" value="Enviar"/><br/>
                   
                
                
        </form>
    </body>
</html>
