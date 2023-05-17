<?php

session_start();
$xCodPer = $_SESSION['xCodPer'];
$xNombres = $_SESSION['xNombres'];
$xApellidos = $_SESSION['xApellidos'];
$xEmail = $_SESSION['xEmail'];
$xTienda = $_SESSION['xTienda'];
$xCargo = $_SESSION['xCargo'];
$xImagen = $_SESSION['xImagen'];

if($xCodPer == '' or $xCodPer == 0){
    header("location:seguridad.php");
}