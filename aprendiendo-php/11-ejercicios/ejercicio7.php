<?php

/* 
 * mostrar 2 numero que nos lleguen entre 2 get 
 * i mostrar els imparells
 */

if(isset($_GET['numero1']) && isset($_GET['numero2']) )
{    
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    
    
    If ($numero1 < $numero2){
        
        echo "<h1>Los numeros entre $numero1 y $numero2 son :</h1>";
        
        for ($i = $numero1 ; $i <= $numero2 ;$i++){
            if ($i%2 != 0){
                echo $i.'<br/>';            
            }
        }    
    }
    else
    {
        echo "<h1> el numero 1 debe ser menor que el numero 2</h1>";
    }
}
else
{
    echo "Los parametros Get no existen";
}
?>