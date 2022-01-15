<?php

class Categoria{
    private $id;
    private $nombre;
    private $db;
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }    

    function setId($id): void {
        $this->id = $id;
    }

    function setNombre($nombre): void {
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    
    public function __construct() {
        $this->db = Database::connect();
    }
    
    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categorias order by id desc");
        
        return $categorias;
    }
    public function getOne(){
        $categoria = $this->db->query("SELECT * FROM categorias WHERE id = {$this->getId()} order by id desc");
        
        return $categoria->fetch_object();
    }
    public function save(){
        $sql = "INSERT INTO categorias VALUES (NULL,'{$this->getNombre()}')";
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result; 
    }
    
    
}