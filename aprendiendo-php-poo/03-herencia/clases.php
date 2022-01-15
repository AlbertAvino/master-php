<?php
// HERENCIA : la possibilitat de compartir atributs y metodes entre clases

class Persona{
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    
    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setEdad($edad): void {
        $this->edad = $edad;
    }

    public function hablar(){
        return "Estoy hablando";
    }
    
    public function caminar() {
        echo "Estoy caminando";        
    }    
}

class Informatico extends Persona {
    
    public $lenguajes;
    
    public function __construct() {
        $this->lenguajes = "PHP,HTML y CSS";
    }
    public function sabeLenguajes($lenguajes){
        $this->lenguajes = $lenguajes;
        return $this->lenguajes;
    }
    
    public function programar(){
        echo "Soy programador";
    }
    public function repararOrdenador() {
        echo "Reparar ordenarodes";
    }
    public function hacerOfimatica() {
        echo "Estoy haciendo un Word";
    }
}

class TecnicoRedes extends Informatico{
    
    public $auditarRedes;
    
    public function __construct() {
        parent::__construct();
        
        $this->auditarRedes = "experto";
    }
    
    public function auditoria(){
        return "Estoy editando una red";
    }
}