<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");   
?>
<!doctype html>
<html lang="es">
<head>

        <?php require("config/header-web.php"); ?>

        <!-- flatpickr css -->
        <link href="assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css">

        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />


    </head>

    <body data-topbar="dark" data-sidebar="dark">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <!-- ************************************************************** -->
        <!-- ****************       HEADER APP          ******************* -->
        <!-- ************************************************************** -->
        <?php require("config/header.php"); ?>

        <!-- ************************************************************** -->
        <!-- ****************       MENU PRINCIPAL        ***************** -->
        <!-- ************************************************************** -->
        <?php require("config/menu.php"); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-start">
                                        <div class="col-sm">
                                            <div>
                                                <h4>Locales</h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-auto">
                                            <div class="d-flex gap-1">
                                                <div>
                                                    <button type="button" class="btn btn-light mb-4"" data-bs-toggle="modal" data-bs-target="#bs-example-modal-xl" data-remote="reg-locales.php"><i class="mdi mdi-plus me-1"></i> Nuevo Local</button>
                                                </div>
                                                <div class="dropdown">
                                                    <a class="btn btn-link text-body shadow-none dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="uil uil-ellipsis-h"></i>
                                                    </a>
                                                  
                                                    <ul class="dropdown-menu dropdown-menu-end">
                                                        <li><a class="dropdown-item" href="#">Action</a></li>
                                                        <li><a class="dropdown-item" href="#">Another action</a></li>
                                                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-responsive mt-4 mt-sm-0">
                                        <table class="table align-middle table-nowrap table-check">
                                            <thead>
                                                <tr class="bg-transparent">
                                                    <!--<th style="width: 30px;">
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" name="check" class="form-check-input" id="checkAll">
                                                            <label class="form-check-label" for="checkAll"></label>
                                                        </div>
                                                    </th>-->
                                                    <th>Nombre</th>
                                                    <th>Alias</th>
                                                    <th>Departamento</th>
                                                    <th>Provincia</th>
                                                    <th>Distrito</th>
                                                    <th>Dirección</th>
                                                    <th>Teléfono</th>
                                                    <th>Email</th>
                                                    <th>Estado</th>
                                                    <th style="width: 120px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody> 

                                                <?php
                                                $sqlLocales = mysqli_query($conexion, "SELECT * FROM puntos_venta");
                                                while($floc = mysqli_fetch_array($sqlLocales)){
                                                    $cod_puntoventa = $floc['cod_puntoventa'];
                                                    $nombre_puntoventa = $floc['nombre_puntoventa'];
                                                    $alias = $floc['alias'];
                                                    $Departamento = $floc['Departamento'];
                                                    $Provincia = $floc['Provincia'];
                                                    $Distrito = $floc['Distrito'];
                                                    $direccion = $floc['direccion'];
                                                    $telefono = $floc['telefono'];
                                                    $email = $floc['email'];
                                                    if($floc['estado'] == 'A'){
                                                        $estado = "<div class='badge badge-soft-success font-size-12'>Activo</div>";
                                                    }else{
                                                        $estado = "<div class='badge badge-soft-danger font-size-12'>Inactivo</div>";
                                                    }
                                                ?>
                                                <tr>
                                                    <!--<td>
                                                        <div class="form-check font-size-16">
                                                            <input type="checkbox" class="form-check-input">
                                                            <label class="form-check-label"></label>
                                                        </div>
                                                    </td>-->                                                   
                                                    <td>
                                                        <?= $nombre_puntoventa ?>
                                                    </td>
                                                    <td>
                                                        <?= $alias ?>
                                                    </td>
                                                    <td>
                                                        <?= $Departamento ?>
                                                    </td>                                                    
                                                    <td>
                                                        <?= $Provincia ?>
                                                    </td>
                                                    <td>
                                                        <?= $Distrito ?>
                                                    </td> 
                                                    <td>
                                                        <?= $direccion ?>
                                                    </td>
                                                    <td>
                                                        <?= $telefono ?>
                                                    </td> 
                                                    <td>
                                                        <?= $email ?>
                                                    </td> 
                                                    <td>
                                                        <?= $estado ?>
                                                    </td>                                                
                                                    <td>
                                                        <a href="#" class="btn btn-success"><i class="uil uil-edit-alt"></i></a>
                                                        <a href="#" class="btn btn-danger"><i class="mdi mdi-delete"></i></a>
                                                    </td>
                                                </tr><!-- end tr -->

                                                <?php                                                    
                                                }
                                                ?>
                                            </tbody><!-- end tbody -->
                                        </table><!-- end table -->
                                    </div>

                                    <div class="row g-0 text-center text-sm-start">
                                        <div class="col-sm-6">
                                            <div>
                                                <p class="mb-sm-0">Showing 1 to 10 of 57 entries</p>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                        <div class="col-sm-6">
                                            <ul class="pagination pagination-rounded justify-content-center justify-content-sm-end mb-sm-0">
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">1</a>
                                                </li>
                                                <li class="page-item active">
                                                    <a href="#" class="page-link">2</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">3</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">4</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link">5</a>
                                                </li>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                            </ul>
                                        </div><!-- end col -->
                                    </div><!-- end row -->
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->

                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-xl" id="bs-example-modal-xl" tabindex="-1" data-bs-backdrop="static" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Registrar/Editar Locales</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary waves-effect" data-bs-dismiss="modal">Cerrar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
            
            <!-- ********************************************************** -->
            <!-- *****************      FOOTER     ************************ -->
            <!-- ********************************************************** -->
            <?php require("config/footer.php"); ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Theme Customizer</h5>

                <a href="javascript:void(0);" class="right-bar-toggle-close ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout"
                        id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode"
                        id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-fluid" value="fluid" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fluid">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width"
                        id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color"
                        id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <div id="sidebar-setting">
                <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'md')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-size"
                        id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting mt-1">
                    <input class="form-check-input" type="radio" name="sidebar-color"
                        id="sidebar-color-brand" value="brand" onchange="document.body.setAttribute('data-sidebar', 'brand')">
                    <label class="form-check-label" for="sidebar-color-brand">Brand</label>
                </div>
            </div>

                <h6 class="mt-4 mb-3">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction"
                        id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div> <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <!-- flatpickr js -->
    <script src="assets/libs/flatpickr/flatpickr.min.js"></script>
    <!-- invoice-list init -->
    <script src="assets/js/pages/invoice-list.init.js"></script>

    <script src="assets/js/app.js"></script>

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
    </script>

    </body>
</html>