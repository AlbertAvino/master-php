<?php

trait Utilidades{
    public function mostrarNombre(){
        echo "<h1>El nombre es ".$this->nombre."</h1>";
    }
}


class Coche{
    public $nombre;
    public $marca;
    
    use Utilidades;
}

class Persona {
    public $nombre;
    public $apellido;
    
    use Utilidades;
}

class VideoJuego{
    public $nombre;
    public $anio;
    
    use Utilidades;
}

$coche = new Coche();
$persona = new Persona();
$videoJuego = new VideoJuego();

$coche->nombre = "Ferrari Testarrosa";
$coche->mostrarNombre();