<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $sqlConsulta = mysqli_query($conexion, "SELECT cod_personal, nombres, apellidos, cod_tipodoc, num_documento, email, movil FROM personal WHERE cod_personal = '$xCodPer'");
    $fpersonal = mysqli_fetch_array($sqlConsulta);
    $cod_personal = $fpersonal['cod_personal'];
    $nombres = $fpersonal['nombres'];
    $apellidos = $fpersonal['apellidos'];
    $cod_tipodoc = $fpersonal['cod_tipodoc'];
    $num_documento = $fpersonal['num_documento'];
    $email = $fpersonal['email'];
    $movil = $fpersonal['movil'];
?>

<!doctype html>
<html lang="en">

<head>
        <?php
            require("config/header-web.php");
        ?>
        

        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

        <!-- plugin css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">

        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            <?php require("config/header.php"); ?>

            <?php require("config/menu.php"); ?>

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 titulo-formulario">¡Bienvenido <?= $xNombres ?>!</h4>

                                    <div class="page-title-right">
                                        <div class="button-items">
                                            <a href="dashboard.php" class="btn btn-success waves-effect waves-light">
                                                <i class="mdi mdi-view-dashboard nav-icon"></i> Volver
                                            </a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <form action="" name="fapps" id="fapps" method="POST">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
            
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Nombres</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="nombres" id="nombres" value="<?= $nombres; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Apellidos</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="apellidos" id="apellidos" value="<?= $apellidos; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Tipo de Documento</label>
                                                <div class="col-md-10">
                                                    <select class="form-select" name="cod_tipodoc" id="cod_tipodoc">
                                                        <?php
                                                            if($cod_tipodoc == 0 or $cod_tipodoc == ''){
                                                                echo "<option value='0'>Tipo de Documento</option>";
                                                                $sqlDocs = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad");
                                                                while($fdoc = mysqli_fetch_array($sqlDocs)){
                                                                    $xcod_tipodoc = $fdoc['cod_tipodoc'];
                                                                    $descripcion = $fdoc['descripcion'];
                                                                    echo "<option value='$xcod_tipodoc'>$descripcion</option>";
                                                                }
                                                            }else{
                                                                $sqlDocs = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad WHERE cod_tipodoc = '$cod_tipodoc'");
                                                                while($fdoc = mysqli_fetch_array($sqlDocs)){
                                                                    $xcod_tipodoc = $fdoc['cod_tipodoc'];
                                                                    $descripcion = $fdoc['descripcion'];
                                                                    echo "<option value='$xcod_tipodoc'>$descripcion</option>";
                                                                }
                                                                $sqlDocs = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad WHERE cod_tipodoc != '$cod_tipodoc'");
                                                                while($fdoc = mysqli_fetch_array($sqlDocs)){
                                                                    $xcod_tipodoc = $fdoc['cod_tipodoc'];
                                                                    $descripcion = $fdoc['descripcion'];
                                                                    echo "<option value='$xcod_tipodoc'>$descripcion</option>";
                                                                }
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">N° de Documento</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="num_documento" id="num_documento" value="<?= $num_documento; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Email</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="email" id="email" value="<?= $email; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-md-2 col-form-label">Teléfono</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="movil" id="movil" value="<?= $movil; ?>">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">   
                                                <label for="exampleDataList" class="col-md-2 col-form-label"></label>
                                                <div class="col-md-10">
                                                    <input type="button" class="btn btn-success waves-effect waves-light" value="ACTUALIZAR DATOS" id="benviar">
                                                    <input type="hidden" name="cod_personal" value= "<?= $cod_personal ?>">
                                                    <input type="hidden" name="proceso" id="proceso">
                                                    <input type="hidden" name="modulo" id="modulo">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div>
                        </form>
                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <?php require("config/footer.php"); ?>
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->  

        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <script src="assets/js/app.js"></script>

        <!-- Sweet Alerts js -->
        <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <!-- Sweet alert init js-->
        <script src="assets/js/pages/sweet-alerts.init.js"></script>

        <script>
            $(function(){
                $("#benviar").click(function(){
                    $("#proceso").val("ActualizarPerfil");
                    $("#modulo").val("Perfil");
                    var datosEnviar = $("#fapps").serialize();
                    $.ajax({
                        data: datosEnviar,
                        url: "config/proceso-guardar.php",
                        type: "POST",
                        dataType: "json",
                        /*beforeSend: function(){
                            $("#benviar").val("Procesando");
                        },*/
                        success: function(data){
                            var respuesta = data.respuesta;
                            if(respuesta == 'SI'){
                                Swal.fire(
                                'Mi Perfil',
                                '¡Actualización Exitosa!',
                                'success'
                                )
                                //location.reload();
                            }
                        }
                    })
                })
            })
            /**************************************************/
            /**************************************************/        
        </script>
    </body>

</html>
