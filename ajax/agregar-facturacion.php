<?php
require("../config/conexion.php");
require("../config/inicializar-datos.php");
$session_id     = session_id();
if (isset($_POST['cod_servicio'])) {
    $id             = $_POST['cod_servicio'];
}
if (isset($_POST['cantidad'])) {
    $cantidad_tmp   = $_POST['cantidad'];
}
if (isset($_POST['precio'])) {
    $precio_tmp     = $_POST['precio'];
}
/*****************************************************/
/*****************************************************/
if (!empty($id) and ($cantidad_tmp > 0) and ($precio_tmp > 0)) {
    $sqlVerificar   = mysqli_query($conexion, "SELECT COUNT(*) AS numrows FROM tmp_ventas WHERE cod_servicio='$id' AND session_id='$session_id'");
    $fila           = mysqli_fetch_array($sqlVerificar);
    $numrows        = $fila['numrows'];
    if ($numrows == 0) {
        $sqlInsertar = mysqli_query($conexion, "INSERT INTO tmp_ventas (
        cod_servicio,
        cantidad_tmp,
        precio_tmp,
        session_id
        )VALUES(
        '$id',
        '$cantidad_tmp',
        '$precio_tmp',
        '$session_id')");
    } else {
        $sqlActualizar = mysqli_query($conexion, "UPDATE tmp_ventas SET cantidad_tmp=(cantidad_tmp+$cantidad_tmp) WHERE session_id='$session_id' AND cod_servicio='$id'");
    }
}
/*****************************************************/
/*****************************************************/
if (isset($_GET['id'])) {
    $id_tmp = intval($_GET['id']);
    $sqlEliminar = mysqli_query($conexion, "DELETE FROM tmp_ventas WHERE id_tmp='$id_tmp'");
}
/*****************************************************/
/*****************************************************/
?>
<table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead>
        <tr>
            <th width='50%'>Servicio</th>
            <th width='15%'>Cantidad</th>
            <th width='15%'>Precio s/.</th>
            <th width='15%'>Importe s/.</th>
            <th width='5%'>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sumador_total              = 0;
        $sqlListado                 = mysqli_query($conexion, "SELECT * FROM tmp_ventas WHERE session_id='$session_id' ORDER BY id_tmp ASC");
        while ($flist               = mysqli_fetch_array($sqlListado)) {
            $id_tmp                 = $flist['id_tmp'];
            $id                     = $flist['cod_servicio'];
            $cantidad               = $flist['cantidad_tmp'];
            $precio_venta           = $flist['precio_tmp'];
            if ($id > 0 and is_numeric(($id))) {
                $sqlProductos       = mysqli_query($conexion, "SELECT servicio, costo FROM servicios WHERE cod_servicio='$id'");
                $filap              = mysqli_fetch_array($sqlProductos);
                $nombre_producto    = $filap['servicio'];
            }
            /**********************************************************/
            /**********************************************************/
            $precio_venta_f         = number_format($precio_venta, 2);
            $precio_venta_r         = str_replace(",", "", $precio_venta_f);
            $precio_total           = ($precio_venta_r * $cantidad);
            $precio_total_f         = number_format($precio_total, 2);
            $precio_total_r         = str_replace(",", "", $precio_total_f);
            $sumador_total          = ($sumador_total + $precio_total_r);
            /**********************************************************/
            /**********************************************************/
        ?>
            <tr>
                <td><?= $nombre_producto ?></td>
                <td>
                    <textarea name="cantidad_tmp-<?= $id_tmp ?>" id="cantidad_tmp_<?= $id_tmp ?>" class="form-control input cantidades" style="height: 38px;"><?= $cantidad ?></textarea>
                </td>
                <td>
                    <textarea name="precio_tmp-<?= $id_tmp ?>" id="cantidad_tmp_<?= $id_tmp ?>" class="form-control input precios" style="height: 38px;"><?= $precio_venta_f ?></textarea>
                </td>
                <td>
                    <input type="text" readonly value="<?= $precio_total_r ?>" class="form-control monto total" size="10" style="width: 100%;">
                </td>
                <td>
                    <a class="btn btn-danger waves-effect waves-light eliminarpro" onclick="eliminar('<?= $id_tmp ?>')">
                        <i class="mdi mdi-delete-empty"></i>
                    </a>
                </td>
            </tr>
        <?php
        }
        $subtotal       = number_format($sumador_total, 2, '.', '');
        $total_factura  = $subtotal / 1.18;
        $total_igv      = $total_factura * 0.18
        ?>
        <tr>
            <td colspan="3" align="right">TOTAL FACTURA s/.</td>
            <td align="center">
                <input type="text" class="form-control text-right totales" id="subtotal" readonly value="<?= $subtotal ?>" size="10">
            </td>
            <td></td>
        </tr>
    </tbody>
</table>
<script>
    $(function() {
        /***************************************************/
        /***************************************************/
        $("textarea").blur(function() {
            var field = $(this);
            field.css("backgorund-color", "#D0F5A9");
            var datosEnvar = {
                value: $(this).val(),
                field: $(this).attr('name'),
                proceso: "EditarFactura"
            }
            //alert("value :" + datosEnvar.value + " field :" + datosEnvar.field + " proceso :" + datosEnvar.proceso)
            $.ajax({
                type: "POST",
                url: "ajax/edit.php",
                data: datosEnvar
            })
        })
    })
    /*****************************************************/
    /*****************************************************/
    var input = document.querySelectorAll(".input");
    input.forEach(function(e) {
        e.addEventListener("click", multiplica);
        e.addEventListener("keyup", multiplica);
        e.addEventListener("focus", multiplica);
    })
    /*****************************************************/
    /*****************************************************/
    function multiplica() {
        var tr = this.closest("tr");
        var total = 1;
        var inputs = tr.querySelectorAll(".input");
        inputs.forEach(function(e) {
            total *= e.value;
        })
        tr.querySelector(".total").value = total.toFixed(2)
        calcularTotal(this.closest("table"));
    }
    /*****************************************************/
    /*****************************************************/
    function calcularTotal(e) {
        var total = 0;
        var total1 = 0;
        var totales = e.querySelectorAll(".total");
        totales.forEach(function(e) {
            total += parseFloat(e.value);
            total1 += parseFloat(e.value);
        })
        e.getElementsByClassName("totales")[0].value = total.toFixed(2);
        $("#pago_faltante").val(total.toFixed(2));
    }
</script>