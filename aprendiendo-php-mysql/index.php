<?php
// conectar a la base de datos
$conexion = mysqli_connect("localhost","root","","phpmysql");

// comprovar que la conexion es correcta

if (mysqli_connect_errno()){
    echo "la conexion a la base de datos MySQL ha fallado : ". mysqli_connect_error();
}else{
    echo "conexion realizada correctamente";
}

// consulta para configurar la codificacion de caracteres
mysqli_query($conexion,"SET NAMES 'utf8'");

// consulta Select desde PHP
$query  =  mysqli_query($conexion, "SELECT * FROM notas");


while ($nota = mysqli_fetch_assoc($query)){
    echo "<h2>".$nota['titulo']."</h2>";
    echo $nota['descripcion']."<br/>";
}
        

// Insertar en la bbdd desde php

$sql= "Insert into notas values (null,'Nota desde PHP', 'esto es una nota desde php','green')";
$insert = mysqli_query($conexion, $sql);

if ($insert){
    echo "Datos insertadors correctamente";
}
else{
    echo "Error".mysqli_error($conexion);
}