<?php

/*
 * Coockes
 * 
 * es un fichero que se almacena en el ordenador del usuario que visita
 * la web, con el fin de recordar datos o rastrear el comportamiento del 
 * mismo en la web
 * 
 */

// crear cookies
// setcookie("nombre","valor que solo puede ser texto",caducidad, ruta, dominio);

// cookie basica
setcookie("micookie","valor de mi galleta");

// cookie con expiracion
// 60 segundos * 60 minutos * 24 horas * 365 dias
setcookie("unyear","valor de mi cookie de 365 dias", time() + (60*60*24*365));// cookie que dura un año
header('Location:ver_cookies.php');
?>

