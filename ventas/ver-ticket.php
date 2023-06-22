<?php
require("../config/conexion.php");
require("../config/inicializar-datos.php");
date_default_timezone_set('America/Lima');
$cod_parkeo = $_REQUEST['cod_parkeo'];
$sqlParkeo = mysqli_query($conexion, "SELECT * FROM parkeo WHERE cod_parkeo = '$cod_parkeo'");
$fparkeo = mysqli_fetch_array($sqlParkeo);
$cod_parkeo = $fparkeo['cod_parkeo'];
$cod_estacionamiento = $fparkeo['cod_estacionamiento'];
$tipo_cliente = $fparkeo['tipo_cliente'];
$num_placa = $fparkeo['num_placa'];
$fecha_ingreso = $fparkeo['fecha_ingreso'];
$hora_ingreso = $fparkeo['hora_ingreso'];
$observacion = $fparkeo['observacion'];
?>

<html>

<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/ticket.css" rel="stylesheet" type="text/css">
	<script>
		function printPantalla() {
			document.getElementById('cuerpoPagina').style.marginRight = "0";
			document.getElementById('cuerpoPagina').style.marginTop = "1";
			document.getElementById('cuerpoPagina').style.marginLeft = "1";
			document.getElementById('cuerpoPagina').style.marginBottom = "0";
			document.getElementById('botonPrint').style.display = "none";
			window.print()
		}
	</script>
</head>

<body id="cuerpoPagina">
	<div class="zona_impresion">
		<!-- ************************************************************** -->
		<!-- ************* 		DISEÑO DE TICKET AQUI     ***************** -->
		<!-- ************************************************************** -->
		<table border="0" align="center" width="360">
			<!-- ********************************************************** -->
			<!-- ************* 		  CABECERA DE TICKET      ************* -->
			<!-- ********************************************************** -->
			<tr>
				<td align="center">
					<img src="imagenes/logo-ventas.png" alt="<?= $x_nombre_comercial ?>" width="150" height="57">
				</td>
			</tr>
			<tr>
				<td align="center">
					<?= $x_razon_social?><br>
					<strong>RUC : <?= $x_ruc ?></strong><br>
				</td>
			</tr>
			<tr>
				<td align="center">
					<strong style="font-size: 16px; font-weight: 600;">
						Tiket TK-<?= $cod_parkeo?>
					</strong>
				</td>
			</tr>
			<tr>
				<td></td>
			</tr>
		</table>
		<!-- ********************************************************** -->
		<!-- ************* 	    CCONTENIDO DE TICKET      ************* -->
		<!-- ********************************************************** -->
		<table border="0" align="center" width='360'>
			<tr>
				<td colspan="4">==================================================</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<img src="qr/<?=$num_placa. '-' .$fecha_ingreso. '-' .$hora_ingreso?>.png" alt="" width="150" height="150">
				</td>
			</tr>
			<tr>
				<td colspan="4">==================================================</td>
			</tr>
			<!-- ********************************************************** -->
			<!-- ************* 	    PIE DE PAGINA DE TICKET     *********** -->
			<!-- ********************************************************** -->
			<tr>
				<td colspan="2" align="left">PLACA :</td>
				<td align="right"><?= $num_placa ?></td>
			</tr>
			<tr>
				<td colspan="2" align="left">FECHA INGRESO :</td>
				<td align="right"><?= $fecha_ingreso ?></td>
			</tr>
			<tr>
				<td colspan="2" align="left">HORA INGRESO :</td>
				<td align="right"><?= $hora_ingreso ?></td>
			</tr>
			<tr>
				<td colspan="2" align="left">OBSERVACIONES :</td>
				<td align="right"><?= $observacion ?></td>
			</tr>
			<tr>
				<td colspan="4">==================================================</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
				</td>
			</tr>
			<tr>
				<td colspan="4"></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<strong>¡Gracias por su preferencia!</strong>
				</td>
			</tr>
		</table>
		<!-- ************************************************************** -->
		<!-- ************************************************************** -->
	</div>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<div style="margin-left:245px;">
		<a href="#" id="botonPrint" onClick="printPantalla();">
			<img src="imagenes/printer.png" border="0" style="cursor:pointer" title="Imprimir">
		</a>
	</div>
</body>

</html>