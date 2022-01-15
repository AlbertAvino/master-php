<?php
/*
 * // abrir archivo 
 
$archivo = fopen("fichero_texto.txt","a+");

//leer contenido
$contenido = fgets($archivo);

while (!feof($archivo)){
    $contenido = fgets($archivo);
echo $contenido."<br/>";
}

// Escribir

fwrite($archivo, "Soy un texto metido desde php")

// cerrar archivo
fclose($archivo);
*/
// copiar
//copy('fichero_texto.txt','fichero_copiado.txt') or die ("Error al copiar");
// renombrar
//rename('fichero_copiado.txt','Archivito_recopiadito.txt');
// eliminar 
//unlink('Archivito_recopiadito.txt') or die('Error al eliminar');
if (file_exists('fichero_texto.txt')){
    echo "El archivo existe";
}else {
    echo "El archivo NO existe";
}


