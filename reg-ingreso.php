<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $cod_estacionamiento = $_REQUEST['cod_estacionamiento'];
?>
<!doctype html>
<html lang="es">
    <head>

        <?php require("config/header-web.php"); ?>

        <!-- plugin css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://fonts.cdnfonts.com/css/ds-digital">

    </head>

    <body>
        <div class="row">
                <div class="card-body">
                    <form action="" id="fapps" method="POST">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="mb-3 row">
                                    <label for="num_placa" class="col-md-2 col-form-label">HORA INGRESO</label>
                                    <div class="col-md-10">
                                        <div id="relojnumerico" class="reloj" onload="cargarReloj();"></div>
                                    </div>                                    
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">TIPO CLIENTE</label>
                                    <div class="col-md-10">
                                        <input type="radio" name="tipo_cliente" value="LIBRE" checked> Libre
                                        <input type="radio" name="tipo_cliente" value="ABONADO"> Abonado
                                    </div>
                                </div>
                                <div class="mb-3 row abonados">
                                    <label for="nombres" class="col-md-2 col-form-label">NOMBRE CLIENTE</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="nombres" id="nombres" placeholder="Nombre del Cliente">
                                    </div>
                                </div>
                                <div class="mb-3 row abonados">
                                    <label for="num_documento" class="col-md-2 col-form-label">N° DOCUMENETO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="num_documento" id="num_documento" placeholder="DNI/RUC">
                                    </div>
                                </div>
                                <div class="mb-3 row abonados">
                                    <label for="email" class="col-md-2 col-form-label">EMAIL</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="email" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="mb-3 row abonados">
                                    <label for="movil" class="col-md-2 col-form-label">TELÉFONO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="movil" id="movil" placeholder="Teléfono">
                                    </div>
                                </div>
                                <div class="mb-3 row abonados">
                                    <label for="direccion" class="col-md-2 col-form-label">DIRECCIÓN</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="direccion" id="direccion" placeholder="Direccion">
                                    </div>
                                </div>
                                <div class="mb-3 row abonados">
                                    <label for="marca_vehiculo" class="col-md-2 col-form-label">MARCA VEHÍCULO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="marca_vehiculo" id="marca_vehiculo" placeholder="Marca de vehículo">
                                    </div>
                                </div>
                                <div class="mb-3 row abonados">
                                    <label for="fecha_ingreso" class="col-md-2 col-form-label">FECHA INGRESO</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" name="fecha_ingreso" id="fecha_ingreso" placeholder="Fecha de Ingreso">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="num_placa" class="col-md-2 col-form-label">NÚMERO PLACA</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="num_placa" id="num_placa" placeholder="Número de Placa">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="observacion" class="col-md-2 col-form-label">OBSERVACIÓN</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="observacion" id="observacion" placeholder="Observación">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="exampleDataList" class="col-md-2 col-form-label"></label>
                                    <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect waves-light" id="benviar">
                                            <i class="mdi mdi-content-save"></i>
                                            REGISTRAR INGRESO
                                        </button>
                                        <input type="hidden" name="modulo" id="modulo">
                                        <input type="hidden" name="proceso" id="proceso">
                                        <input type="hidden" name="cod_estacionamiento" id="cod_estacionamiento" value="<?= $cod_estacionamiento ?>">
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
    <!-- reloj.js -->
    <script src="assets/js/reloj.js"></script>
    <script src="assets/js/VentanaCentrada.js"></script>

    <script>
        $(function(){
            $(".abonados").hide();
            /**********************************************/
            $("input:radio[name=tipo_cliente]").on("click", function() {
                var tipo_cliente = $("input:radio[name=tipo_cliente]:checked").val();
                if (tipo_cliente == 'ABONADO') {
                    $(".abonados").show();
                } else {
                    $(".abonados").hide();
                    $("#nombres").val('');
                    $("#num_documento").val('');
                    $("#email").val('');
                    $("#movil").val('');
                    $("#direccion").val('');
                    $("#marca_vehiculo").val('');
                    $("#fecha_ingreso").val('');
                }
            })
            /**********************************************/
            $("#benviar").click(function(e){
                e.preventDefault();
                var tipo_cliente = $("input:radio[name=tipo_cliente]:checked").val();
                if (tipo_cliente == 'ABONADO') {
                    if ($("#nombres").val() == '') {
                        Swal.fire({
                        title: 'Ingreso',
                        text: "Ingrese Nombre de Cliente",
                        icon: 'warning'
                        })
                        $("#nombres").focus();
                        return false
                    }
                    if ($("#num_documento").val() == '') {
                        Swal.fire({
                        title: 'Ingreso',
                        text: "Ingrese Número de Documento",
                        icon: 'warning'
                        })
                        $("#num_documento").focus();
                        return false
                    }
                    if ($("#email").val() == '') {
                        Swal.fire({
                        title: 'Ingreso',
                        text: "Ingrese Email",
                        icon: 'warning'
                        })
                        $("#email").focus();
                        return false
                    }
                    if ($("#movil").val() == '') {
                        Swal.fire({
                        title: 'Ingreso',
                        text: "Ingrese Teléfono",
                        icon: 'warning'
                        })
                        $("#movil").focus();
                        return false
                    }
                    if ($("#direccion").val() == '') {
                        Swal.fire({
                        title: 'Ingreso',
                        text: "Ingrese Dirección",
                        icon: 'warning'
                        })
                        $("#direccion").focus();
                        return false
                    }
                    if ($("#marca_vehiculo").val() == '') {
                        Swal.fire({
                        title: 'Ingreso',
                        text: "Ingrese Marca de Vehículo",
                        icon: 'warning'
                        })
                        $("#marca_vehiculo").focus();
                        return false
                    }
                    if ($("#fecha_ingreso").val() == '') {
                        Swal.fire({
                        title: 'Ingreso',
                        text: "Ingrese Fecha de Ingreso",
                        icon: 'warning'
                        })
                        $("#fecha_ingreso").focus();
                        return false
                    }
                }
                if($("#num_placa").val() == ''){
                    Swal.fire({
                    title: 'Ingreso',
                    text: "Ingrese Número Placa",
                    icon: 'warning'
                    })
                    $("#num_placa").focus();
                    return false;
                }
                RegistrarIngreso();                
            })
        })
        /**********************************************************/
        function RegistrarIngreso(){
            $("#proceso").val("registrarIngreso");
            var datosEnviar = $("#fapps").serialize();
            VentanaCentrada('ventas/guardar-factura.php?' +datosEnviar, 'Parkeo');  //VentanaCentrada('ventas/guardar-factura.php?' +datosEnviar, 'Parkeo', '1024', '768', 'true');
            location.href = "ingreso.php";
        }
    </script>

    </body>
</html>