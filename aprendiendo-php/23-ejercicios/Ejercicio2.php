<?php

/* 
 * Ejercicio 2
 * 1. Una funcion
 * 2. Validar un email con filter_Var
 * 3. Recojer una variable por GET y validarla
 * 4. Mostrar el resultado
 */

function validar($email){
    $status = "No valido";
    if (!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)){
        $status = "valido";
    }
    return $status;
}
if (isset($_GET['email'])){
    echo validar($_GET['email']);
}else {
    echo "Pasa por get un email...";
}

