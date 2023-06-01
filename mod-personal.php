<?php
    require("config/conexion.php");
    require("config/inicializar-datos.php");
    $cod_personal = $_REQUEST['cod_personal'];
    $sqlConsulta = mysqli_query($conexion, "SELECT * FROM personal WHERE cod_personal = '$cod_personal'");
    $fconsulta = mysqli_fetch_array($sqlConsulta);
    $cod_personal = $fconsulta['cod_personal'];
    $cod_puntoventa = $fconsulta['cod_puntoventa'];
    $nombres = $fconsulta['nombres'];
    $apellidos = $fconsulta['apellidos'];
    $cod_tipodoc = $fconsulta['cod_tipodoc'];
    $num_documento = $fconsulta['num_documento'];
    $email = $fconsulta['email'];
    $movil = $fconsulta['movil'];
    $cargo = $fconsulta['cargo'];
    $fecha_ingreso = $fconsulta['fecha_ingreso'];
    $imagen = $fconsulta['imagen'];
    $usuario = $fconsulta['usuario'];
    $clave = $fconsulta['clave'];
    $estado = $fconsulta['estado'];
?>
<!doctype html>
<html lang="es">
    <head>

        <?php require("config/header-web.php"); ?>

        <!-- plugin css -->
        <link href="assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css">
        <!-- Sweet Alert-->
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <div class="row">
                <div class="card-body">
                    <form action="" id="fapps" method="POST">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Punto Venta</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="cod_puntoventa" id="cod_puntoventa">
                                            <?php
                                            if($cod_puntoventa == 0 || $cod_puntoventa == ''){
                                                $sqlPuntosVenta = mysqli_query($conexion, "SELECT * FROM puntos_venta");
                                                echo "<option value='0'>Seleccionar Punto Venta</option>";
                                                while($fpuntv = mysqli_fetch_array($sqlPuntosVenta)){
                                                    $cod_puntoventa = $fpuntv['cod_puntoventa'];
                                                    $nombre_puntoventa = $fpuntv['nombre_puntoventa'];
                                                    echo "<option value='$cod_puntoventa'>$nombre_puntoventa</option>";
                                                }
                                            }else{
                                                $sqlPuntosVenta = mysqli_query($conexion, "SELECT * FROM puntos_venta WHERE cod_puntoventa = '$cod_puntoventa'");
                                                while($fpuntv = mysqli_fetch_array($sqlPuntosVenta)){
                                                    $cod_puntoventa = $fpuntv['cod_puntoventa'];
                                                    $nombre_puntoventa = $fpuntv['nombre_puntoventa'];
                                                    echo "<option value='$cod_puntoventa'>$nombre_puntoventa</option>";
                                                }
                                                $sqlPuntosVenta = mysqli_query($conexion, "SELECT * FROM puntos_venta WHERE cod_puntoventa != '$cod_puntoventa'");
                                                while($fpuntv = mysqli_fetch_array($sqlPuntosVenta)){
                                                    $cod_puntoventa = $fpuntv['cod_puntoventa'];
                                                    $nombre_puntoventa = $fpuntv['nombre_puntoventa'];
                                                    echo "<option value='$cod_puntoventa'>$nombre_puntoventa</option>";
                                                }
                                            }                                          
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nombres" class="col-md-2 col-form-label">Nombres</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="nombres" id="nombres" value="<?=$nombres?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="apellidos" class="col-md-2 col-form-label">Apellidos</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="apellidos" id="apellidos" value="<?=$apellidos?>">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-2 col-form-label">Tipo Documento</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="cod_tipodoc" id="cod_tipodoc">                                            
                                            <?php
                                                if($cod_tipodoc == '' || $cod_tipodoc == 0){
                                                    $sqlTipoDoc = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad");
                                                    echo '<option value="0">Seleccionar Tipo Documento</option>';
                                                    while($ftipdoc = mysqli_fetch_array($sqlTipoDoc)){
                                                        $cod_tipodoc = $ftipdoc['cod_tipodoc'];
                                                        $descripcion = $ftipdoc['descripcion'];
                                                        echo "<option value='$cod_tipodoc'>$descripcion</option>";
                                                    }
                                                }else{
                                                    $sqlTipoDoc = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad WHERE cod_tipodoc = '$cod_tipodoc'");
                                                    while($ftipdoc = mysqli_fetch_array($sqlTipoDoc)){
                                                        $cod_tipodoc = $ftipdoc['cod_tipodoc'];
                                                        $descripcion = $ftipdoc['descripcion'];
                                                        echo "<option value='$cod_tipodoc'>$descripcion</option>";
                                                    }
                                                    $sqlTipoDoc = mysqli_query($conexion, "SELECT * FROM tipos_documentos_identidad WHERE cod_tipodoc != '$cod_tipodoc'");
                                                    while($ftipdoc = mysqli_fetch_array($sqlTipoDoc)){
                                                        $cod_tipodoc = $ftipdoc['cod_tipodoc'];
                                                        $descripcion = $ftipdoc['descripcion'];
                                                        echo "<option value='$cod_tipodoc'>$descripcion</option>";
                                                    }
                                                }                                                
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="num_documento" class="col-md-2 col-form-label">N° Documento</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="num_documento" id="num_documento" value="<?=$num_documento?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="email" id="email" value="<?=$email?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="movil" class="col-md-2 col-form-label">Telefono</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="movil" id="movil" value="<?=$movil?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Cargo</label>
                                    <div class="col-md-10">
                                        <select class="form-select" name="cargo" id="cargo">
                                            <?php
                                                if($cargo == ''){
                                                    $sqlCargos = mysqli_query($conexion, "SELECT * FROM cargos_personal");
                                                    echo '<option value = "0">Seleccionar Cargo</option>';
                                                    while($fcargo = mysqli_fetch_array($sqlCargos)){
                                                        $cargo = $fcargo['cargo'];
                                                        echo "<option value = '$cargo'>$cargo</option>";
                                                    }
                                                }else{
                                                    $sqlCargos = mysqli_query($conexion, "SELECT * FROM cargos_personal WHERE cargo = '$cargo'");
                                                    while($fcargo = mysqli_fetch_array($sqlCargos)){
                                                        $cargo = $fcargo['cargo'];
                                                        echo "<option value = '$cargo'>$cargo</option>";
                                                    }
                                                    $sqlCargos = mysqli_query($conexion, "SELECT * FROM cargos_personal WHERE cargo != '$cargo'");
                                                    while($fcargo = mysqli_fetch_array($sqlCargos)){
                                                        $cargo = $fcargo['cargo'];
                                                        echo "<option value = '$cargo'>$cargo</option>";
                                                    }
                                                }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="fecha_ingreso" class="col-md-2 col-form-label">Fecha Ingreso</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" name="fecha_ingreso" id="fecha_ingreso" value="<?=$fecha_ingreso?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="imagen" class="col-md-2 col-form-label">Imagen/Avatar</label>
                                    <div class="col-md-10">
                                        <div id="imgPerfil" class="dropzone"></div>
                                        <input type="hidden" name="imagen" id="imagen" value="<?= $imagen ?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="usuario" class="col-md-2 col-form-label">Usuario</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" name="usuario" id="usuario">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="clave" class="col-md-2 col-form-label">Contraseña</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="password" name="clave" id="clave">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-md-2 col-form-label">Estado</label>
                                    <div class="col-md-10">
                                        <input <?php if($estado == 'A'){
                                                    echo 'checked=\"checked"';
                                                } ?> type="radio" name="estado" value="A"> Activo
                                        <input <?php if($estado == 'I'){
                                                    echo 'checked=\"checked"';
                                                } ?> type="radio" name="estado" value="I"> Inactivo
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="exampleDataList" class="col-md-2 col-form-label"></label>
                                    <div class="col-md-10">
                                        <button type="button" class="btn btn-success waves-effect waves-light" id="benviar">
                                            <i class="mdi mdi-content-save"></i>
                                            GUARDAR CAMBIOS
                                        </button>
                                        <input type="hidden" name="proceso" id="proceso">
                                        <input type="hidden" name="modulo" id="modulo">
                                        <input type="hidden" name="cod_personal" id="cod_personal" value="<?=$cod_personal?>">
                                    </div>
                                </div><!-- end row -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </form>
                </div>
        </div><!-- end row -->                      
    <!-- JAVASCRIPT -->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/libs/metismenujs/metismenujs.min.js"></script>
    <script src="assets/libs/simplebar/simplebar.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>    
    <!-- plugins -->
    <script src="assets/libs/select2/js/select2.min.js"></script>
    <!-- init js -->
    <script src="assets/js/form-advanced.init.js"></script>
    <!-- Sweet Alerts js -->
    <script src="assets/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- Sweet alert init js-->
    <script src="assets/js/pages/sweet-alerts.init.js"></script>
    <!-- Dropzone -->
    <script src="assets/libs/dropzone/dropzone.min.js"></script>
    <!-- app.js -->
    <script src="assets/js/app.js"></script>

    <script>
        $(function(){            
            /**********************************************************/
            $("#benviar").click(function(e){
                e.preventDefault();
                if($("#cod_puntoventa").val() == 0){
                    Swal.fire({
                    title: 'Personal',
                    text: "Seleccionar Punto de Venta",
                    icon: 'warning'
                    })
                    $("#cod_puntoventa").focus();
                    return false;
                }
                if($("#nombres").val() == ''){
                    Swal.fire({
                    title: 'Personal',
                    text: "Ingrese Nombres",
                    icon: 'warning'
                    })
                    $("#nombres").focus();
                    return false;
                }
                if($("#apellidos").val() == ''){
                    Swal.fire({
                    title: 'Punto de Venta',
                    text: "Ingrese Apellidos",
                    icon: 'warning'
                    })
                    $("#apellidos").focus();
                    return false;
                }
                if($("#cod_tipodoc").val() == 0){
                    Swal.fire({
                    title: 'Personal',
                    text: "Seleccionar Tipo Documento",
                    icon: 'warning'
                    });
                    $("#cod_tipodoc").focus();
                    return false;
                }
                if($("#num_documento").val() == ''){
                    Swal.fire({
                    title: 'Personal',
                    text: "Ingresar N° Documento",
                    icon: 'warning'
                    });
                    $("#num_documento").focus();
                    return false;
                }
                if($("#email").val() == ''){
                    Swal.fire({
                    title: 'Personal',
                    text: "Ingresar Email",
                    icon: 'warning'
                    });
                    $("#email").focus();
                    return false;
                }
                if($("#cargo").val() == 0){
                    Swal.fire({
                    title: 'Personal',
                    text: "Seleccionar Cargo",
                    icon: 'warning'
                    });
                    $("#cargo").focus();
                    return false;
                }
                /*************************************************/
                /*************************************************/
                $("#proceso").val('ActualizarPersonal');
                $("#modulo").val('Personal');
                var datosEnviar = $("#fapps").serialize();
                $.ajax({
                    data: datosEnviar,
                    url: "config/proceso-guardar.php",
                    type: "POST",
                    dataType: "json",
                    success: function(data){
                        var respuesta = data.respuesta;
                        if(respuesta == 'SI'){
                            Swal.fire(
                            'Personal',
                            '¡Se actualizó con éxito!',
                            'success'
                            );
                            setTimeout(function(){
                                location.reload();
                            }, 3000);
                        }else{
                            Swal.fire({
                            title: 'Personal',
                            text: "El Personal ya existe",
                            icon: 'error'
                            });
                        }
                    }
                });
                
            });
        });
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