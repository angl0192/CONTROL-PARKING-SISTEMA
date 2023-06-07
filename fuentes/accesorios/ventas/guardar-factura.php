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

if ($proceso == 'VentaProductos') {
    $fecha_creacion         = date('Y-m-d H:i:s');
    $fecha_actualizacion    = date('Y-m-d H:i:s');
    $codigo_compro          = $_GET['codigo_compro'];
    $serie                  = $_GET['serie'];
    $num_comprobante        = $_GET['num_comprobante'];
    $fecha_registro         = date('Y-m-d', strtotime($_GET['fecha_registro']));
    $razon_social           = $_GET['razon_social'];
    if ($codigo_compro == '01') {
        $cod_tipodoc        = 1;
    }
    if ($codigo_compro == '03') {
        $cod_tipodoc        = 2;
    }
    $numero_documento       = $_GET['numero_documento'];
    $direccion_empresa      = $_GET['direccion_empresa'];
    $email_cliente          = $_GET['email_cliente'];
    $forma_pago             = $_GET['forma_pago'];
    $pago_transferencia     = $_GET['pago_transferencia'];
    $pago_efectivo          = $_GET['pago_efectivo'];
    $pago_vuelto            = $_GET['pago_vuelto'];
    $cod_personal           = $xCodPer;
    $cod_puntoventa         = $xTienda;
    $cod_apertura           = $xCodAperturaCaja;
    $observacion            = $_GET['observacion'];
    $estado                 = 'Por Enviar';
    $tipo_impresion         = $_GET['tipo_impresion'];
    /**********************************************************************/
    /******************     GURAR DATOS DE FACTURA   **********************/
    /**********************************************************************/
    $sqlInsertar            = mysqli_query($conexion, "INSERT INTO factura (
    fecha_creacion,
    fecha_actualizacion,
    codigo_compro,
    serie,
    num_comprobante,
    fecha_registro,
    razon_social,
    cod_tipodoc,
    numero_documento,
    direccion_empresa,
    email_cliente,
    forma_pago,
    pago_transferencia,
    pago_efectivo,
    pago_vuelto,
    cod_personal,
    cod_puntoventa,
    cod_apertura,
    observacion,
    estado


    )VALUES(
    '$fecha_creacion',
    '$fecha_actualizacion',
    '$codigo_compro',
    '$serie',
    '$num_comprobante',
    '$fecha_registro',
    '$razon_social',
    '$cod_tipodoc',
    '$numero_documento',
    '$direccion_empresa',
    '$email_cliente',
    '$forma_pago',
    '$pago_transferencia',
    '$pago_efectivo',
    '$pago_vuelto',
    '$cod_personal',
    '$cod_puntoventa',
    '$cod_apertura',
    '$observacion',
    '$estado')");
    /**********************************************************************/
    /**********************************************************************/
    $id_factura     = mysqli_insert_id($conexion);
    /**********************************************************************/
    /**********************************************************************/
    if ($id_factura) {
        $sqlTmp         = mysqli_query($conexion, "SELECT * FROM tmp_ventas WHERE tmp_ventas.session_id='$session_id'");
        while ($ftmp     = mysqli_fetch_array($sqlTmp)) {
            $id_tmp         = $ftmp['id_tmp'];
            $cod_producto   = $ftmp['cod_producto'];
            $cantidad       = $ftmp['cantidad_tmp'];
            $precio         = $ftmp['precio_tmp'];
            $session_id     = $ftmp['session_id'];
            $tienda         = $ftmp['tienda'];
            /*****************************************************************/
            $sqlProductos   = mysqli_query($conexion, "SELECT nombre_producto FROM productos WHERE cod_producto='$cod_producto'");
            $fpro           = mysqli_fetch_array($sqlProductos);
            $nomnbre_producto = $fpro['nombre_producto'];
            /*****************************************************************/
            if ($codigo_compro == '01' || $codigo_compro == '03') {
                $xPrecio_u_sinigv   = ($precio / 1.18);
                $xPrecio_u_conigv   = ($xPrecio_u_sinigv * 1.18);
                $xIgv_uni           = ($xPrecio_u_conigv - $xPrecio_u_sinigv);
                /************************************************************/
                $xTotal             = ($cantidad * $precio);
                $xPrecio_sin_igv    = ($xTotal / 1.18);
                $xPrecio_con_igv    = ($xPrecio_sin_igv * 1.18);
                $xIvg               = ($xPrecio_con_igv - $xPrecio_sin_igv);
                $xIncluyeIgv        = "SI";
            } else {
                $xTotal             = ($cantidad * $precio);
                $xPrecio_sin_igv    = $xTotal;
                $xPrecio_con_igv    = $xTotal;
                $xIvg               = 0;
                $xIgv_uni           = 0;
                $xIncluyeIgv        = "NO";
            }
            /*****************************************************************/
            $xTotalGravadas         = ($xTotalGravadas + $xPrecio_sin_igv);
            $xTotalIgv              = ($xTotalIgv + $xIvg);
            $xTotalFact             = ($xTotalFact + $xTotal);
            $xTotalPagarFact        = $xTotalFact;
            /*****************************************************************/
            /**************     INSERTAR DETALLE FACTURA    ******************/
            /*****************************************************************/
            $sqlInsertarDetalle = mysqli_query($conexion, "INSERT INTO detalle_factura (
            id_factura,
            fecha_registro,
            producto,
            cantidad,
            precio,
            cod_puntoventa,
            serie,
            incluye_igv,
            igv_unit,
            igv,
            precio_sin_igv,
            precio_con_igv
            )VALUES(
            '$id_factura',
            '$fecha_registro',
            '$nomnbre_producto',
            '$cantidad',
            '$precio',
            '$tienda',
            '$serie',
            '$xIncluyeIgv',
            '$xIgv_uni',
            '$xIvg',
            '$xPrecio_sin_igv',
            '$xPrecio_con_igv')");
            /*********************************************************/
            $id_detalle     = mysqli_insert_id($conexion);
            /*********************************************************/
            if ($id_detalle) {
                $sqlActStock    = mysqli_query($conexion, "UPDATE stock_locales SET 
                stock_actual    =(stock_actual - $cantidad),
                total_ventas    =(total_ventas + $cantidad) WHERE cod_producto='$cod_producto' AND cod_puntoventa='$tienda'");
            }
            /*********************************************************/
            /*************** GUARDAR CLIENTES NUEVOS *****************/
            /*********************************************************/
            $sqlVerificarCliente = mysqli_query($conexion, "SELECT cod_cliente FROM clientes WHERE num_documento='$numero_documento'");
            $numClient           = mysqli_num_rows($sqlVerificarCliente);
            if ($numClient == 0) {
                $sqlInsertClien  = mysqli_query($conexion, "INSERT INTO clientes (
                fecha_creacion,
                fecha_actualizacion,
                cod_personal,
                cod_puntoventa,
                nombres,
                direccion,
                cod_tipodoc,
                num_documento,
                email,
                estado
                )VALUES(
                '$fecha_creacion',
                '$fecha_actualizacion',
                '$xCodPer',
                '$xTienda',
                '$razon_social',
                '$direccion_empresa',
                '$cod_tipodoc',
                '$numero_documento',
                '$email_cliente',
                'Activo')");
            }
            /*********************************************************/
        }
        /*************************************************************/
        $ruc_empresa    = $xRucEmpresa;
        $text_qr        = "$ruc_empresa|$serie|$num_comprobante|$xTotal|$fecha_registro|";
        $ruta_qr        = 'qr/' . $codigo_compro . '-' . $serie . '-' . $num_comprobante . '.png';
        QRcode::png($text_qr, $ruta_qr, 'Q', 15, 0);
        /*****************************************************/
        $sqlActFact     = mysqli_query($conexion, "UPDATE factura SET total_igv='$xTotalIgv', total_grabadas='$xTotalGravadas', total_monto='$xTotalPagarFact' WHERE id_factura='$id_factura'");
        /*****************************************************/
        $sqlActualizarSerie = mysqli_query($conexion, "UPDATE serie_documentos SET num_actual=(num_actual+1) WHERE serie='$serie' AND codigo_compro='$codigo_compro' AND cod_puntoventa='$tienda'");
        /*****************************************************/
        $sqlDelete      = mysqli_query($conexion, "DELETE FROM tmp_ventas WHERE session_id='$session_id'");
        /*****************************************************/
        if ($tipo_impresion == 'benviar') {
            header("location:ver-ticket.php?id_factura=$id_factura&cod_puntoventa=$tienda");
        } else {
            header("location:ver-facturas-pdf.php?id_factura=$id_factura&cod_puntoventa=$tienda");
        }
        echo "<script>parent.location.reload();</script>";
    }
}
