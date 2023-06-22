<?php
session_start();
require("conexion.php");
if($_SESSION['xCodPer'] && $_SESSION['xNombres'] && $_SESSION['xApellidos']){
    $xCodPer = $_SESSION['xCodPer'];
    $xNombres = $_SESSION['xNombres'];
    $xApellidos = $_SESSION['xApellidos'];
    $xEmail = $_SESSION['xEmail'];
    $xTienda = $_SESSION['xTienda'];
    $xCargo = $_SESSION['xCargo'];
    $xImagen = $_SESSION['xImagen'];
    /***************************************************************/
    /***************************************************************/
    if($xCodPer == '' or $xCodPer == 0){
        header("location:seguridad.php");
    }
}else{
    header("location:seguridad.php");
}
/***************************************************************/
/***************************************************************/
$sqlEmpresa = mysqli_query($conexion, "SELECT * FROM empresa");
$fempresa = mysqli_fetch_array($sqlEmpresa);
$x_ruc = $fempresa['ruc'];
$x_razon_social = $fempresa['razon_social'];
$x_nombre_comercial = $fempresa['nombre_comercial'];
$x_direccion = $fempresa['direccion'];
$x_Departamento = $fempresa['Departamento'];
$x_Provincia = $fempresa['Provincia'];
$x_Distrito = $fempresa['Distrito'];
$x_codigoUbigeo = $fempresa['codigoUbigeo'];
$x_codigoLocal = $fempresa['codigoLocal'];
$x_telefono = $fempresa['telefono'];
$x_movil = $fempresa['movil'];
$x_email = $fempresa['email'];
/***************************************************************/
/***************************************************************/


