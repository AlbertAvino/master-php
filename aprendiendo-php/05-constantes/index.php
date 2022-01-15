<?php

    // Constantes
    // es un contenedor de informacion que no puede variar
    
    define('nombre','Albert Aviñó');
    define('web','paginaweb.com');   
    // les constants es fan servir sense el signe de $ com les variables
    echo '<h1>'.nombre.'</h1><br/>';
    echo web.'<br>';
    
    // constants predefinides
    echo PHP_OS .'<br>'; // sistema operatiu
    echo PHP_VERSION.'<br>'; // versio del php
    echo PHP_EXTENSION_DIR.'<br>'; // mostra la direccio de les extencions
    echo __LINE__.'<br>'; //mostra la linea on s'ha introduit aquest parametre
    echo __FILE__.'<br>'; // ruta completa d'aquest archiu
    echo __FUNCTION__; // mostraria el nom de la funcio on esta
    
?>

