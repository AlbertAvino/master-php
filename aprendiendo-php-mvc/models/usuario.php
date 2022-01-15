<?php
require_once 'ModeloBase.php';
class Usuario extends ModeloBase{
    public $nombre;
    public $apellidos;
    public $email;
    public $passwords;
    
    public function __construct() {
        parent::__construct();
    }
    
    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getEmail() {
        return $this->email;
    }

    function getPasswords() {
        return $this->passwords;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos): void {
        $this->apellidos = $apellidos;
    }

    function setEmail($email): void {
        $this->email = $email;
    }

    function setPasswords($passwords): void {
        $this->passwords = $passwords;
    }

   
    
}