<?php

require('conexion.php');
require('inicializar-datos.php');

$proceso = $_POST['proceso'];

/*************************************************/
/*************************************************/
switch($proceso){
    case 'imgPerfil':
        $dest_img = "../img-apps/personal/";
        break;
}
/*************************************************/
/*************************************************/
if(!empty($_FILES)){
    if(!file_exists($dest_img) && !is_dir($dest_img)) mkdir($dest_img);
    foreach($_FILES['file']['tmp_name'] as $key => $value){
        $tempFile = $_FILES['file']['tmp_name'][$key];
        $targetFile = $dest_img.$_FILES['file']['name'][$key];
        move_uploaded_file($tempFile, $targetFile);
    }
} 
/*************************************************/
/*************************************************/