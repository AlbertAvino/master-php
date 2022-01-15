<?php

interface Ordenador{
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();            
}

class iMac implements Ordenador{
    private $modelo;
    
    function getModelo() {
        return $this->modelo;
    }

    function setModelo($modelo): void {
        $this->modelo = $modelo;
    }
    
    public function encender() {
        
    }
    public function apagar() {
        
    }
    public function reiniciar() {
        
    }
    public function desfragmentar() {
        
    }
    public function detectarUSB() {
        
    }

}

$mac = new iMac();
$mac->setModelo('MacBook Pro 2019');
echo $mac->getModelo();