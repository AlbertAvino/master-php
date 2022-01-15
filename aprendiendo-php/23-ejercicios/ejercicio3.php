<?php

/* 
 * Ejercicio 3
 * 
 * Hacer una interfaz de usuario(formulario)
 * con dos inputs y 4 botones
 * uno para sumar, restar, dividir y multiplicar
 */
$resultado = false;
if(isset($_POST['n1'])&&isset($_POST['n2'])){
    
    
    if (isset($_POST['sumar'])){
        $resultado = "El resultado es :".($_POST['n1'] + $_POST['n2']);
    }
    if (isset($_POST['rest'])){
        $resultado = "El resultado es :".($_POST['n1'] - $_POST['n2']);
    }
    if (isset($_POST['multi'])){
        $resultado = "El resultado es :".($_POST['n1'] * $_POST['n2']);
    }
    if (isset($_POST['div'])){
        $resultado = "El resultado es :".($_POST['n1'] / $_POST['n2']);
    }
    
}

?>
<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>Ejercicio 3 calculadora</title>
    </head>
    <body>
        <H1>Calculadora PHP</h1>
        <form action="" method="POST">
            <label for="n1">Número 1</label><br/>
            <input type="number" name="n1"/><br/>
            
            <label for="n2">Número 2</label><br/>
            <input type="number" name="n2"/>
            <br/>
            <br/>
            
            <input type="submit" value="Sumar" name="sumar"/>
            <input type="submit" value="Restar" name="rest"/>
            <input type="submit" value="Multiplicar" name="multi"/>
            <input type="submit" value="Dividir" name="div"/>
                
        </form>
        
        <?php 
            if ( $resultado != false):
               echo $resultado; 
            endif;
        ?>
    </body>
        
        
        
        
</html>
