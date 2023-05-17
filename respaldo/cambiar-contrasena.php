<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");

    $sqlConsulta = mysqli_query($conexion, "SELECT cod_personal, nombres, apellidos FROM personal WHERE cod_personal = '$xCodPer'");
    $fila = mysqli_fetch_array($sqlConsulta);
    $cod_personal = $fila['cod_personal'];
    $nombres = $fila['nombres'];
    $apellidos = $fila['apellidos'];
?>

<!doctype html>
<html lang="es">
    <head>

        <?php require("config/header-web.php"); ?>

        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-sidebar="dark">
        <div id="layout-wrapper">

            <!-- ************************************************************** -->
            <!-- ****************       HEADER APP          ******************* -->
            <!-- ************************************************************** -->
            <?php require("config/header.php"); ?>
            <!-- ************************************************************** -->
            <!-- ****************       MENU PRINCIPAL        ***************** -->
            <!-- ************************************************************** -->
            <?php require("config/menu.php"); ?>
            <!-- ************************************************************** -->
            <!-- *********************** CONTENIDO APP ************************ -->
            <!-- ************************************************************** -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">                                   
                                        <div class="row mb-2">
                                            <div class="col-sm-7">
                                                <h4>Cambiar Contraseña</h4>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="text-sm-end">
                                                    <a href="dashboard.php" class="btn btn-success waves-effect waves-light mb-2 me-2">
                                                        <i class="mdi mdi-view-dashboard nav-icon"></i>
                                                        Volver
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <form action="" name="fapps" id="fapps" method="POST">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="mb-3 row">
                                                        <label for="usuario" class="col-md-2 col-form-label">Usuario</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="nombres" id="nombres" value="<?= $nombres ?> <?=$apellidos?>" readonly>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="clave_actual" class="col-md-2 col-form-label">Contraseña Actual</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="password" name="clave_actual" id="clave_actual"">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="clave" class="col-md-2 col-form-label">Contraseña Nueva</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="password" name="clave" id="clave">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="clave2" class="col-md-2 col-form-label">Confirmar Contraseña</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="password" name="clave2" id="clave2">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="mb-3 row">   
                                                        <label for="boton" class="col-md-2 col-form-label"></label>
                                                        <div class="col-md-10">
                                                            <button type="button" class="btn btn-success waves-effect waves-light" id="benviar">
                                                                ACTUALIZAR CONTRASEÑA
                                                            <input type="hidden" name="cod_personal" id="cod_personal" value= "<?= $cod_personal ?>">
                                                            <input type="hidden" name="proceso" id="proceso">
                                                            <input type="hidden" name="modulo" id="modulo">
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ********************************************************** -->
                <!-- *****************      FOOTER     ************************ -->
                <!-- ********************************************************** -->
                <?php require("config/footer.php"); ?>
            </div><!-- end main content-->
        </div><!-- END layout-wrapper -->

        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>
        <!-- app.js -->
        <script src="assets/js/app.js"></script>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>
        
        <script>
            $(function(){
            $("#clave_actual").keypress(function(e){
                if(e.which==13){
                    ValidarGenerarClave();
                    return false;
                }
            });

            $("#clave").keypress(function(e){
                if(e.which==13){
                    ValidarGenerarClave();
                    return false;
                }
            });

            $("#clave2").keypress(function(e){
                if(e.which==13){
                    ValidarGenerarClave();
                    return false;
                }
            });

            $("#benviar").click(function(){
                ValidarGenerarClave();
                return false;
            })

            function ValidarGenerarClave(){
                if($("#clave_actual").val()==''){
                    Swal.fire({
                    title: 'Contraseña',
                    text: "Ingrese contraseña actual",
                    icon: 'warning'
                    })
                    //alert("Ingresar Contraseña Actual");
                    $("#clave_actual").focus();
                    return false;
                }

                if($("#clave").val()=='' || $("#clave").val().length<6){
                    Swal.fire({
                    title: 'Contraseña',
                    text: "Ingresar mínimo 6 caracteres",
                    icon: 'warning'
                    })
                    //alert("Ingresar Mínimo 6 Caracteres");
                    $("#clave").focus();
                    return false;
                }

                if($("#clave2").val()=='' || $("#clave2").val().length<6){
                    Swal.fire({
                    title: 'Contraseña',
                    text: "Confirmar Contraseña",
                    icon: 'warning'
                    })
                    //alert("Confirmar Contraseña");
                    $("#clave2").focus();
                    return false;
                }

                if($("#clave").val() != $("#clave2").val()){
                    Swal.fire({
                    title: 'Contraseña',
                    text: "Las contraseñas deben ser iguales",
                    icon: 'warning'
                    })
                    //alert("Las contraseñas deben ser iguales");
                    $("#clave2").focus();
                    return false;
                }
                ActualizarClave();
            }

            function ActualizarClave(){
                $("#proceso").val('ActualizarClave');
                $("#modulo").val('Clave');
                var datosEnviar = $("#fapps").serialize();
                $.ajax({
                    data: datosEnviar,
                    url: "config/proceso-guardar.php",
                    type: "POST",
                    dataType: "json",
                    /*
                    beforeSend: function(){
                        $("#benviar").val("Procesando...");
                    },*/
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            Swal.fire(
                                'Contraseña',
                                '¡Su contraseña se restableció con éxito!',
                                'success'
                                )
                            /*alert("¡Su contraseña se restableció con éxito!");
                            setTimeout(function(){
                                location.reload();
                            }, 1000);*/
                        }else{
                            Swal.fire({
                            icon: 'error',
                            title: 'Error...',
                            text: 'Su contraseña actual no coincide',
                            })
                            /*alert("Su contraseña actual no coincide");
                            setTimeout(function(){
                                location.reload();
                            }, 1000);*/
                        }
                    }
                })
            }
        });
            /**************************************************/
            /**************************************************/        
        </script>
    </body>
</html>