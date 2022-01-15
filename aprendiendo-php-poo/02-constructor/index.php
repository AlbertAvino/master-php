<?php
require_once 'coche.php';

$coche = new Coche("Amarillo","Renault","Clio",150,200,5);
$coche1 = new Coche("Verde","Seat","Panda",75,200,5);
$coche2 = new Coche("Azul","Citroen","Shara",100,220,5);
$coche3 = new Coche("Rojo","Mercedes","ClaseA",250,200,4);

$coche->color = "Rosa";
// al ser protected no es pot assignar directament
//$coche->marca = "Audi";
$coche->setMarca("Audi");

// igual passa amb el modelo que es protected
//echo $coche->modelo ;
echo $coche->mostrarInformacion($coche1);



//var_dump($coche);
//var_dump($coche1);
//var_dump($coche2);
//var_dump($coche3);
