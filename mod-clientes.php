<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $cod_cliente = $_REQUEST['cod_cliente'];
    $sqlConsulta = mysqli_query($conexion, "SELECT * FROM clientes WHERE cod_cliente = '$cod_cliente'");
    $fconsulta = mysqli_fetch_array($sqlConsulta);
    $cod_cliente = $fconsulta['cod_cliente'];
    $nombres = $fconsulta['nombres'];
    $apellidos = $fconsulta['apellidos'];
    $cod_tipodoc = $fconsulta['cod_tipodoc'];
    $num_documento = $fconsulta['num_documento'];
    $direccion = $fconsulta['direccion'];
    $movil = $fconsulta['movil'];
    $email = $fconsulta['email'];
    $estado = $fconsulta['estado'];
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
                                    <label for="nombres" class="col-md-2 col-form-label">Nombres</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="nombres" id="nombres" value="<?=$nombres?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Tipo Documento</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="cod_tipodoc" id="cod_tipodoc">                                            
                                            <?php
                                                if($cod_tipodoc == '' || $cod_tipodoc == 0){
                                                    $sqlTipoDoc = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad");
                                                    echo '<option value="0">Seleccionar Tipo Documento</option>';
                                                    while($ftipdoc = mysqli_fetch_array($sqlTipoDoc)){
                                                        $cod_tipodoc = $ftipdoc['cod_tipodoc'];
                                                        $descripcion = $ftipdoc['descripcion'];
                                                        echo "<option value='$cod_tipodoc'>$descripcion</option>";
                                                    }
                                                }else{
                                                    $sqlTipoDoc = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad WHERE cod_tipodoc = '$cod_tipodoc'");
                                                    while($ftipdoc = mysqli_fetch_array($sqlTipoDoc)){
                                                        $cod_tipodoc = $ftipdoc['cod_tipodoc'];
                                                        $descripcion = $ftipdoc['descripcion'];
                                                        echo "<option value='$cod_tipodoc'>$descripcion</option>";
                                                    }
                                                    $sqlTipoDoc = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad WHERE cod_tipodoc != '$cod_tipodoc'");
                                                    while($ftipdoc = mysqli_fetch_array($sqlTipoDoc)){
                                                        $cod_tipodoc = $ftipdoc['cod_tipodoc'];
                                                        $descripcion = $ftipdoc['descripcion'];
                                                        echo "<option value='$cod_tipodoc'>$descripcion</option>";
                                                    }
                                                }                                                
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="num_documento" class="col-md-2 col-form-label">N° Documento</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="num_documento" id="num_documento" value="<?=$num_documento?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="direccion" class="col-md-2 col-form-label">Dirección</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="direccion" id="direccion" value="<?=$direccion?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="movil" class="col-md-2 col-form-label">Telefono</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="movil" id="movil" value="<?=$movil?>">
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
                                        <input type="hidden" name="cod_cliente" id="cod_cliente" value="<?=$cod_cliente?>">
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
            /**********************************************************/
            $("#benviar").click(function(e){
                e.preventDefault();
                if($("#nombres").val() == ''){
                    Swal.fire({
                    title: 'Clientes',
                    text: "Ingrese Nombres",
                    icon: 'warning'
                    })
                    $("#nombres").focus();
                    return false;
                }
                if($("#cod_tipodoc").val() == 0){
                    Swal.fire({
                    title: 'Clientes',
                    text: "Seleccionar Tipo Documento",
                    icon: 'warning'
                    });
                    $("#cod_tipodoc").focus();
                    return false;
                }
                if($("#num_documento").val() == ''){
                    Swal.fire({
                    title: 'Clientes',
                    text: "Ingresar N° Documento",
                    icon: 'warning'
                    });
                    $("#num_documento").focus();
                    return false;
                }
                if($("#email").val() == ''){
                    Swal.fire({
                    title: 'Clientes',
                    text: "Ingresar Email",
                    icon: 'warning'
                    });
                    $("#email").focus();
                    return false;
                }
                /*************************************************/
                /*************************************************/
                $("#proceso").val('ActualizarCliente');
                $("#modulo").val('Clientes');
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
                            'Clientes',
                            '¡Se actualizó con éxito!',
                            'success'
                            );
                            setTimeout(function(){
                                location.reload();
                            }, 3000);
                        }else{
                            Swal.fire({
                            title: 'Clientes',
                            text: "El Cliente ya existe",
                            icon: 'error'
                            });
                        }
                    }
                });
                
            });
        });
    </script>

    </body>
</html>