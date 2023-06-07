<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");  
?>
<!doctype html>
<html lang="es">
    <head>

        <?php require("config/header-web.php"); ?>

        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
                
        <!-- DataTables -->
        <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
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
                                            <h4>Estacionamientos</h4>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="text-sm-end">
                                                <button type="button" class="btn btn-success waves-effect waves-light mb-2 me-2" data-bs-toggle="modal"
                                                data-bs-target="#bs-example-modal-xl" data-remote="reg-estacionamiento.php" data-sb-backdrop="static" data-sb-keyboard="false">
                                                    <i class="bx bxs-add-to-queue"></i>
                                                    NUEVO ESTACIONAMIENTO
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>Punto Venta</th>
                                            <th>Nivel</th>
                                            <th>Numeración</th>
                                            <th>Estado</th>
                                            <th>Accion</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sqlConsulta = mysqli_query($conexion, "SELECT * FROM estacionamientos");
                                                while($fcons = mysqli_fetch_array($sqlConsulta)){
                                                    $cod_estacionamiento = $fcons['cod_estacionamiento'];
                                                    $cod_puntoventa = $fcons['cod_puntoventa'];
                                                    $cod_nivel = $fcons['cod_nivel'];
                                                    $numeracion = $fcons['numeracion'];
                                                    if($fcons['estado'] == 'Ocupado'){
                                                        $estado = "<div class='badge badge-soft-danger font-size-12'>No Disponible</div>";
                                                    }else{
                                                        $estado = "<div class='badge badge-soft-success font-size-12'>Disponible</div>";
                                                    }
                                                    /******************************************************************************************/
                                                    $sqlPuntoVenta = mysqli_query($conexion, "SELECT * FROM puntos_venta WHERE cod_puntoventa = '$cod_puntoventa'");
                                                    $fcons = mysqli_fetch_array($sqlPuntoVenta);
                                                    $nombre_puntoventa = $fcons['nombre_puntoventa'];
                                                    /******************************************************************************************/
                                                    $sqlNiveles = mysqli_query($conexion, "SELECT * FROM nivel WHERE cod_nivel = '$cod_nivel'");
                                                    $fnivel = mysqli_fetch_array($sqlNiveles);
                                                        $cod_nivel = $fnivel['cod_nivel'];
                                                        $nivel = $fnivel['nivel'];
                                                    /******************************************************************************************/
                                            ?>
                                            <tr>
                                                <td><?= $nombre_puntoventa ?></td>
                                                <td><?= $nivel ?></td>
                                                <td>Estacionamiento <?= $numeracion ?></td>
                                                <td><?= $estado ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-success waves-effect waves-light" data-bs-toggle="modal"
                                                    data-bs-target="#bs-example-modal-xl" data-remote="mod-estacionamiento.php?cod_estacionamiento=<?=$cod_estacionamiento?>" 
                                                    data-sb-backdrop="static" data-sb-keyboard="false">
                                                        <i class="uil uil-edit-alt"></i>
                                                    </a>
                                                    <a href="#" class="btn btn-danger borrarReg">
                                                        <i class="mdi mdi-delete"></i>
                                                        <input type="hidden" class="codborrar" name="codborrar" value="<?=$cod_estacionamiento?>">
                                                    </a>
                                                </td>
                                            </tr> 
                                            <?php
                                                }
                                            ?>                                          
                                        </tbody>
                                    </table>
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
    <!-- ****************************************************************** -->
    <!-- ********************** MODAL LARGE ******************************* -->
    <!-- ****************************************************************** -->
    <div class="modal fade bs-example-modal-xl" id="bs-example-modal-xl" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myExtraLargeModalLabel">Insertar/Editar Estacionamientos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary waves-effect" data-bs-dismiss="modal">CERRAR</button>
                </div>
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
    <!-- Datatable init js -->
    <script src="assets/js/pages/datatables.init.js"></script>
    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>
    <!-- app.js -->
    <script src="assets/js/app.js"></script>
    <script>
        $(function(){
            /**************************************************/
            /**************************************************/
            $(document).on('click', '.borrarReg', function(){
                var cod_estacionamiento = $('.codborrar', this).val();
                var datosEnviar = {
                    'cod_estacionamiento': cod_estacionamiento,
                    'modulo': "Estacionamientos"
                }
                Swal.fire({
                    title: '¡Eliminar!',
                    text: "¿Desea eliminar el registro?",
                    icon: 'error',
                    showCancelButton: true,
                    confirmButtonText: 'SÍ',
                    cancelButtonText: 'CANCELAR'
                }).then((result) => {
                    if(result.isConfirmed){
                        $.ajax({
                        data: datosEnviar,
                        url: 'config/proceso-eliminar.php',
                        type: 'POST',
                        dataType: 'json',
                        success: function(datos){
                            if(datos.respuesta == 'SI'){
                                Swal.fire(
                                    '¡Eliminado!',
                                    'Su registro ha sido eliminado.',
                                    'success'                                    
                                );
                                setTimeout(function(){
                                location.reload();
                                }, 3000);
                            }else{
                                return false;
                            }
                        }
                    })
                    }else{
                        return false;
                    }
                    
                })
                return false;
            });
            /**************************************************/
            /**************************************************/
            var remoto_href = '';
            jQuery('body').on('click', '[data-bs-toggle="modal"]', function() {
                if (remoto_href != jQuery(this).data("remote")) {
                    remoto_href = jQuery(this).data("remote");
                    jQuery(jQuery(this).data("bs-target")).find('.modal-body').empty();
                    jQuery(jQuery(this).data("bs-target") + ' .modal-body').load(remoto_href);
                    //$(".bs-example-modal-xl .modal-body").load(remoto_href);
                }
                return false
            });
        })
    </script>
    </body>
</html>