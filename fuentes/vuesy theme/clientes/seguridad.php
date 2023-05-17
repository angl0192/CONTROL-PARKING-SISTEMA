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
    <meta http-equiv="refresh" content="3;url=index.php">
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
                                <a href="index.php">
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-sm.svg" alt="" height="24">
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

                    <!-- end auth full page content -->
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
                                            <div class="avatar-lg mx-auto">
                                                <div class="avatar-title bg-soft-primary text-primary display-5 rounded-circle">
                                                    <i class="uil uil-thumbs-up"></i>
                                                </div>
                                            </div>
                                            <div class="text-center mt-4 pt-2">
                                                <h4>Lo Sentimos !</h4>
                                                <p>Al paracer no eres cliente <span class="fw-semibold">Todotec Perú</span></p>
                                                <div class="mt-4">
                                                    <a href="index.php" class="btn btn-primary w-100">Ingresar Credenciales</a>
                                                </div>
                                            </div>
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
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>

</body>

<!-- Mirrored from themesdesign.in/vuesy/layouts/auth-thankyou-cover.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 23 Jun 2022 15:59:53 GMT -->

</html>