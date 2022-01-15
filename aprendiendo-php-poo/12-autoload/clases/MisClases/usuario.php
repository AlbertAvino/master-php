<?php
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;
    
    public function __construct() {
        $this->nombre = "Albert Aviñó";
        $this->email = "avinyo@avinyo.com";
    }
}