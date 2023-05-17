<?php    
    session_start();
    session_destroy();

    $_SESSION = array();
    if(ini_get('session.use_cookies')){
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000, $params['domain'], $params['secure'], $params['httponly']);
    }
?>

<!doctype html>
<html lang="en">
<head>
    <?php
        require("config/header-web.php");
    ?>
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
                                                <div class="text-center">
                                                    <h5 class="mb-0 text-muted">Sistema <br>Control de Parqueo</h5>
                                                </div>
                                                <form class="mt-2 pt-2" accept="" method="post" id="fapp">
                                                    <div>
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
                                                        <input class="btn btn-primary w-100" id="bingresar" value="INGRESAR AHORA">
                                                        <input type="hidden" name="proceso" id="proceso">
                                                    </div>
                                                    <div class="mt-4 pt-3 text-center">
                                                        <p class="mb-0">Acceso solo para usuarios.</p>
                                                    </div>
                
                                                </form><!-- end form -->
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
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

        <script src="assets/js/pages/pass-addon.init.js"></script>
        <script src="assets/js/pages/config.js"></script>
        <script>
            $(function(){
                
            })
        </script>
    </body>
</html>
