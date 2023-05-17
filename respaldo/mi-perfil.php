<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $sqlConsulta = mysqli_query($conexion, "SELECT * FROM personal WHERE cod_personal = '$xCodPer'");
    $fpersonal = mysqli_fetch_array($sqlConsulta);
    $cod_personal = $fpersonal['cod_personal'];
    $nombres = $fpersonal['nombres'];
    $apellidos = $fpersonal['apellidos'];
    $cod_tipodoc = $fpersonal['cod_tipodoc'];
    $num_documento = $fpersonal['num_documento'];
    $email = $fpersonal['email'];
    $movil = $fpersonal['movil'];
    $imagen = $fpersonal['imagen'];
?>

<!doctype html>
<html lang="es">
    <head>

        <?php require("config/header-web.php"); ?>

        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

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
                                                <h4>¡Bienvenido a tu Perfil <?= $xNombres ?>!</h4>
                                            </div>
                                            <div class="col-sm-5">
                                                <div class="text-sm-end">
                                                    <a href="dashboard.php" class="btn btn-success waves-effect waves-light mb-2 me-2">
                                                        <i class="mdi mdi-view-dashboard nav-icon"></i>
                                                        Volver
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body">
                                        <form action="" id="fapps" method="POST">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="mb-3 row">
                                                        <label for="nombres" class="col-md-2 col-form-label">Nombres</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="nombres" id="nombres" value="<?= $nombres; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="apellidos" class="col-md-2 col-form-label">Apellidos</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="apellidos" id="apellidos" value="<?= $apellidos; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
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
                                                        <label for="num_documento" class="col-md-2 col-form-label">N° de Documento</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="num_documento" id="num_documento" value="<?= $num_documento; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="email" class="col-md-2 col-form-label">Email</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="email" id="email" value="<?= $email; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for=="movil" class="col-md-2 col-form-label">Teléfono</label>
                                                        <div class="col-md-10">
                                                            <input class="form-control" type="text" name="movil" id="movil" value="<?= $movil; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 row">
                                                        <label for="imagen" class="col-md-2 col-form-label">Imagen/Avatar</label>
                                                        <div class="col-md-10">
                                                            <div id="imgPerfil" class="dropzone"></div>
                                                            <input type="hidden" name="imagen" id="imagen" value="<?= $imagen ?>">
                                                        </div>
                                                    </div>
                                                    <!-- end row -->
                                                    <div class="mb-3 row">   
                                                        <label for="boton" class="col-md-2 col-form-label"></label>
                                                        <div class="col-md-10">
                                                            <button type="button" class="btn btn-success waves-effect waves-light" id="benviar">
                                                                ACTUALIZAR DATOS
                                                            <input type="hidden" name="cod_personal" id="cod_personal" value= "<?= $cod_personal ?>">
                                                            <input type="hidden" name="proceso" id="proceso">
                                                            <input type="hidden" name="modulo" id="modulo">
                                                        </div>
                                                    </div>
                                                </div><!-- end col -->
                                            </div><!-- end row -->
                                        </form>
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

        <!-- JAVASCRIPT -->
        <script src="assets/js/jquery-3.6.0.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="assets/js/pages/datatables.init.js"></script>
        <!-- app.js -->
        <script src="assets/js/app.js"></script>
        <!-- Dropzone -->
        <script src="assets/libs/dropzone/dropzone.min.js"></script>

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
            /*************************************************************/
            /*************** DROPZONE SUBIR ICONO EMPRESA ****************/
            var imgPerfil = new Dropzone("#imgPerfil", {
                url: "config/subir-archivos.php",
                method: "POST",
                paramName: "file",
                autoProcessQueue: true,
                acceptedFiles: "image/*, application/pdf, .xlsx",
                maxFiles: 5,
                maxFilesize: 250, // MB
                uploadMultiple: true,
                parallelUploads: 100, // use it with uploadMultiple
                createImageThumbnails: true,
                thumbnailWidth: 120,
                thumbnailHeight: 120,
                addRemoveLinks: true,
                timeout: 180000,
                dictRemoveFileConfirmation: "¿Estas Seguro?", // ask before removing file
                dictFileTooBig: "El archivo es muy grande ({{filesize}}mb). El tamaño máximo permitido es {{maxFilesize}}mb",
                dictInvalidFileType: "Tipo de archivo invalido",
                dictCancelUpload: "Cancelar",
                dictRemoveFile: "Borrar",
                dictMaxFilesExceeded: "Solo {{maxFiles}} archivos están permitidos",
                dictDefaultMessage: "Arrastra las imagenes jpg/png de 400x400px aquí"
            });

            imgPerfil.on("addedfile", function(file) {
                console.log(file.name);
                var nompfx = file.name;
                document.getElementById("imagen").value = nompfx;
            });

            imgPerfil.on("removedfile", function(file) {
                console.log(file.name);
            });
            // Agregue más datos para enviar junto con el archivo como datos POST. (Opcional)
            imgPerfil.on("sending", function(file, xhr, formData) {
                formData.append("proceso", "imgPerfil");
            });
            imgPerfil.on("error", function(file, response) {
                console.log(response);
            });

            /**********************************************************************/
            /********************* RUTINA CARGAR IMAGENES *************************/
            /**********************************************************************/
            <?php
            $sqlImagen                  = mysqli_query($conexion, "SELECT imagen FROM personal WHERE cod_personal='$cod_personal'");
            $numImg                     = mysqli_num_rows($sqlImagen);
            if ($numImg > 0 and $imagen != '') {
            ?>
                var images = [
                    <?php
                    while ($fimg        = mysqli_fetch_array($sqlImagen)) {
                        $imagen         = $fimg['imagen'];
                        $obj["name"]    = $imagen;
                        $obj["size"]    = filesize("img-apps/personal/" . $imagen);
                        echo "
                            {
                            name: '" . $obj["name"] . "',
                            url: 'img-apps/personal/" . $obj["name"] . "',
                            size: '" . $obj["size"] . "'
                            },";
                    }
                    ?>
                ]
            for (let i = 0; i < images.length; i++) {
                let img = images[i];
                var mockFile = {
                    name: img.name,
                    size: img.size,
                    url: img.url
                };
                imgPerfil.emit("addedfile", mockFile);
                imgPerfil.emit("thumbnail", mockFile, img.url);
                imgPerfil.emit("complete", mockFile);
                var existingFileCount = 1;
                imgPerfil.options.maxFiles = imgPerfil.options.maxFiles - existingFileCount;
                imgPerfil.options.createImageThumbnails = true;
            }
            <?php
            }
            ?>
        </script>
    </body>
</html>