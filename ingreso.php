<?php
require("config/conexion.php");
require("config/inicializar-datos.php");
?>
<!doctype html>
<html lang="en">

<head>
    <?php require("config/cabecera-web.php"); ?>
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
        <?php require("config/cabecera.php"); ?>
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
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#grid-all" role="tab">Primer Nivel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#grid-active">Segundo Nivel</a>
                            </li>
                        </ul><!-- end ul -->
                    </div>

                    <!-- Tab content -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="grid-all" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>01</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/ocupado.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 15:00pm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>03</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>04</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/ocupado.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 15:00pm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>05</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/ocupado.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-danger font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> 15:00pm</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>06</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ******************************************************* -->
                        <!-- *******************  SEGUNDO NIVEL  ******************* -->
                        <!-- ******************************************************* -->
                        <div class="tab-pane" id="grid-active" role="tabpanel">
                            <div class="row">
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-2 col-sm-6">
                                    <div class="card">
                                        <div class="card-body pb-3">
                                            <div class="d-flex align-items-start mb-3">
                                                <div class="flex-grow-1">
                                                    <h2>02</h2>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <div class="dropdown">
                                                        <a class="text-body dropdown-toggle font-size-16" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="icon-xs" data-feather="more-horizontal"></i>
                                                        </a>
                                                        <ul class="dropdown-menu dropdown-menu-end">
                                                            <li><a class="dropdown-item" href="#">Detalle</a></li>
                                                            <li><a class="dropdown-item" href="#">Reservar</a></li>
                                                            <li><a class="dropdown-item" href="#">Editar Estado</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <a href="#">
                                                    <img src="assets/images/libre.png" alt="" style="margin: auto; display: block;">
                                                </a>
                                            </div>
                                            <div class="pt-3">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="badge badge-soft-primary font-size-12"><i class="mdi mdi-clock-outline font-size-14 me-1 align-middle"></i> Libre</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab content -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- ********************************************************** -->
            <!-- *****************      Pie de Pagina     ***************** -->
            <!-- ********************************************************** -->
            <?php require("config/pie-pagina.php"); ?>
        </div><!-- end main content-->
    </div><!-- END layout-wrapper -->

    <!-- JAVASCRIPT -->
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

</body>

</html>