<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!is_dir('mi_carpeta')){
    mkdir('mi_carpeta',0777) or die("No de puede crear la carpeta");
}else{
    echo "ya existe la carpeta";    
}

//rmdir('mi_carpeta');
echo "<hr>";

echo "<h1>Contenido carpeta</h1>";
if($gestor = opendir('./mi_carpeta')){
    while(false!==($archivo = readdir($gestor))){
        if ($archivo != '.' && $archivo != '..'){
        echo $archivo."<br/>";
        
        }
    }
}