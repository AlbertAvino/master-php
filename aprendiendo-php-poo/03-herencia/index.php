<?php

require_once 'clases.php';

$persona = new Persona();
$persona->setNombre("Albert");
var_dump($persona);

$informatico = new Informatico();
$informatico->setAltura(1.90);
$informatico->sabeLenguajes("PHP, DELPHI, SQL , etc..");
var_dump($informatico);

$tecnico = new TecnicoRedes();
var_dump($tecnico);