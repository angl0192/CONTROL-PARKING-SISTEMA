<?php
require("../config/conexion.php");
require("../config/inicializar-datos.php");
date_default_timezone_set('America/Lima');
session_start();
$session_id = session_id();
$proceso    = $_GET['proceso'];
/**********************************************************************/
/************************** INVOCAR CLASE QR **************************/
/**********************************************************************/
require('phpqrcode/qrlib.php');
/**********************************************************************/
/****************** FACTURA/BOLETA/NOTA VENTA *************************/
/**********************************************************************/

if ($proceso == 'registrarIngreso') {
    $cod_estacionamiento = $_GET['cod_estacionamiento'];
    $fecha_creacion = date('Y-m-d H:i:s');
    $fecha_actualizacion = date('Y-m-d H:i:s');
    $cod_puntoventa = $xTienda;
    $cod_personal = $xCodPer;
    $tipo_cliente = $_GET['tipo_cliente'];
    $nombres = $_GET['nombres'];
    $num_documento = $_GET['num_documento'];
    $email = $_GET['email'];
    $movil = $_GET['movil'];
    $direccion = $_GET['direccion'];
    $marca_vehiculo = $_GET['marca_vehiculo'];
    $fecha_ingreso = $_GET['fecha_ingreso'];
    $num_placa = $_GET['num_placa'];
    $fecha_ingreso = date('Y-m-d');
    $hora_ingreso = date('H:i:s');
    $observacion = $_GET['observacion'];
    $estado = "Ingreso";
    /*************************************************************/
    $sqlVerificar = mysqli_query($conexion, "SELECT cod_parkeo FROM parkeo WHERE num_placa = '$num_placa' AND fecha_ingreso = '$fecha_ingreso' AND hora_ingreso = '$hora_ingreso'");
    $numVerif = mysqli_num_rows($sqlVerificar);
    if($numVerif == 0){
        $sqlIngresar = mysqli_query($conexion, "INSERT INTO parkeo (
        cod_estacionamiento,
        fecha_creacion,
        fecha_actualizacion,
        cod_puntoventa,
        cod_personal,
        tipo_cliente,
        num_placa,
        fecha_ingreso,
        hora_ingreso,
        observacion,
        estado)VALUES(
        '$cod_estacionamiento',
        '$fecha_creacion',
        '$fecha_actualizacion',
        '$cod_puntoventa',
        '$cod_personal',
        '$tipo_cliente',
        '$num_placa',
        '$fecha_ingreso',
        '$hora_ingreso',
        '$observacion',
        '$estado')");
        /*****************************************************/
        $cod_parkeo = mysqli_insert_id($conexion);
        /*****************************************************/
        if ($tipo_cliente == 'Abonado') {
            $estadoAbonado  = "A";
            $sqlInsertar    = mysqli_query($conexion, "INSERT INTO abonados (
            nombres,
            num_documento,
            email,
            movil,
            direccion,
            marca_vehiculo,
            placa_vehiculo,
            fecha_ingreso,
            hora_ingreso,
            observacion,
            estado
            )VALUES(
            '$nombres',
            '$num_documento',
            '$email',
            '$movil',
            '$direccion',
            '$marca_vehiculo',
            '$num_placa',
            '$fecha_ingreso',
            '$hora_ingreso',
            '$observacion',
            '$estadoAbonado')");
        }
        /*********************************************************/
        if($cod_parkeo){
            $sqlActualizar = mysqli_query($conexion, "UPDATE estacionamientos SET estado = 'Ocupado' WHERE cod_estacionamiento = '$cod_estacionamiento'");
            /*************************************************/
            $text_qr        = "$cod_estacionamiento|$num_placa|$fecha_ingreso|$hora_ingreso";
            $ruta_qr        = 'qr/' . $num_placa . '-' . $fecha_ingreso . '-' . $hora_ingreso . '.png';
            QRcode::png($text_qr, $ruta_qr, 'Q', 15, 0);
            /*************************************************/
            header("location:ver-ticket.php?cod_parkeo=$cod_parkeo");
            echo "<script>parent.location.reload();</script>";
        }
    }    
}