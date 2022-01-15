<?php

/*
 * Arrays
 * Es una coleccion o un conjunto de datos / valores
 * Para acceder a esos valores podemos usar un indice numerico o alfanumerico
 * 
 */

$pelicula = "Batman";
$peliculas = array('Batman','Spiderman','El señor de los anillos');

echo var_dump($peliculas[2]);

echo "<br/>";
// un altre forma d'aplicar els arrays
$cantantes = ['2pac','Drake','Jenifer lopez'];
echo var_dump($cantantes);

echo "<hr/>";

echo $peliculas[0];
echo "<br/>";

echo $cantantes[2];

echo "<hr/>";
echo "<h1>Listado de peliculas</h1>";
// recorre array
echo "<ul>";
for ($i = 0 ; $i < count($peliculas); $i++){
    echo "<li>$peliculas[$i]</li>";
}
echo "</ul>";

// recorrer con foreach
echo "<h1>Listado de cantantes</h1>";
// recorre array
echo "<hr/>";
echo "<ul>";
   foreach($cantantes as $cantante){
    echo "<li>$cantante</li>";   
   }
echo "</ul>";
echo "<hr/>";
// array asociativo
$personas = array(
    'nombre' => 'Albert',
    'apellidos' => 'Aviñó',
    'web' => 'prova.com'    
);
var_dump($personas);
var_dump($personas['apellidos']);
echo "<hr/>";
// array multidimensional

$contactos = array (
    array(
        'nombre' => 'Albert',
        'apellidos' => 'Aviñó',
        'web' => 'prova.com'            
    ),
    array(
        'nombre' => 'Luis',
        'apellidos' => 'Frigodedo',
        'web' => 'prova1.com'            
    ),
    array(
        'nombre' => 'Miquel',
        'apellidos' => 'Perez',
        'web' => 'prova2.com'            
    )
    
);
echo var_dump($contactos);
        
echo $contactos[1]['nombre'];

echo "<hr/>";
foreach ($contactos as $key => $contacto){
    var_dump($contacto['nombre']);
}


?>
