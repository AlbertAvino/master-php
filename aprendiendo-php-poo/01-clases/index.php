<?php

// Programacion orientada a objetos en php (POO)

// definir una clase (molde para crear mas objetos de tipo 
// coche con caracteristicas parecidas)
class Coche
{
    // atributos o propiedades (variables)
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventador";
    public $velocidad = 300;
    public $caballaje = 500;
    public $plazas = 2;
    
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
    
    public function acelerar(){
        $this->velocidad++;        
    }
    public function frenar(){
        $this->velocidad--;
    }
    
    public function getVelocidad(){
        return $this->velocidad;
    }
} // fin definicion de la clase

// crear un objeto / instanciar una clase

$coche = new Coche();

// usar los metodos

echo "La velocidad del coche es : ".$coche->velocidad."<br/>";


$coche->setColor("Amarillo");
echo "El color del coche es : ".$coche->getColor()."<br/>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
echo "La velocidad del coche es : ".$coche->velocidad."<br/>";

$coche->frenar();
echo "La velocidad del coche es : ".$coche->velocidad."<br/>";

$coche2 = new Coche();
$coche2->setColor("Verde");
$coche2->setModelo("Gallardo");
var_dump($coche);
var_dump($coche2);