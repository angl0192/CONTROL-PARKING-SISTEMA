<?php
require("../config/conexion.php");
require("../config/inicializar-datos.php");
$q      = $_POST['palabra'];
echo "
<table id='datatable-buttons' class='table table-striped table-bordered dt-responsive nowrap' style='border-collapse: collapse; border-spacing: 0; width: 100%;'>
    <thead>
        <tr>
            <th width='40%'>Producto</th>
            <th width='11%'>Serie</th>
            <th width='6%'>Stock</th>
            <th width='8%'>P. Compra</th>
            <th width='8%'>P. Venta</th>
            <th width='6%'>Cant</th>
            <th width='8%'>P. Venta</th>
            <th width='5%'></th>
        </tr>
    </thead>
    <tbody>";
if (strlen($q) >= 1) {
    //$sqlBusqueda    = mysqli_query($conexion, "SELECT cod_producto, codigo, nombre_producto, stock_actual FROM stock_locales WHERE cod_puntoventa='$xTienda' AND (nombre_producto LIKE '%$q%' OR codigo LIKE '%$q%') LIMIT 10");
    $sqlBusqueda    = mysqli_query($conexion, "SELECT cod_producto, codigo_interno, nombre_producto, fecha_compra, precio_compra, precio_venta FROM productos WHERE nombre_producto LIKE '%$q%' OR codigo_barras LIKE '%$q%' LIMIT 10");
    $numRes         = mysqli_num_rows($sqlBusqueda);
    if ($numRes > 0) {
        while ($fbus = mysqli_fetch_array($sqlBusqueda)) {
            $c_p             = $fbus['cod_producto'];
            $fecha_compra    = date('d-m-Y', strtotime($fbus['fecha_compra']));
            $nombre_producto = $fbus['nombre_producto'];
            $p_comp          = $fbus['precio_compra'];
            $p_ven           = $fbus['precio_venta'];
            /*****************************************************/
            /*****************************************************/
            $stock           = 0;
            $sqlConsultaSt      = mysqli_query($conexion, "SELECT stock FROM stock_productos WHERE cod_producto='$c_p'");
            if (mysqli_num_rows($sqlConsultaSt) > 0) {
                while ($fstock  = mysqli_fetch_array($sqlConsultaSt)) {
                    $stock     += $fstock['stock'];
                }
            } else {
                $stock = 0;
            }
            /*****************************************************/
            /*****************************************************/
            $i++;
?>
            <tr>
                <td><?= $nombre_producto ?><br>F. Compra : <?= $fecha_compra ?></td>
                <td>
                    <select name="serie_<?= $c_p ?>" id="serie_<?= $c_p ?>" class="form-select">
                        <option value="0">Serie</option>
                        <?php
                        $sqlConsultaSer = mysqli_query($conexion, "SELECT serie FROM stock_productos WHERE cod_producto='$c_p' AND stock>0");
                        while ($fserie  = mysqli_fetch_array($sqlConsultaSer)) {
                            $serie      = $fserie['serie'];
                            echo "<option value='$serie'>$serie</option>";
                        }
                        ?>
                    </select>
                </td>
                <td><?= $stock ?></td>
                <td>s/. <?= $p_comp ?></td>
                <td>s/. <?= $p_ven ?></td>
                <td>
                    <input type="text" id="cant_<?= $c_p ?>" data="<?= $stock ?>" value="1" onfocus="this.value=''" onblur="if(this.value==''){this.value='1'}" class="form-control">
                </td>
                <td>
                    <input type="text" id="precio_<?= $c_p ?>" value="<?= $p_ven ?>" onfocus="this.value=''" onblur="if(this.value==''){this.value='<?= $p_ven ?>'}" class="form-control">
                </td>
                <td>
                    <a class="btn btn-primary waves-effect waves-light agregar">
                        <i class="mdi mdi-plus-thick"></i>
                        <input type="hidden" class="cod_prod" value="<?= $c_p ?>">
                        <input type="hidden" class="stock" value="<?= $stock ?>">
                    </a>
                </td>
            </tr>
        <?php
        }
    } else {
        ?>
        <tr>
            <td colspan="8" align="center">¡Lo sentimos, no existe el producto en la tienda!</td>
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
            var cod_prod = $(".cod_prod", this).val();
            var stock = parseInt($(".stock", this).val());
            var cant = parseInt($("#cant_" + cod_prod).val());
            var precio = parseFloat($("#precio_" + cod_prod).val());
            var serie = $("#serie_" + cod_prod).val();
            if (serie == 0) {
                alert("Seleccionar la serie del producto");
                $("#serie_" + cod_prod).focus();
                return false;
            }
            if (precio <= 0) {
                alert("Error el precio no puede ser meno o igua a cero");
                return false
            }
            if (cant > stock) {
                alert("La cantidad excede al stock");
                $("#cant_" + cod_prod).focus();
                return false
            } else {
                agregar(cod_prod, serie, cant, precio);
            }
        })
    })
</script>