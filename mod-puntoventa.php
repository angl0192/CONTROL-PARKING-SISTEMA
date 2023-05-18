<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $cod_puntoventa = $_REQUEST['cod_puntoventa'];
    $sqlConsulta = mysqli_query($conexion, "SELECT * FROM puntos_venta WHERE cod_puntoventa = '$cod_puntoventa'");
    $fconsulta = mysqli_fetch_array($sqlConsulta);
    $cod_puntoventa = $fconsulta['cod_puntoventa'];
    $nombre_puntoventa = $fconsulta['nombre_puntoventa'];
    $codigo_puntoventa = $fconsulta['codigo_puntoventa'];
    $alias = $fconsulta['alias'];
    $Departamento = $fconsulta['Departamento'];
    $Provincia = $fconsulta['Provincia'];
    $Distrito = $fconsulta['Distrito'];
    $codigoUbigeo = $fconsulta['codigoUbigeo'];
    $codigoLocal = $fconsulta['codigoLocal'];
    $direccion = $fconsulta['direccion'];
    $telefono = $fconsulta['telefono'];
    $email = $fconsulta['email'];
    $estado = $fconsulta['estado'];
    $proceso = $fconsulta['proceso'];
?>
<!doctype html>
<html lang="es">
    <head>

        <?php require("config/header-web.php"); ?>

        <!-- plugin css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="row">
                <div class="card-body">
                    <form action="" id="fapps" method="POST">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-3 row">
                                    <label for="nombre_puntoventa" class="col-md-2 col-form-label">Punto Venta</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="nombre_puntoventa" id="nombre_puntoventa" value="<?=$nombre_puntoventa?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="codigo_puntoventa" class="col-md-2 col-form-label">Código Punto Venta</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="codigo_puntoventa" id="codigo_puntoventa" value="<?=$cod_puntoventa?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alias" class="col-md-2 col-form-label">Tienda</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="alias" id="alias" value="<?=$alias?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Departamento</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="Departamento" id="Departamento">
                                            <?php
                                                if($Departamento == '' || $Departamento == 0){                                                                
                                                    $sqlDeptar = mysqli_query($conexion, "SELECT * FROM ubigeo_departamentos");
                                                    echo "<option value='0'>Departamento</option>";
                                                    while($fdep = mysqli_fetch_array($sqlDeptar)){
                                                        $id_dep = $fdep['id'];
                                                        $departamento = $fdep['name'];
                                                        echo "<option value='$id_dep'>$departamento</option>";
                                                    }
                                                }else{
                                                    $sqlDeptar = mysqli_query($conexion, "SELECT * FROM ubigeo_departamentos WHERE id = '$Departamento'");
                                                    while($fdep = mysqli_fetch_array($sqlDeptar)){
                                                        $id_dep = $fdep['id'];
                                                        $departamento = $fdep['name'];
                                                        echo "<option value='$id_dep'>$departamento</option>";
                                                    }
                                                    $sqlDeptar = mysqli_query($conexion, "SELECT * FROM ubigeo_departamentos WHERE id != '$Departamento'");
                                                    while($fdep = mysqli_fetch_array($sqlDeptar)){
                                                        $id_dep = $fdep['id'];
                                                        $departamento = $fdep['name'];
                                                        echo "<option value='$id_dep'>$departamento</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Provincia</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="Provincia" id="Provincia">
                                            <?php
                                                if($Provincia == '' || $Provincia == 0){                                                                
                                                    $sqlProv = mysqli_query($conexion, "SELECT * FROM ubigeo_provincias WHERE department_id = '$Departamento'");
                                                    echo "<option value='0'>Provincia</option>";
                                                    while($fprov = mysqli_fetch_array($sqlProv)){
                                                        $id_prov = $fprov['id'];
                                                        $provincia = $fprov['name'];
                                                        echo "<option value='$id_prov'>$provincia</option>";
                                                    }
                                                }else{
                                                    $sqlProv = mysqli_query($conexion, "SELECT * FROM ubigeo_provincias WHERE id = '$Provincia'");
                                                    while($fprov = mysqli_fetch_array($sqlProv)){
                                                        $id_prov = $fprov['id'];
                                                        $provincia = $fprov['name'];
                                                        echo "<option value='$id_prov'>$provincia</option>";
                                                    }
                                                    $sqlProv = mysqli_query($conexion, "SELECT * FROM ubigeo_provincias WHERE id != '$Provincia' AND department_id = '$Departamento'");
                                                    while($fprov = mysqli_fetch_array($sqlProv)){
                                                        $id_prov = $fprov['id'];
                                                        $provincia = $fprov['name'];
                                                        echo "<option value='$id_prov'>$provincia</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Distrito</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="Distrito" id="Distrito">
                                            <?php
                                                if($Distrito == '' || $Distrito == 0){                                                                
                                                    $sqlDistr = mysqli_query($conexion, "SELECT * FROM ubigeo_distritos WHERE department_id = '$Departamento' AND province_id = '$Provincia'");
                                                    echo "<option value='0'>Distrito</option>";
                                                    while($fdistr = mysqli_fetch_array($sqlDistr)){
                                                        $id_distr = $fdistr['id'];
                                                        $distrito = $fdistr['name'];
                                                        echo "<option value='$id_distr'>$distrito</option>";
                                                    }
                                                }else{
                                                    $sqlDistr = mysqli_query($conexion, "SELECT * FROM ubigeo_distritos WHERE id = '$Distrito'");
                                                    while($fdistr = mysqli_fetch_array($sqlDistr)){
                                                        $id_distr = $fdistr['id'];
                                                        $distrito = $fdistr['name'];
                                                        echo "<option value='$id_distr'>$distrito</option>";
                                                    }
                                                    $sqlDistr = mysqli_query($conexion, "SELECT * FROM ubigeo_distritos WHERE id != '$Distrito' AND department_id = '$Departamento' AND province_id = '$Provincia'");
                                                    while($fdistr = mysqli_fetch_array($sqlDistr)){
                                                        $id_distr = $fdistr['id'];
                                                        $distrito = $fdistr['name'];
                                                        echo "<option value='$id_distr'>$distrito</option>";
                                                    }
                                                }
                                            ?>                                                      
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="codigoUbigeo" class="col-md-2 col-form-label">Código Ubigeo</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="codigoUbigeo" id="codigoUbigeo" value="<?=$codigoUbigeo?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="codigoLocal" class="col-md-2 col-form-label">Código Local</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="codigoLocal" id="codigoLocal" value="<?=$codigoLocal?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="direccion" class="col-md-2 col-form-label">Dirección</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="direccion" id="direccion" value="<?=$direccion?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="telefono" class="col-md-2 col-form-label">Teléfono</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="telefono" id="telefono" value="<?=$telefono?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="email" id="email" value="<?=$email?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Estado</label>
                                    <div class="col-md-10">
                                        <input <?php if($estado == 'A'){
                                                    echo 'checked=\"checked"';
                                                } ?> type="radio" name="estado" value="A"> Activo
                                        <input <?php if($estado == 'I'){
                                                    echo 'checked=\"checked"';
                                                } ?> type="radio" name="estado" value="I"> Inactivo
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="exampleDataList" class="col-md-2 col-form-label"></label>
                                    <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect waves-light" id="benviar">
                                            <i class="mdi mdi-content-save"></i>
                                            GUARDAR CAMBIOS
                                        </button>
                                        <input type="hidden" name="proceso" id="proceso">
                                        <input type="hidden" name="modulo" id="modulo">
                                        <input type="hidden" name="cod_puntoventa" id="cod_puntoventa" value="<?=$cod_puntoventa?>">
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </form>
                </div>
        </div><!-- end row -->                      
    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>    
    <!-- plugins -->
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <!-- init js -->
    <script src="assets/js/form-advanced.init.js"></script>
    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>
    <!-- app.js -->
    <script src="assets/js/app.js"></script>

    <script>
        $(function(){
            $("#Departamento").change(function(){
                var Departamento = $(this).val();
                var datosEnviar = {
                    'Departamento': Departamento,
                    'proceso': 'BuscarProvincias'
                }
                $.ajax({
                    data: datosEnviar,
                    url: "config/procesos.php",
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            $("#Provincia").html(data.provincias)
                        }
                    }
                })
            })
            $("#Provincia").change(function(){
                var Departamento = $("#Departamento").val();
                var Provincia = $(this).val();
                var datosEnviar = {
                    'Departamento': Departamento,
                    'Provincia': Provincia,
                    'proceso': 'BuscarDistritos'
                }
                $.ajax({
                    data: datosEnviar,
                    url: "config/procesos.php",
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            $("#Distrito").html(data.distritos)
                        }
                    }
                })
            })
            /**********************************************************/
            $("#benviar").click(function(e){
                e.preventDefault();
                if($("#nombre_puntoventa").val() == ''){
                    Swal.fire({
                    title: 'Punto de Venta',
                    text: "Ingrese Punto de Venta",
                    icon: 'warning'
                    })
                    $("#nombre_puntoventa").focus();
                    return false;
                }
                if($("#codigo_puntoventa").val() == ''){
                    Swal.fire({
                    title: 'Punto de Venta',
                    text: "Ingrese Código Punto Venta",
                    icon: 'warning'
                    })
                    $("#codigo_puntoventa").focus();
                    return false;
                }
                if($("#alias").val() == ''){
                    Swal.fire({
                    title: 'Punto de Venta',
                    text: "Ingrese Tienda del Punto de Venta",
                    icon: 'warning'
                    })
                    $("#alias").focus();
                    return false;
                }
                /*************************************************/
                /*************************************************/
                $("#proceso").val('ActualizarPuntoVenta');
                $("#modulo").val('PuntoVenta');
                var datosEnviar = $("#fapps").serialize();
                $.ajax({
                    data: datosEnviar,
                    url: "config/proceso-guardar.php",
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            Swal.fire(
                            'Punto de Venta',
                            '¡Se actualizó con éxito!',
                            'success'
                            );
                            setTimeout(function(){
                                location.reload();
                            }, 3000);
                        }else{
                            Swal.fire({
                            title: 'Punto de Venta',
                            text: "El Punto de Venta ya existe",
                            icon: 'error'
                            });
                        }
                    }
                })
                
            })
        })
    </script>

    </body>
</html>