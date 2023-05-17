<?php
require("../config/conexion.php");
require("../config/inicializar-datos.php");
$q                  = explode("-", $_POST['palabra']);
$serie              = $q[0];
$num_comprobante    = $q[1];
echo "
<table id='datatable-buttons' class='table table-striped table-bordered dt-responsive nowrap' style='border-collapse: collapse; border-spacing: 0; width: 100%;'>
    <thead>
        <tr>
            <th width='35%'>Cliente</th>
            <th width='20%'>Tipo Documento</th>
            <th width='10%'>Serie</th>
            <th width='20%'>Fecha Emision</th>
            <th width='10%'>Monto Total</th>
            <th width='5%'></th>
        </tr>
    </thead>
    <tbody>";
if (strlen($serie) >= 1) {
    //$sqlBusqueda    = mysqli_query($conexion, "SELECT cod_producto, codigo, nombre_producto, stock_actual FROM stock_locales WHERE cod_puntoventa='$xTienda' AND (nombre_producto LIKE '%$q%' OR codigo LIKE '%$q%') LIMIT 10");
    $sqlBusqueda    = mysqli_query($conexion, "SELECT * FROM facturas WHERE serie='$serie' AND num_comprobante='$num_comprobante'");
    $numRes         = mysqli_num_rows($sqlBusqueda);
    if ($numRes > 0) {
        while ($fbus = mysqli_fetch_array($sqlBusqueda)) {
            $i_f             = $fbus['id_factura'];
            $codigo_compro   = $fbus['codigo_compro'];
            $razon_social    = $fbus['razon_social'];
            $serie           = $fbus['serie'] . '-' . $fbus['num_comprobante'];
            $fecha_registro  = date('d-m-Y', strtotime($fbus['fecha_registro']));
            $total_monto     = $fbus['total_monto'];
            /*****************************************************/
            /*****************************************************/
            $sqlDocumentos      = mysqli_query($conexion, "SELECT descripcion FROM tipo_documento WHERE codigo_compro='$codigo_compro'");
            $fdocs              = mysqli_fetch_array($sqlDocumentos);
            $tipo_documento     = $fdocs['descripcion'];
            /*****************************************************/
            /*****************************************************/
            $i++;
?>
            <tr>
                <td><?= $razon_social ?></td>
                <td><?= $tipo_documento ?></td>
                <td><?= $serie ?></td>
                <td><?= $fecha_registro ?></td>
                <td>s/. <?= $total_monto ?></td>
                <td>
                    <a class="btn btn-primary waves-effect waves-light agregar">
                        <i class="mdi mdi-plus-thick"></i>
                        <input type="hidden" class="id_factura" value="<?= $i_f ?>">
                    </a>
                </td>
            </tr>
        <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="8" align="center">¡Lo sentimos, no existe la nota de ventas!</td>
        </tr>
<?php
    }
}
?>
</tbody>
</table>
<script>
    $(function() {
        /****************************************************/
        /****************************************************/
        $(".agregar").click(function() {
            var id_factura = $(".id_factura", this).val();
            agregar(id_factura);
        })
    })
</script>