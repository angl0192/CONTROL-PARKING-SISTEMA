<?php
require("config/conexion.php");
require("config/datos-empresa.php");
session_start();
session_destroy();
$_SESSION = array();
if (ini_get('session.use_cookies')) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params['domain'], $params['secure'], $params['httponly']);
}
?>
<!doctype html>
<html lang="en">

<head>
    <?php require('config/cabecera-web.php'); ?>
    <!-- App Css-->
    <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
</head>

<body class="bg-white">
    <div class="auth-page d-flex align-items-center min-vh-100">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xxl-3 col-lg-4 col-md-5">
                    <div class="d-flex flex-column h-100 py-5 px-4">
                        <div class="text-center text-muted mb-2">
                            <div class="pb-3">
                                <a href="index.html">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.svg" alt="" height="30"> <span class="logo-txt">Todotec Perú</span>
                                    </span>
                                </a>
                                <p class="text-muted font-size-15 w-75 mx-auto mt-3 mb-0">Interface Soporte Técnico</p>
                            </div>
                        </div>

                        <div class="my-auto">
                            <div class="p-3 text-center">
                                <img src="assets/images/auth-img.png" alt="" class="img-fluid">
                            </div>
                        </div>
                        <?php require('config/piepagina-web.php'); ?>
                    </div>
                </div>
                <!-- end col -->

                <div class="col-xxl-9 col-lg-8 col-md-7">
                    <div class="auth-bg bg-light py-md-5 p-4 d-flex">
                        <div class="bg-overlay-gradient"></div>
                        <!-- end bubble effect -->
                        <div class="row justify-content-center g-0 align-items-center w-100">
                            <div class="col-xl-4 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="px-3 py-3">
                                            <div class="text-center">
                                                <h5 class="mb-0">Soporte Todotec Perú</h5>
                                                <p class="text-muted mt-1 mb-1">
                                                    <input class="form-check-input" type="radio" name="tipoUsuario" value="Cliente" checked> Cliente Todotec
                                                    <input class="form-check-input" type="radio" name="tipoUsuario" value="Usuario"> Usuario Todotec
                                                </p>
                                            </div>
                                            <form class="mt-2 pt-2" accept="" id="formulariologin">
                                                <div id="clientetodotec">
                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input type="text" class="form-control" id="cod_servicio" name="cod_servicio" placeholder="Código Orden ó Email">
                                                        <label for="cod_servicio">Código Orden ó Email</label>
                                                        <div class="form-floating-icon">
                                                            <i class="mdi mdi-keyboard"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="usuariotodotec">
                                                    <div class="form-floating form-floating-custom mb-3">
                                                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Ingrese Usuario">
                                                        <label for="usuario">Usuario</label>
                                                        <div class="form-floating-icon">
                                                            <i class="mdi mdi-keyboard"></i>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating form-floating-custom mb-3 auth-pass-inputgroup">
                                                        <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingrese Contraseña">
                                                        <button type="button" class="btn btn-link position-absolute h-100 end-0 top-0" id="password-addon">
                                                            <i class="mdi mdi-eye-outline font-size-18 text-muted"></i>
                                                        </button>
                                                        <label for="clave">Contraseña</label>
                                                        <div class="form-floating-icon">
                                                            <i class="uil uil-padlock"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="mt-3">
                                                    <input type="button" class="btn btn-primary w-100" id="bingresar" value="INGRESAR">
                                                    <input type="hidden" name="proceso" id="proceso">
                                                </div>
                                                <div class="mt-4 pt-3 text-center">
                                                    <p class="text-muted mb-0">Acceso solo para clientes.</p>
                                                </div>

                                            </form><!-- end form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container fluid -->
    </div>
    <!-- end authentication section -->

    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

    <script src="assets/js/pages/pass-addon.init.js"></script>
    <script src="assets/js/config.js"></script>

</body>

</html>