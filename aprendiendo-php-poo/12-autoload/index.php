<?php

require_once 'autoload.php';



/*
$usuario = new Usuario();
echo $usuario->nombre;
echo "<br/>";
echo $usuario->email;
echo "<br/>";


$categoria = new Categoria();
echo $categoria->nombre; 
 */

// ESPACIOS DE NOMBRES Y PAQUETES


use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdministrador\Usuario as UsuarioAdmin;

class Principal{
    public $usuario;
    public $categoria;
    public $entrada;
    
    public function __construct() {
        $this->usuario = new Usuario();        
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getEntrada() {
        return $this->entrada;
    }

    function setUsuario($usuario): void {
        $this->usuario = $usuario;
    }

    function setCategoria($categoria): void {
        $this->categoria = $categoria;
    }

    function setEntrada($entrada): void {
        $this->entrada = $entrada;
    }
    function informacion(){
        // nom de la clase
        // echo __CLASS__ ;
        // ruta del metode
        // echo __METHOD__;
        // ruta completa del ficher
        // echo __FILE__;
        // saber si es un trait
        // echo __TRAIT__;
        // saber el name espace 
        echo __NAMESPACE__;
    }

}

$principal = new Principal();
$principal->informacion();
var_dump($principal);
$metodos = get_class_methods($principal);

$busqueda= array_search('setEntrada', $metodos);
var_dump($busqueda);       
$usuario = new UsuarioAdmin();
var_dump($usuario);

// comprovar si existeix una clase
$clase = @class_exists('Misclases\Usuario');

if ($clase){
    echo "<h1>La clase si existe</h1>";
}
else {
    echo "<h1>La clase No existe</h1>";
}