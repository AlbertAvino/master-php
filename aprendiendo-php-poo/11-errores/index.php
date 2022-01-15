<?php

// per capturar excepcion, en codi susceptibles a errors
try{
    if (isset($_GET['id'])){
        echo "<h1>El parametro es : {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltan pasar parametros por la url');    
    }
    
} catch (Exception $ex) {
    echo "Ha habido un error : ".$ex->getMessage();
} 
