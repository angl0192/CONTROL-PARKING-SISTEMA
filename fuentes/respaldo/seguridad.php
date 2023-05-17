<!doctype html>
<html lang="en">
    <head>
        
        <?php
            require("config/header-web.php")
        ?>

        <meta http-equiv="refresh" content="3; url=index.php">

    </head>

    <body class="bg-white">

        <div class="auth-page d-flex align-items-center min-vh-100">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xxl-3 col-lg-4 col-md-5 my-auto">
                            <div class="d-flex flex-column h-100 py-5 px-4">
                                <div class="text-center text-muted mb-2">
                                    <div class="pb-3">
                                        <span class="logo-lg">
                                            <img src="assets/images/logo-color-dark.png" alt="" height="110">
                                        </span> 
                                    </div>
                                </div>
                            </div>
                        
                        <!-- end auth full page content -->
                    </div>
                    <!-- end col -->
    
                    <div class="col-xxl-9 col-lg-8 col-md-7">
                        <div class="auth-bg bg-light py-md-5 p-4 d-flex">
                            <div class="bg-overlay-gradient"></div>
                            <!-- end bubble effect -->
                            <div class="row justify-content-center g-0 align-items-center w-100 my-auto">
                                <div class="col-xl-4 col-lg-8">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="px-3 py-3">
                                                <div class="avatar-lg mx-auto">
                                                    <span class="logo-lg">
                                                        <img src="assets/images/error.png" alt="" height="90">
                                                    </span> 
                                                </div>
                                                <div class="text-center mt-4 pt-2">
                                                    <h4>¡Lo Sentimos!</h4>
                                                    <p>Al parecer tu usuario o contraseña <span class="fw-semibold">No Coinciden</span></p>
                                                    <div class="mt-4">
                                                        <a href="index.php" class="btn btn-primary w-100">Volver a Ingresar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4 mt-md-5 text-center">
                                    <p class="mb-0 derechos">© <script>document.write(new Date().getFullYear())</script> CONTROL PARKING SAC. Todos los derechos reservados.<br>Desarrollado por LAHLL</p>
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
</html>
