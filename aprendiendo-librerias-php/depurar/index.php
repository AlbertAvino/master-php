<?php

require_once '../vendor/autoload.php';

$frutas = array("manzanas", "naranjas","sandias");

\FB::log($frutas);

$nombres = array("ejecutivo"=>"Antonio", "empleado"=> "Juan");

\FB::log($nombres);
echo "hola mundo!!".$nombres['ejecutivo'];

\FB::log("muestrame esto en consola");