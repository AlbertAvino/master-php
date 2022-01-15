<?php

/*
 * para mostrar el valor de las cookies, tengo que usar $_COOKIE,
 * es una variable superglobal, es un array associativo.
 * 
*/

if(isset($_COOKIE['micookie'])){
    echo "<h1>".$_COOKIE['micookie']."</h1>";
}
 else {
    echo "<h1>No existe la cookie</h1>";
 }
 
 if(isset($_COOKIE['unyear'])){
    echo "<h1>".$_COOKIE['unyear']."</h1>";
}
 else {
    echo "<h1>No existe la cookie</h1>";
}
?>
<a href="crear_cookies.php" >Crear mis cookies</a>
<a href="borrar_cookies.php" >Borrar mis cookies</a>