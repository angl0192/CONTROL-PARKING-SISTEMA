<script>
    /**************************************************/
    /********  Dropzone Subir Icono Empresa    ********/
    /**************************************************/
    var iconApp = new Dropzone("#iconApp", {
        url: "config/subirArchivos.php",
        method: "POST",
        paramName: "file",
        autoProcessQueue: true,
        acceptedFiles: ".ico",
        maxFiles: 2,
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
        dictDefaultMessage: "Arrastra el icono con extension ico aquí"
    });
    iconApp.on("addedfile", function(file) {
        console.log(file.name);
        var nompfx = file.name;
        document.getElementById("icono_web").value = nompfx;
    });
    iconApp.on("removedfile", function(file) {
        console.log(file.name);
    });
    //Agregue más datos para enviar junto con el archivo como datos POST. (Opcional)
    iconApp.on("sending", function(file, xhr, formData) {
        formData.append("proceso", "logoApp");
    });
    iconApp.on("error", function(file, response) {
        console.log(response);
    });
    /**********************************************************************/
    /********************* RUTINA CARGAR IMAGENES *************************/
    /**********************************************************************/
    <?php
    $sqlImagen                  = mysqli_query($conexion, "SELECT icono_web FROM empresa WHERE id_empresa='$id_empresa'");
    $numImg                     = mysqli_num_rows($sqlImagen);
    if ($numImg > 0 and $icono_web != '') {
    ?>
        var images = [
            <?php
            while ($fimg        = mysqli_fetch_array($sqlImagen)) {
                $imagen         = $fimg['icono_web'];
                $obj["name"]    = $imagen;
                $obj["size"]    = filesize("assets/images/" . $imagen);
                echo "
                    {
                    name: '" . $obj["name"] . "',
                    url: 'assets/images/" . $obj["name"] . "',
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
            iconApp.emit("addedfile", mockFile);
            iconApp.emit("thumbnail", mockFile, img.url);
            iconApp.emit("complete", mockFile);
            var existingFileCount = 1;
            iconApp.options.maxFiles = iconApp.options.maxFiles - existingFileCount;
            iconApp.options.createImageThumbnails = true;
        }
    <?php
    }
    ?>
</script>