<?php

class Coche
{
    // atributos o propiedades (variables)
    // public: es pot accedir a ell desde qualsevol lloc dins 
    // de la clase actual que heredin aquesta clase o fora de la clase
    public $color;
    // protected: podem accedir desde la clase que els defineix i 
    // desde les clases que heredin la clase
    protected $marca;
    // private : nomes es pot accedir des d'aquesta clase
    private $modelo;
    
    public $velocidad;
    public $caballaje;
    public $plazas;
    
    public function __construct($color,$marca,$modelo,$velocidad,$caballaje,$plazas) {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
        
    }
    
    
    // métodos, son acciones que hace el objeto (antes serian funciones)
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
    
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function getModelo(){
        return $this->modelo;
    }    
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function acelerar(){
        $this->velocidad++;        
    }
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
    
    
    public function mostrarInformacion(Coche $miObjeto){
        $informacion = "<h1>Información del coche</h1>";
        $informacion .= " Color : ".$miObjeto->color."<br/>";
        $informacion .= " Modelo : ".$miObjeto->modelo."<br/>";
        $informacion .= " Velocidad : ".$miObjeto->velocidad."<br/>";
        return $informacion;
    }
} 
