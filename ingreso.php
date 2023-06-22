<?php
require("config/conexion.php");
require("config/inicializar-datos.php");
?>
<!doctype html>
<html lang="es">

<head>
    <?php require("config/header-web.php"); ?>
    <!-- plugin css -->
    <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
    <!-- swiper css -->
    <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">
</head>

<body data-topbar="dark" data-sidebar="dark">
    <div id="layout-wrapper">
        <!-- ************************************************************** -->
        <!-- ****************       CABECERA APP          ***************** -->
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
                        <div class="col-md-3">
                            <div class="mb-3">
                                <h4>
                                    <i class="uil uil-plus me-1"></i> Ingresos
                                </h4>
                            </div>
                        </div><!-- end col -->
                    </div><!-- end row -->

                    <div class="mt-2">
                        <ul class="nav nav-tabs nav-tabs-custom mb-4" role="tablist">
                            <?php
                                $sqlNiveles = mysqli_query($conexion, "SELECT * FROM nivel WHERE estado = 'A'");
                                while($fnivel = mysqli_fetch_array($sqlNiveles)){
                                    $cod_nivel = $fnivel['cod_nivel'];
                                    $nivel = $fnivel['nivel'];
                                    $num++;
                                    if($num == 1){
                                        $active = "active";
                                    }else{
                                        $active = "";
                                    }
                            ?>
                            <li class="nav-item">
                                <a class="nav-link <?= $active ?>" data-bs-toggle="tab" href="#grid-<?= $cod_nivel ?>" role="tab"><?= $nivel ?></a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul><!-- end ul -->
                    </div>

                    <!-- Tab content -->
                    <div class="tab-content">
                        <?php
                            $sqlMNiveles = mysqli_query($conexion, "SELECT * FROM nivel WHERE estado = 'A'");
                            while($fmnivel = mysqli_fetch_array($sqlMNiveles)){
                                $x_conivel = $fmnivel['cod_nivel'];
                                $xnum++;
                                if($xnum == 1){
                                    $xactive = "active";
                                }else{
                                    $xactive = "";
                                }
                        ?>
                        <div class="tab-pane <?= $xactive ?>" id="grid-<?= $x_conivel ?>" role="tabpanel">
                            <div class="row">
                                <?php
                                    $sqlEstacionamiento = mysqli_query($conexion, "SELECT * FROM estacionamientos WHERE cod_nivel = '$x_conivel'");
                                    while($festa = mysqli_fetch_array($sqlEstacionamiento)){
                                        $cod_estacionamiento = $festa['cod_estacionamiento'];
                                        $numeracion = $festa['numeracion'];                                        
                                        $estado = $festa['estado'];
                                        /********************************************/
                                        $sqlParkeo = mysqli_query($conexion, "SELECT cod_parkeo, tipo_cliente, hora_ingreso, num_placa FROM parkeo WHERE cod_estacionamiento = '$cod_estacionamiento'");
                                        $fparkeo = mysqli_fetch_array($sqlParkeo);
                                        $cod_parkeo = $fparkeo['cod_parkeo'];
                                        $tipo_cliente = $fparkeo['tipo_cliente'];
                                        $hora_ingreso = $fparkeo['hora_ingreso'];
                                        $num_placa = $fparkeo['num_placa'];
                                        /********************************************/
                                        if($estado == 'Libre'){
                                            $imagen = "libre.png";
                                            $rotulo = "<span class='badge badge-soft-primary font-size-12'><i class='mdi mdi-clock-outline font-size-14 me-1 
                                            align-middle'></i> Libre</span>";
                                        }else{
                                            $imagen = "ocupado.png";
                                            $rotulo = "<span class='badge badge-soft-danger font-size-12'><i class='mdi mdi-clock-outline font-size-14 me-1 
                                            align-middle'></i> $hora_ingreso</span>
                                            <span class='badge badge-soft-primary font-size-12'><i class='mdi mdi-clock-outline font-size-14 me-1 
                                            align-middle'></i> $num_placa</span>";
                                        }
                                ?>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2><?= $numeracion ?></h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">                                                            
                                                            <?php
                                                            if($estado == 'Ocupado'){
                                                            ?>
                                                                <li><a class="dropdown-item" href="#">Editar</a></li>
                                                                <li>
                                                                    <a class="dropdown-item imprimirTicket" href="#">
                                                                        Imprimir Ticket
                                                                        <input type="hidden" name="cod_parkeo" value="<?= $cod_parkeo ?>" class="codimprimir">
                                                                    </a>
                                                                </li>
                                                            <?php
                                                            }else{
                                                            ?>
                                                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xl" data-remote="reg-ingreso.php?cod_estacionamiento=<?= $cod_estacionamiento ?>" 
                                                                data-sb-backdrop="static" data-sb-keyboard="false">Reservar</a></li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <?php
                                                    if($estado == 'Libre'){
                                                ?>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xl" data-remote="reg-ingreso.php?cod_estacionamiento=<?= $cod_estacionamiento ?>" 
                                                    data-sb-backdrop="static" data-sb-keyboard="false">
                                                        <img src="assets/images/<?= $imagen ?>" alt="<?= $estado ?>" style="margin: auto; display: block;">
                                                    </a>
                                                <?php
                                                    }else{
                                                ?>
                                                    <a>
                                                        <img src="assets/images/<?= $imagen ?>" alt="<?= $estado ?>" style="margin: auto; display: block;">
                                                    </a>
                                                <?php
                                                    }
                                                ?>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <?= $rotulo ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    }
                                ?>
                                
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- ********************************************************** -->
            <!-- *****************      Pie de Pagina     ***************** -->
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
                    <h5 class="modal-title" id="myExtraLargeModalLabel">REGISTRAR INGRESO</h5>
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

    <!-- apexcharts -->
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="assets/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="assets/libs/jsvectormap/maps/world-merc.js"></script>

    <!-- swiper js -->
    <script src="assets/libs/swiper/swiper-bundle.min.js"></script>

    <script src="assets/js/pages/dashboard.init.js"></script>

    <script src="assets/js/app.js"></script>
    <script src="assets/js/VentanaCentrada.js"></script>

    <script>
        $(function(){
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
        /******************************************************/
        /******************************************************/
        $(document).on("click", ".imprimirTicket", function(e){
            e.preventDefault();
            var cod_parkeo = $(".codimprimir", this).val();
            VentanaCentrada('ventas/ver-ticket.php?cod_parkeo=' +cod_parkeo, 'Parkeo');
        })
        /******************************************************/
        /******************************************************/
    </script>

</body>

</html>