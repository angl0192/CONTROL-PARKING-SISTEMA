<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $sqlConsulta = mysqli_query($conexion, "SELECT * FROM empresa");
    $fconsulta = mysqli_fetch_array($sqlConsulta);
    $id_empresa = $fconsulta['id_empresa'];
    $ruc = $fconsulta['ruc'];
    $razon_social = $fconsulta['razon_social'];
    $nombre_comercial = $fconsulta['nombre_comercial'];
    $icono_web = $fconsulta['icono_web'];
    $logo_app = $fconsulta['logo_app'];
    $logo_movil = $fconsulta['logo_movil'];
    $logo_documentos = $fconsulta['logo_documentos'];
    $direccion = $fconsulta['direccion'];
    $Departamento = $fconsulta['Departamento'];
    $Provincia = $fconsulta['Provincia'];
    $Distrito = $fconsulta['Distrito'];
    $codigoUbigeo = $fconsulta['codigoUb$codigoUbigeo'];
    $codigoLocal = $fconsulta['codigoL$codigoLocal'];
    $telefono = $fconsulta['telefono'];
    $movil = $fconsulta['movil'];
    $email = $fconsulta['email'];
    $tipo = $fconsulta['tipo'];
    $usuario_sol = $fconsulta['usuario_sol'];
    $clave_sol = $fconsulta['clave_sol'];
    $certificado = $fconsulta['certificado'];
    $clave_certificado = $fconsulta['clave_certificado'];
    $clave_borrar = $fconsulta['clave_borrar'];    
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
                                                <h4>Datos de Empresa</h4>
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
                                                    <label for="ruc" class="col-md-2 col-form-label">RUC</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="ruc" id="ruc" value="<?= $ruc ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="razon_social" class="col-md-2 col-form-label">Razón Social</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="razon_social" id="razon_social" value="<?= $razon_social ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="nombre_comercial" class="col-md-2 col-form-label">Nombre Comercial</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="nombre_comercial" id="nombre_comercial" value="<?= $nombre_comercial ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="icono_web" class="col-md-2 col-form-label">Icono Web</label>
                                                    <div class="col-md-10">
                                                        <div id="iconWeb" class="dropzone"></div>
                                                        <input type="hidden" name="icono_web" id="icono_web" value="<?= $icono_web ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="logo_app" class="col-md-2 col-form-label">Logo App</label>
                                                    <div class="col-md-10">
                                                        <div id="imgApp" class="dropzone"></div>
                                                        <input type="hidden" name="logo_app" id="logo_app" value="<?= $logo_app ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="logo_movil" class="col-md-2 col-form-label">Logo Movil</label>
                                                    <div class="col-md-10">
                                                        <div id="imgMov" class="dropzone"></div>
                                                        <input type="hidden" name="logo_movil" id="logo_movil" value="<?= $logo_movil ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="logo_documentos" class="col-md-2 col-form-label">Logo Documentos</label>
                                                    <div class="col-md-10">
                                                        <div id="logDoc" class="dropzone"></div>
                                                        <input type="hidden" name="logo_documentos" id="logo_documentos" value="<?= $logo_documentos ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="direccion" class="col-md-2 col-form-label">Dirección</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="direccion" id="direccion" value="<?= $direccion ?>">
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label">Departamento</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" name="Departamento" id="Departamento">
                                                            <option value="0">Departamento</option>
                                                            <?php
                                                            $sqlDeptar = mysqli_query($conexion, "SELECT * FROM ubigeo_departamentos");
                                                            while($fdep = mysqli_fetch_array($sqlDeptar)){
                                                                $id_dep = $fdep['id'];
                                                                $departamento = $fdep['name'];
                                                                echo "<option value='$id_dep'>$departamento</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label">Provincia</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" name="Provincia" id="Provincia">
                                                            <option option="0">Provincia</option>                                                      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label class="col-md-2 col-form-label">Distrito</label>
                                                    <div class="col-md-10">
                                                        <select class="form-select" name="Distrito" id="Distrito">
                                                            <option option="0">Distrito</option>                                                      
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="codigoUbigeo" class="col-md-2 col-form-label">Código Ubigeo</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="codigoUbigeo" id="codigoUbigeo" value="<?= $codigoUbigeo ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="codigoLocal" class="col-md-2 col-form-label">Código Local</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="codigoLocal" id="codigoLocal" value="<?= $codigoLocal ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="telefono" class="col-md-2 col-form-label">Teléfono</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="telefono" id="telefono" value="<?= $telefono ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="movil" class="col-md-2 col-form-label">Móvil</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="movil" id="movil" value="<?= $movil ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="email" id="email" value="<?= $email ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label class="col-md-2 col-form-label">Tipo</label>
                                                    <div class="col-md-10">
                                                        <input <?php if($tipo == '1'){
                                                                    echo 'checked=\"checked\"';
                                                                } ?> type="radio" name="tipo" value="1"> Producción
                                                        <input <?php if($tipo == '3'){
                                                                    echo 'checked=\"checked\"';
                                                                } ?>  type="radio" name="tipo" value="3" checked> Beta
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="usuario_sol" class="col-md-2 col-form-label">Usuario Sol</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="text" name="usuario_sol" id="usuario_sol" value="<?= $usuario_sol ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="clave_sol" class="col-md-2 col-form-label">Clave Sol</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="password" name="clave_sol" id="clave_sol" value="<?= $clave_sol ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="certificado" class="col-md-2 col-form-label">Certificado PFX</label>
                                                    <div class="col-md-10">
                                                        <div id="docCert" class="dropzone"></div>
                                                        <input type="hidden" name="certificado" id="certificado" value="<?= $certificado ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="clave_certificado" class="col-md-2 col-form-label">Clave Certificado</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="password" name="clave_certificado" id="clave_certificado" value="<?= $clave_certificado ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="clave_borrar" class="col-md-2 col-form-label">Clave Borrar</label>
                                                    <div class="col-md-10">
                                                        <input class="form-control" type="password" name="clave_borrar" id="clave_borrar" value="<?= $clave_borrar ?>">
                                                    </div>
                                                </div>
                                                <div class="mb-3 row">
                                                    <label for="exampleDataList" class="col-md-2 col-form-label"></label>
                                                    <div class="col-md-10">
                                                        <button type="button" class="btn btn-success waves-effect waves-light" id="benviar">
                                                            GUARDAR CAMBIOS
                                                        <input type="hidden" name="id_empresa" id="id_empresa" value= "<?= $id_empresa ?>">
                                                        <input type="hidden" name="proceso" id="proceso">
                                                        <input type="hidden" name="modulo" id="modulo">
                                                    </div>
                                                </div><!-- end row -->
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

    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>

    <!-- app.js -->
    <script src="assets/js/app.js"></script>
    <!-- Dropzone -->
    <script src="assets/libs/dropzone/dropzone.min.js"></script>

    <script>
        $(function(){
            $("#Departamento").change(function(){
                var Departamento = $(this).val();
                var datosEnviar = {
                    'Departamento': Departamento,
                    'proceso': 'BuscarProvincias'
                }
                $.ajax({
                    data: datosEnviar,
                    url: "config/procesos.php",
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            $("#Provincia").html(data.provincias)
                        }
                    }
                })
            })
            $("#Provincia").change(function(){
                var Departamento = $("#Departamento").val();
                var Provincia = $(this).val();
                var datosEnviar = {
                    'Departamento': Departamento,
                    'Provincia': Provincia,
                    'proceso': 'BuscarDistritos'
                }
                $.ajax({
                    data: datosEnviar,
                    url: "config/procesos.php",
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            $("#Distrito").html(data.distritos)
                        }
                    }
                })
            })
        })
        /*************************************************************/
        /*************** DROPZONE SUBIR ICONO EMPRESA ****************/
        var iconWeb = new Dropzone("#iconWeb", {
            url: "config/subir-archivos.php",
            method: "POST",
            paramName: "file",
            autoProcessQueue: true,
            acceptedFiles: ".ico",
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
            dictDefaultMessage: "Arrastra el ícono con extension ico aquí"
        });

        iconWeb.on("addedfile", function(file) {
            console.log(file.name);
            var nompfx = file.name;
            document.getElementById("icono_web").value = nompfx;
        });

        iconWeb.on("removedfile", function(file) {
            console.log(file.name);
        });
        // Agregue más datos para enviar junto con el archivo como datos POST. (Opcional)
        iconWeb.on("sending", function(file, xhr, formData) {
            formData.append("proceso", "iconWeb");
        });
        iconWeb.on("error", function(file, response) {
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
            iconWeb.emit("addedfile", mockFile);
            iconWeb.emit("thumbnail", mockFile, img.url);
            iconWeb.emit("complete", mockFile);
            var existingFileCount = 1;
            iconWeb.options.maxFiles = iconWeb.options.maxFiles - existingFileCount;
            iconWeb.options.createImageThumbnails = true;
        }
        <?php
        }
        ?>
        /*************************************************************/
        /************* DROPZONE SUBIR LOGO APP EMPRESA ***************/
        var imgApp = new Dropzone("#imgApp", {
            url: "config/subir-archivos.php",
            method: "POST",
            paramName: "file",
            autoProcessQueue: true,
            acceptedFiles: "image/*",
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
            dictDefaultMessage: "Arrastra la imagen jpg/png de 240x240px aquí"
        });

        imgApp.on("addedfile", function(file) {
            console.log(file.name);
            var nompfx = file.name;
            document.getElementById("logo_app").value = nompfx;
        });

        imgApp.on("removedfile", function(file) {
            console.log(file.name);
        });
        // Agregue más datos para enviar junto con el archivo como datos POST. (Opcional)
        imgApp.on("sending", function(file, xhr, formData) {
            formData.append("proceso", "imgApp");
        });
        imgApp.on("error", function(file, response) {
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
            imgApp.emit("addedfile", mockFile);
            imgApp.emit("thumbnail", mockFile, img.url);
            imgApp.emit("complete", mockFile);
            var existingFileCount = 1;
            imgApp.options.maxFiles = imgApp.options.maxFiles - existingFileCount;
            imgApp.options.createImageThumbnails = true;
        }
        <?php
        }
        ?>
        /*************************************************************/
        /************ DROPZONE SUBIR LOGO MOVIL EMPRESA **************/
        var imgMov = new Dropzone("#imgMov", {
            url: "config/subir-archivos.php",
            method: "POST",
            paramName: "file",
            autoProcessQueue: true,
            acceptedFiles: "image/*",
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
            dictDefaultMessage: "Arrastra la imagen jpg/png de 100x80px aquí"
        });

        imgMov.on("addedfile", function(file) {
            console.log(file.name);
            var nompfx = file.name;
            document.getElementById("logo_movil").value = nompfx;
        });

        imgMov.on("removedfile", function(file) {
            console.log(file.name);
        });
        // Agregue más datos para enviar junto con el archivo como datos POST. (Opcional)
        imgMov.on("sending", function(file, xhr, formData) {
            formData.append("proceso", "imgMov");
        });
        imgMov.on("error", function(file, response) {
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
            imgMov.emit("addedfile", mockFile);
            imgMov.emit("thumbnail", mockFile, img.url);
            imgMov.emit("complete", mockFile);
            var existingFileCount = 1;
            imgMov.options.maxFiles = imgMov.options.maxFiles - existingFileCount;
            imgMov.options.createImageThumbnails = true;
        }
        <?php
        }
        ?>
        /*************************************************************/
        /********** DROPZONE SUBIR LOGO DOCUMENTOS EMPRESA ***********/
        var logDoc = new Dropzone("#logDoc", {
            url: "config/subir-archivos.php",
            method: "POST",
            paramName: "file",
            autoProcessQueue: true,
            acceptedFiles: "image/*",
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
            dictDefaultMessage: "Arrastra la imagen jpg/png de 240x80px aquí"
        });

        logDoc.on("addedfile", function(file) {
            console.log(file.name);
            var nompfx = file.name;
            document.getElementById("logo_documentos").value = nompfx;
        });

        logDoc.on("removedfile", function(file) {
            console.log(file.name);
        });
        // Agregue más datos para enviar junto con el archivo como datos POST. (Opcional)
        logDoc.on("sending", function(file, xhr, formData) {
            formData.append("proceso", "logDoc");
        });
        logDoc.on("error", function(file, response) {
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
            logDoc.emit("addedfile", mockFile);
            logDoc.emit("thumbnail", mockFile, img.url);
            logDoc.emit("complete", mockFile);
            var existingFileCount = 1;
            logDoc.options.maxFiles = logDoc.options.maxFiles - existingFileCount;
            logDoc.options.createImageThumbnails = true;
        }
        <?php
        }
        ?>
        /*************************************************************/
        /************** DROPZONE SUBIR CERTIFICADO PFX ***************/
        var docCert = new Dropzone("#docCert", {
            url: "config/subir-archivos.php",
            method: "POST",
            paramName: "file",
            autoProcessQueue: true,
            acceptedFiles: ".pfx",
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
            dictDefaultMessage: "Arrastra el archivo PFX aquí"
        });

        docCert.on("addedfile", function(file) {
            console.log(file.name);
            var nompfx = file.name;
            document.getElementById("certificado").value = nompfx;
        });

        docCert.on("removedfile", function(file) {
            console.log(file.name);
        });
        // Agregue más datos para enviar junto con el archivo como datos POST. (Opcional)
        docCert.on("sending", function(file, xhr, formData) {
            formData.append("proceso", "docCert");
        });
        docCert.on("error", function(file, response) {
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
            docCert.emit("addedfile", mockFile);
            docCert.emit("thumbnail", mockFile, img.url);
            docCert.emit("complete", mockFile);
            var existingFileCount = 1;
            docCert.options.maxFiles = docCert.options.maxFiles - existingFileCount;
            docCert.options.createImageThumbnails = true;
        }
        <?php
        }
        ?>
    </script>

    <!-------------------------------------------------------------------------------------->

    <script>
        $(function(){
            $("#benviar").click(function(){
                $("#proceso").val('ActualizarEmpresa');
                $("#modulo").val('Empresa');
                var datosEnviar = $("#fapps").serialize();
                $.ajax({
                    data: datosEnviar,
                    url: "config/proceso-guardar.php",
                    type: "POST",
                    dataType: "json",
                    /*beforeSend: function(){
                        $("#benviar").html("Procesando...");
                    },*/
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            //alert("¡Los datos de la Empresa se actualizaron con éxito!")
                            Swal.fire(
                            'Datos de Empresa',
                            '¡Actualización Exitosa!',
                            'success'
                            )
                            //location.reload();
                        }
                    }
                })
                
            })
        })
            /**************************************************/
            /**************************************************/        
        </script>

    </body>
</html>