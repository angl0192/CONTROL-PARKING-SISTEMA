<?php

require('conexion.php');
require('inicializar-datos.php');

date_default_timezone_set('America/Lima');

$modulo = $_POST['modulo'];

/***************************************************************/
/************************** MI PERFIL **************************/
if($modulo == 'Perfil'){
    $cod_personal = $_POST['cod_personal'];
    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $cod_tipodoc = $_POST['cod_tipodoc'];
    $num_documento = $_POST['num_documento'];
    $email = $_POST['email'];
    $movil = $_POST['movil'];
    $imagen = $_POST['imagen'];
    $proceso = $_POST['proceso'];
    if($proceso == 'ActualizarPerfil'){
        $sqlActualizar = mysqli_query($conexion, "UPDATE personal SET
        cod_personal = '$cod_personal',
        nombres = '$nombres',
        apellidos = '$apellidos',
        cod_tipodoc = '$cod_tipodoc',
        num_documento = '$num_documento',
        email = '$email',
        movil = '$movil',
        imagen = '$imagen' WHERE cod_personal = '$cod_personal'");
        $respuesta = 'SI';
    }
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}

/***************************************************************/
/************************* CAMBIAR CLAVE ***********************/
if($modulo == 'Clave'){
    $cod_personal = $_POST['cod_personal'];
    $clave_actual = sha1($_POST['clave_actual']);
    $clave = sha1($_POST['clave']);
    $proceso = $_POST['proceso'];
    if($proceso == 'ActualizarClave'){
        $sqlVerificar = mysqli_query($conexion, "SELECT cod_personal FROM personal WHERE clave = '$clave_actual' AND cod_personal = '$cod_personal'");
        $numres = mysqli_num_rows($sqlVerificar);
        if($numres > 0){
            $sqlActualizar = mysqli_query($conexion, "UPDATE personal SET
            clave = '$clave' WHERE cod_personal = '$cod_personal'");
            $respuesta = 'SI';
        }else{
            $respuesta = 'NO';
        }
        
    }
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}

/***************************************************************/
/********************* ACTUALIZAR EMPRESA **********************/
if($modulo == 'Empresa'){
    $id_empresa = $_POST['id_empresa'];
    $ruc = $_POST['ruc'];
    $razon_social = $_POST['razon_social'];
    $nombre_comercial = $_POST['nombre_comercial'];
    $icono_web = $_POST['icono_web'];
    $logo_app = $_POST['logo_app'];
    $logo_movil = $_POST['logo_movil'];
    $logo_documentos = $_POST['logo_documentos'];
    $direccion = $_POST['direccion'];
    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $Distrito = $_POST['Distrito'];
    $codigoUbigeo = $_POST['codigoUbigeo'];
    $codigoLocal = $_POST['codigoLocal'];
    $telefono = $_POST['telefono'];
    $movil = $_POST['movil'];
    $email = $_POST['email'];
    $tipo = $_POST['tipo'];
    $usuario_sol = $_POST['usuario_sol'];
    $clave_sol = $_POST['clave_sol'];
    $certificado = $_POST['certificado'];
    $clave_certificado = $_POST['clave_certificado'];
    $clave_borrar = $_POST['clave_borrar'];
    $proceso = $_POST['proceso'];

    if($proceso == 'ActualizarEmpresa'){
      $sqlActualizar = mysqli_query($conexion, "UPDATE empresa SET
      id_empresa = '$id_empresa',
      ruc = '$ruc',
      razon_social = '$razon_social',
      nombre_comercial = '$nombre_comercial',
      icono_web = '$icono_web',
      logo_app = '$logo_app',
      logo_movil = '$logo_movil',
      logo_documentos = '$logo_documentos',
      direccion = '$direccion',
      Departamento = '$Departamento',
      Provincia = '$Provincia',
      Distrito = '$Distrito',
      codigoUbigeo = '$codigoUbigeo',
      codigoLocal = '$codigoLocal',
      telefono = '$telefono',
      movil = '$movil',
      email = '$email',
      tipo = '$tipo',
      usuario_sol = '$usuario_sol',
      clave_sol = '$clave_sol',
      certificado = '$certificado',
      clave_certificado = '$clave_certificado',
      clave_borrar = '$clave_borrar'WHERE id_empresa = '$id_empresa'");
      $respuesta = 'SI';
    }
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}

/***************************************************************/
/*********************** PUNTOS DE VENTA ***********************/
if($modulo == 'PuntoVenta'){
    $cod_puntoventa = $_POST['cod_puntoventa'];
    $fecha_creacion = date('Y-m-d H:i:s');
    $fecha_actualizacion = date('Y-m-d H:i:s');
    $cod_personal = $xCodPer;
    $nombre_puntoventa = $_POST['nombre_puntoventa'];
    $codigo_puntoventa = $_POST['codigo_puntoventa'];
    $alias = $_POST['alias'];
    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $Distrito = $_POST['Distrito'];
    $codigoUbigeo = $_POST['codigoUbigeo'];
    $codigoLocal = $_POST['codigoLocal'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $estado = $_POST['estado'];
    $proceso = $_POST['proceso'];

    if($proceso == 'RegistrarPuntoVenta'){
        $sqlVerificar = mysqli_query($conexion, "SELECT cod_puntoventa FROM puntos_venta WHERE codigo_puntoventa = '$codigo_puntoventa'");
        $numVer = mysqli_num_rows($sqlVerificar);
        if($numVer == 0){
            $sqlInsertar = mysqli_query($conexion, "INSERT INTO puntos_venta (
                fecha_creacion,
                fecha_actualizacion,
                cod_personal,
                nombre_puntoventa,
                codigo_puntoventa,
                alias,
                Departamento,
                Provincia,
                Distrito,
                codigoUbigeo,
                codigoLocal,
                direccion,
                telefono,
                email,
                estado)VALUES(
                '$fecha_creacion',
                '$fecha_actualizacion',
                '$cod_personal',
                '$nombre_puntoventa',
                '$codigo_puntoventa',
                '$alias',
                '$Departamento',
                '$Provincia',
                '$Distrito',
                '$codigoUbigeo',
                '$codigoLocal',
                '$direccion',
                '$telefono',
                '$email',
                '$estado')");
            $respuesta = "SI";
        }else{
            $respuesta = "NO";
        }
    }

    if($proceso == 'ActualizarPuntoVenta'){
      $sqlActualizar = mysqli_query($conexion, "UPDATE puntos_venta SET
      cod_puntoventa = '$cod_puntoventa',
      fecha_actualizacion = '$fecha_actualizacion',
      nombre_puntoventa = '$nombre_puntoventa',
      codigo_puntoventa = '$codigo_puntoventa',
      alias = '$alias',
      Departamento = '$Departamento',
      Provincia = '$Provincia',
      Distrito = '$Distrito',
      codigoUbigeo = '$codigoUbigeo',
      codigoLocal = '$codigoLocal',
      direccion = '$direccion',
      telefono = '$telefono',
      email = '$email',
      estado = '$estado' WHERE cod_puntoventa = '$cod_puntoventa'");
      $respuesta = 'SI';
    }
    $salidaJson = array("respuesta" => $respuesta);
    echo json_encode($salidaJson);
}