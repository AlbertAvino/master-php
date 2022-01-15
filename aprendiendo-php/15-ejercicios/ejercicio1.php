<?php

/* 
 * Ejercicio 1
 * array con 8 numeros enteros
 * recorrerlo y mostrarlo
 * ordenarlo y mostrarlo
 * mostrar su longitud
 * buscar algun elemento en el array
 * 
 */


$numeros = array(5,3,4,6,8,2,9,7);
function mostrarArray($numeros){
    $resultado = "";
    foreach($numeros as $numero){
    $resultado .= $numero."<br/>";
    
    }
    return $resultado;    
};


//  recorrer y mostrar;
echo "<h1>Recorrer y mostrar</h1>";
echo mostrarArray($numeros);
//  ordenar y mostrar
echo "<h1>ordenar y mostrar</h1>";
sort($numeros);
echo mostrarArray($numeros);

//  mostrar longitud
echo "<h1>Mostrar longitud</h1>";
echo count($numeros);
echo "<br/>";

// buscar algun elemento
if (isset($_GET['numero'])){
     $busqueda = $_GET['numero'];
}
else {

    $busqueda = 9;
    
}

echo "<h1>Busqueda al array el numero $busqueda</h1>";

    $search = array_search($busqueda, $numeros);
    var_dump($search);
    if (!empty($search)){
        echo "<h4>El número existe en el array, en el indice :  $search </h4>";
    }else{
        echo "<h4>El número NO existen en el array</h4>";
    }
?>
