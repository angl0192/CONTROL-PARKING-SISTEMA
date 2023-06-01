<?php

require('conexion.php');
require('inicializar-datos.php');

$modulo = $_POST['modulo'];

/***************************************************************/
/************************** PUNTO VENTA **************************/
if($modulo == 'PuntoVenta'){
    $cod_puntoventa = $_POST['cod_puntoventa'];
    $sqlEliminar = mysqli_query($conexion, "DELETE FROM puntos_venta WHERE cod_puntoventa = '$cod_puntoventa'");
    $respuesta = "SI";
    /**********************************************/
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}
/***************************************************************/
/************************** PERSONAL ***************************/
if($modulo == 'Personal'){
    $cod_personal = $_POST['cod_personal'];
    $sqlEliminar = mysqli_query($conexion, "DELETE FROM personal WHERE cod_personal = '$cod_personal'");
    $respuesta = "SI";
    /**********************************************/
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}
/***************************************************************/
/************************** CLIENTE ***************************/
if($modulo == 'Cliente'){
    $cod_cliente = $_POST['cod_cliente'];
    $sqlEliminar = mysqli_query($conexion, "DELETE FROM clientes WHERE cod_cliente = '$cod_cliente'");
    $respuesta = "SI";
    /**********************************************/
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}
/***************************************************************/
/************************** SERVICIO ***************************/
if($modulo == 'Servicios'){
    $cod_servicio = $_POST['cod_servicio'];
    $sqlEliminar = mysqli_query($conexion, "DELETE FROM servicios WHERE cod_servicio = '$cod_servicio'");
    $respuesta = "SI";
    /**********************************************/
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}
//Estacionamientos
/***************************************************************/
/********************* ESTACIONAMIENTOS ************************/
if($modulo == 'Estacionamientos'){
    $cod_estacionamiento = $_POST['cod_estacionamiento'];
    $sqlEliminar = mysqli_query($conexion, "DELETE FROM estacionamientos WHERE cod_estacionamiento = '$cod_estacionamiento'");
    $respuesta = "SI";
    /**********************************************/
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}