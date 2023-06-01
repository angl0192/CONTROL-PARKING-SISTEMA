<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $cod_servicio = $_REQUEST['cod_servicio'];
    $sqlConsulta = mysqli_query($conexion, "SELECT * FROM servicios WHERE cod_servicio = '$cod_servicio'");
    $fconsulta = mysqli_fetch_array($sqlConsulta);
    $cod_servicio = $fconsulta['cod_servicio'];
    $nombre_servicio = $fconsulta['nombre_servicio'];
    $descripcion = $fconsulta['descripcion'];
    $costo = $fconsulta['costo'];
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
                                    <label for="nombre_servicio" class="col-md-2 col-form-label">Nombre Servicio</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="nombre_servicio" id="nombre_servicio" value="<?= $nombre_servicio?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="descripcion" class="col-md-2 col-form-label">Descripcion</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="descripcion" id="descripcion" value="<?= $descripcion?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="costo" class="col-md-2 col-form-label">Costo Servicio</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="costo" id="costo" value="<?= $costo?>">
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
                                        <input type="hidden" name="modulo" id="modulo">
                                        <input type="hidden" name="proceso" id="proceso">
                                        <input type="hidden" name="cod_servicio" id="cod_servicio" value="<?=$cod_servicio?>">
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
            $("#benviar").click(function(e){
                e.preventDefault();
                if($("#nombre_servicio").val() == ''){
                    Swal.fire({
                    title: 'Servicios',
                    text: "Ingrese Servicio",
                    icon: 'warning'
                    })
                    $("#nombre_servicio").focus();
                    return false;
                }
                if($("#descripcion").val() == ''){
                    Swal.fire({
                    title: 'Servicios',
                    text: "Ingrese Descripción",
                    icon: 'warning'
                    })
                    $("#descripcion").focus();
                    return false;
                }
                if($("#costo").val() == ''){
                    Swal.fire({
                    title: 'Servicios',
                    text: "Ingrese Costo",
                    icon: 'warning'
                    })
                    $("#costo").focus();
                    return false;
                }
                /*************************************************/
                /*************************************************/
                $("#proceso").val('ActualizarServicios');
                $("#modulo").val('Servicios');
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
                            'Servicios',
                            '¡Se actualizó con éxito!',
                            'success'
                            );
                            setTimeout(function(){
                                location.reload();
                            }, 3000);
                        }else{
                            Swal.fire({
                            title: 'Servicios',
                            text: "El Servicio ya existe",
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