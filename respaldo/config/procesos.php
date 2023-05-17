<?php

require('conexion.php');
require('inicializar-datos.php');

$proceso = $_POST['proceso'];

/************************************************************************/
/****************************** PROVINCIAS ******************************/
if($proceso == 'BuscarProvincias'){
    $Departamento = $_POST['Departamento'];
    $provincias = "";
    $sqlProvincias = mysqli_query($conexion, "SELECT * FROM ubigeo_provincias WHERE department_id = '$Departamento'");
    $numProv = mysqli_num_rows($sqlProvincias);
    $provincias .= "<option value = '0'>Provincia</option>";
    if($numProv > 0 ){
        while($fprov = mysqli_fetch_array($sqlProvincias)){
            $idProv = $fprov['id'];
            $Provincia = $fprov['name'];
            $provincias .= "<option value = '$idProv'>$Provincia</option>"; // Y EL ERROR ESTABA AQUÍ, ME DEMORÉ CASI 40 MIN EN ENCONTRARLO
        }
        $respuesta = "SI";
    }else{
        $respuesta = 'NO';
    }
    $salidaJson = array(
        "respuesta" => $respuesta,
        'provincias' => $provincias,
    );
    echo json_encode($salidaJson);
}
/************************************************************************/
/******************************* DISTRITOS ******************************/
if($proceso == 'BuscarDistritos'){
    $Departamento = $_POST['Departamento'];
    $Provincia = $_POST['Provincia'];
    $distritos = "";
    $sqlDistritos = mysqli_query($conexion, "SELECT * FROM ubigeo_distritos WHERE department_id = '$Departamento' AND province_id = '$Provincia'");
    $numDist = mysqli_num_rows($sqlDistritos);
    $distritos .= "<option value = '0'>Distrito</option>";
    if($numDist > 0 ){
        while($fdist = mysqli_fetch_array($sqlDistritos)){
            $idDist = $fdist['id'];
            $Distrito = $fdist['name'];
            $distritos .= "<option value = '$idDist'>$Distrito</option>";
        }
        $respuesta = "SI";
    }else{
        $respuesta = 'NO';
    }
    $salidaJson = array(
        "respuesta" => $respuesta,
        'distritos' => $distritos,
    );
    echo json_encode($salidaJson);
}
