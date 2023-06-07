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
					<img src="imagenes/logo-ticket.png" alt="Logo Empresa" width="215" height="82">
				</td>
			</tr>
			<tr>
				<td align="center">
					<strong>RUC : 2563654877</strong><br>
					Jr. Lima 123 La Molina<br>
					Telefono : 999999999<br>
					Email : email@gmail.com
				</td>
			</tr>
			<tr>
				<td align="center">
					<strong style="font-size: 16px; font-weight: 600;">
						Tiket<br>
						TK-0000001
					</strong>
				</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>FECHA : 00-00-0000</td>
			</tr>
			<tr>
				<td>FORMA PAGO : Contado</td>
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
				<td>
					<strong>
						C.
					</strong>
				</td>
				<td>
					<strong>
						DESCRIP.
					</strong>
				</td>
				<td align="right">
					<strong>
						P. UNIT
					</strong>
				</td>
				<td align="right">
					<strong>
						TOTAL
					</strong>
				</td>
			</tr>
			<tr>
				<td colspan="4">==================================================</td>
			</tr>

			<tr>
				<td>1</td>
				<td>Producto 1</td>
				<td align="right">0.00</td>
				<td align="right">0.00</td>
			</tr>

			<tr>
				<td colspan="4">==================================================</td>
			</tr>
			<!-- ********************************************************** -->
			<!-- ************* 	    PIE DE PAGINA DE TICKET     *********** -->
			<!-- ********************************************************** -->
			<tr>
				<td colspan="3" align="right">SUB TOTAL :</td>
				<td align="right">s/. 0.00</td>
			</tr>
			<tr>
				<td colspan="3" align="right">TOTAL GRABADAS :</td>
				<td align="right">s/. 0.00</td>
			</tr>
			<tr>
				<td colspan="3" align="right">IVG :</td>
				<td align="right">s/. 0.00</td>
			</tr>
			<tr>
				<td colspan="3" align="right">IMP. TOTAL :</td>
				<td align="right">s/. 0.00</td>
			</tr>

			<tr>
				<td colspan="4">==================================================</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<?php
					$V 		= new EnLetras();
					$con_letra = strtoupper($V->ValorEnLetras($total_monto, "soles"));
					echo "<strong>SON : " . $con_letra . '</strong>';
					?>
				</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<img src="qr/qr.png" alt="" width="100" height="100">
				</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					Autorizado mediante Resolución de Intendencia Nº 032-005 Representacion impresa de la <?= $documento ?>.
					Consulte su documento electrónico en htts://www.sunat.gob.pe
				</td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					Nº de Articulos : <?= $suma ?>
				</td>
			</tr>
			<tr>
				<td colspan="4"></td>
			</tr>
			<tr>
				<td colspan="4" align="center">
					<strong>¡Gracias por su compra!</strong>
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