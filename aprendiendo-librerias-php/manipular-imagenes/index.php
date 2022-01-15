<?php

require_once '../vendor/autoload.php';

$foto_original = 'mifoto.jpg';

$guardar_en =  'fotomodificada.jpg';

$thumb =  new PHPThumb\GD($foto_original);

/*
 * redimensionar
$thumb->resize(150,150);
$thumb->show();
$thumb->save($guardar_en);
*/
/*
 * recortar
 

$thumb->crop(50, 50, 150, 150);
$thumb->show();
$thumb->save($guardar_en);
 * 
 */

$thumb->resize(500,500);
$thumb->cropFromCenter(150);
$thumb->show();
$thumb->save($guardar_en);
$guardar_en =  'fotomodificada.png';
$thumb->save($guardar_en,'png');
