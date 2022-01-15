<?php

if(isset($_COOKIE['micookie'])){
    unset($_COOKIE['micookie']);
    setcookie('micookie','',time()-10);
}
// redirecciona
header('Location:ver_cookies.php');
?>