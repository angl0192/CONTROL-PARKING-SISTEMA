<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");             
?>

<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="dashboard.php" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/icono.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-blanco.png" alt="" height="60">
                    </span>
                </a>
                <a href="dashboard.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/icono.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo-blanco.png" alt="" height="60">
                    </span>
                </a>
            </div> 
            <button type="button" class="btn btn-sm px-3 header-item vertical-menu-btn noti-icon">
                <i class="fa fa-fw fa-bars font-size-16"></i>
            </button>        
        </div>
        <!--  -->
        <div class="d-flex">
            <!-- ************************************************************ -->
            <!-- ***************  DESPLEGABLE NOTIFICACIONES  *************** -->
            <!-- ************************************************************ -->
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bx bx-bell icon-sm"></i>
                    <span class="noti-dot bg-danger rounded-pill">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-15"> Notifications </h5>
                            </div>
                            <div class="col-auto">
                                <a href="javascript:void(0);" class="small"> Mark all as read</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 250px;">
                        <h6 class="dropdown-header bg-light">New</h6>
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-3.jpg"
                                    class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Justin Verduzco</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Your task changed an issue from "In Progress" to <span class="badge badge-soft-success">Review</span></p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-primary rounded-circle font-size-16">
                                            <i class="uil-shopping-basket"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">New order has been placed</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Open the order confirmation or shipment confirmation.</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 5 hours ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <h6 class="dropdown-header bg-light">Earlier</h6>
                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <div class="avatar-sm me-3">
                                        <span class="avatar-title bg-soft-success text-success rounded-circle font-size-16">
                                            <i class="uil-truck"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Your item is shipped</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Here is somthing that you might light like to know.</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <a href="#" class="text-reset notification-item">
                            <div class="d-flex border-bottom align-items-start">
                                <div class="flex-shrink-0">
                                    <img src="assets/images/users/avatar-4.jpg"
                                        class="me-3 rounded-circle avatar-sm" alt="user-pic">
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-1">Salena Layfield</h6>
                                    <div class="text-muted">
                                        <p class="mb-1 font-size-13">Yay ! Everything worked!</p>
                                        <p class="mb-0 font-size-10 text-uppercase fw-bold"><i class="mdi mdi-clock-outline"></i> 3 days ago</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="p-2 border-top d-grid">
                        <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                            <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                        </a>
                    </div>
                </div>
            </div>
            <!-- ************************************************************ -->
            <!-- ***************        DESPLEGABLE USUARIO     ************* -->
            <!-- ************************************************************ -->
            <div class="dropdown d-inline-block" id="right-bar-toggle">
                <button type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="img-apps/personal/<?= $xImagen ?>"
                    alt="<?= $xNombres ?>">
                    <span class="ms-2 d-none d-xl-inline-block user-item-desc">
                        <span class="user-name"><?= $xNombres ?> <?= $xApellidos?> <i class="mdi mdi-chevron-down"></i></span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <h6 class="dropdown-header">¡Bienvenido <?= $xNombres ?>!</h6>
                    <a class="dropdown-item" href="dashboard.php"><i class="mdi mdi-view-dashboard nav-icon text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Dashboard</span></a>
                    <a class="dropdown-item" href="mi-perfil.php"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Mi Perfil</span></a>                   
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="cambiar-contrasena.php"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Cambiar Contraseña</span></a>
                    <a class="dropdown-item" href="config/cerrar-sesion.php"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Cerrar Sesión</span></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***************************************************************** -->
    <!-- ******************** BARRA INFORMATIVA SUPERIOR ***************** -->
    <!-- ***************************************************************** -->
    <div class="collapse show verti-dash-content" id="dashtoggle">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Auto Parking</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Auto Parking</a></li>
                                <li class="breadcrumb-item active">Escritorio</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- *********************************************************** -->
            <!-- *************      BARRA INFORMATIVA SUPERIOR   *********** -->
            <!-- *********************************************************** -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card dash-header-box shadow-none border-0">
                        <div class="card-body p-0">
                            <div class="row row-cols-xxl-6 row-cols-md-3 row-cols-1 g-0">
                                <div class="col">
                                    <div class="mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Tikecks</p>
                                        <h3 class="text-white mb-0">197</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Tikects Anulados</p>
                                        <h3 class="text-white mb-0">38</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Documentos</p>
                                        <h3 class="text-white mb-0">150</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mt-3 mt-md-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Documentos Anulados</p>
                                        <h3 class="text-white mb-0">10</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Acumulado en Caja</p>
                                        <h3 class="text-white mb-0">s/. 1,596.5</h3>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="mt-3 mt-lg-0 py-3 px-4 mx-2">
                                        <p class="text-white-50 mb-2 text-truncate">Clientes</p>
                                        <h3 class="text-white mb-0">259</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a class="dash-troggle-icon" id="dash-troggle-icon" data-bs-toggle="collapse" href="#dashtoggle" aria-expanded="true" aria-controls="dashtoggle">
            <i class="bx bx-up-arrow-alt"></i>
        </a>
    </div>
</header>