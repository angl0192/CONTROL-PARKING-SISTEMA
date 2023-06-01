<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
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
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Punto Venta</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="cod_puntoventa" id="cod_puntoventa">
                                            <option value="0">Seleccionar Punto Venta</option>
                                            <?php                                                                
                                                    $sqlPuntosVenta = mysqli_query($conexion, "SELECT * FROM puntos_venta");
                                                    while($fpuntv = mysqli_fetch_array($sqlPuntosVenta)){
                                                        $cod_puntoventa = $fpuntv['cod_puntoventa'];
                                                        $nombre_puntoventa = $fpuntv['nombre_puntoventa'];
                                                        echo "<option value='$cod_puntoventa'>$nombre_puntoventa</option>";
                                                    }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Nivel</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="nivel" id="nivel">
                                            <option value="0">Seleccionar nivel</option>
                                            <option value="Primer Nivel">Primer Nivel</option>
                                            <option value="Segundo Nivel">Segundo Nivel</option>
                                            <option value="Tercer Nivel">Tercer Nivel</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="numeracion" class="col-md-2 col-form-label">Numeración</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="numeracion" id="numeracion">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Estado</label>
                                    <div class="col-md-10">
                                        <input type="radio" name="estado" value="Libre" checked> Disponible
                                        <input type="radio" name="estado" value="Ocupado"> No Disponible
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="exampleDataList" class="col-md-2 col-form-label"></label>
                                    <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect waves-light" id="benviar">
                                            <i class="mdi mdi-content-save"></i>
                                            REGISTRAR
                                        </button>
                                        <input type="hidden" name="proceso" id="proceso">
                                        <input type="hidden" name="modulo" id="modulo">
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
                if($("#cod_puntoventa").val() == 0){
                    Swal.fire({
                    title: 'Estacionamientos',
                    text: "Seleccionar Punto Venta",
                    icon: 'warning'
                    })
                    $("#cod_puntoventa").focus();
                    return false;
                }
                if($("#nivel").val() == 0){
                    Swal.fire({
                    title: 'Estacionamientos',
                    text: "Seleccionar Nivel",
                    icon: 'warning'
                    })
                    $("#nivel").focus();
                    return false;
                }
                if($("#numeracion").val() == ''){
                    Swal.fire({
                    title: 'Estacionamientos',
                    text: "Ingrese numeracion",
                    icon: 'warning'
                    })
                    $("#numeracion").focus();
                    return false;
                }
                /*************************************************/
                /*************************************************/
                $("#proceso").val('RegistrarEstacionamientos');
                $("#modulo").val('Estacionamientos');
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
                            'Estacionamientos',
                            '¡Se registró con éxito!',
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