<?php


$cantantes = ['2pac','Drake','Jenifer lopez','Alfredo'];
$numeros = [5,1,2,6,8,4,9];


// ordena per ordre alfabetic
asort($cantantes);
var_dump($cantantes);
// orderna per ordre alfabetic invers
arsort($cantantes);
var_dump($cantantes);
// ordernar numeric
sort($numeros);
var_dump($numeros);

// afegir elements a un array

$cantantes[] = "Natos";
var_dump($cantantes);
 // altre forma d'afegir
 array_push($cantantes,"Waor");
var_dump($cantantes); 
 // eliminar l'ultim
 array_pop($cantantes);
var_dump($cantantes); 
 // eliminar un concret
unset($cantantes[2]);
var_dump($cantantes); 

// mostro aleatori
$indice = array_rand($cantantes);
echo $cantantes[$indice];


// dar la vuelta al array
var_dump(array_reverse($numeros));

// buscar dentro de un array

$resultado = array_search('Drake', $cantantes);
echo var_dump($resultado);

// contar numero de elementos

echo count($cantantes);
echo sizeof($cantantes);


?>