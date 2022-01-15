<?php

abstract class Ordenanor{
    public $encendido;
    
    abstract public function encender();    
    
    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenanor{
    public $software;
    
    public function arrancarSoftware() {
        $this->software = true;        
    }
    
    public function encender(){
        $this->encendido = true;
    }
}

$ordenador = new PcAsus();
$ordenador->arrancarSoftware();
$ordenador->encender();
$ordenador->apagar();
var_dump($ordenador);