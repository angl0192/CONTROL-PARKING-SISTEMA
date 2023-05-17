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
                                <div class="mb-3 row">
                                    <label for="nombre_puntoventa" class="col-md-2 col-form-label">Punto Venta</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="nombre_puntoventa" id="nombre_puntoventa">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="codigo_puntoventa" class="col-md-2 col-form-label">Código Punto Venta</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="codigo_puntoventa" id="codigo_puntoventa">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="alias" class="col-md-2 col-form-label">Tienda</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="alias" id="alias">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Departamento</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="Departamento" id="Departamento">
                                            <option value='0'>Departamento</option>
                                            <?php                                                            
                                                $sqlDeptar = mysqli_query($conexion, "SELECT * FROM ubigeo_departamentos");
                                                while($fdep = mysqli_fetch_array($sqlDeptar)){
                                                    $id_dep = $fdep['id'];
                                                    $departamento = $fdep['name'];
                                                    echo "<option value='$id_dep'>$departamento</option>";
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Provincia</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="Provincia" id="Provincia">
                                            <option value='0'>Provincia</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Distrito</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="Distrito" id="Distrito">
                                            <option value='0'>Distrito</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="codigoUbigeo" class="col-md-2 col-form-label">Código Ubigeo</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="codigoUbigeo" id="codigoUbigeo">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="codigoLocal" class="col-md-2 col-form-label">Código Local</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="codigoLocal" id="codigoLocal">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="direccion" class="col-md-2 col-form-label">Dirección</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="direccion" id="direccion">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="telefono" class="col-md-2 col-form-label">Teléfono</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="telefono" id="telefono">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="email" id="email">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Estado</label>
                                    <div class="col-md-10">
                                        <input type="radio" name="estado" value="A" checked> Activo
                                        <input type="radio" name="estado" value="I"> Inactivo
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
                $("#proceso").val('RegistrarPuntoVenta');
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
                            '¡Se registró con éxito!',
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