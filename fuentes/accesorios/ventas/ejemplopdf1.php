<?php
require("../config/conexion.php");
require("../config/inicializar-datos.php");
require("../config/EnLetras.php");
date_default_timezone_set('America/Lima');
/*************************************************************/
/*************************************************************/
require_once('tcpdf/tcpdf.php');
/*************************************************************/
/*********************  CREAR FACTURA   **********************/
/*************************************************************/
$cod_cotizacion        = $_REQUEST['cod_cotizacion'];
/*************************************************************/
/*************************************************************/
$nommes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
/*************************************************************/
/*************************************************************/
$sqlFactura         = mysqli_query($conexion, "SELECT * FROM cotizacion_productos WHERE cod_cotizacion='$cod_cotizacion'");
$rw_factura         = mysqli_fetch_array($sqlFactura);
$cod_cotizacion     = $rw_factura['cod_cotizacion'];
$num_comprobante    = str_pad($rw_factura['num_cotizacion'], 8, "0", STR_PAD_LEFT);
$num_comp           = $rw_factura['num_cotizacion'];
$serie              = $rw_factura['serie'];
$fecha_registro     = $rw_factura['fecha_registro'];
$fecha_vencimiento  = date('d-m-Y', strtotime($rw_factura['fecha_vencimiento']));
$doc                = "Cotización";
$tipo_doc           = "RUC/DNI";
$nombre_cliente     = $rw_factura['nombre_cliente'];
$direccion_cliente  = $rw_factura['direccion'];
$documento          = $rw_factura['documento'];
$email_cliente      = $rw_factura['email_cliente'];
$telefono_cliente   = $rw_factura['telefono_cliente'];
$xcod_puntoven      = $rw_factura['cod_puntoventa'];
$total_grabadas     = $rw_factura['total_grabadas'];
$total_igv          = $rw_factura['total_igv'];
$total_monto        = $rw_factura['total_monto'];
$forma_pago         = $rw_factura['forma_pago'];
/*************************************************************/
/*************************************************************/
$resultDate         = 0;
$resultDate         = strtotime($fecha_registro);
$diasemana          = date("w", $resultDate);
$dia                = date("d", $resultDate);
$mes                = date("n", $resultDate);
$anio               = date("Y", $resultDate);
$fecha_emision      = 'Fecha Emisión : ' . $dia . ' ' . $nommes[$mes - 1] . ' del ' . $anio;
/*************************************************************/
/*********************     CREAR PDF    **********************/
/*************************************************************/
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->setCreator(PDF_CREATOR);
$pdf->setAuthor($xRazonSocial);
$pdf->setTitle('Cotizacion-' . $num_comprobante);
$pdf->setSubject('COTIZACION DE PRODUCTOS');
$pdf->setKeywords('TCPDF, PDF, example, test, guide');

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->setDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->setMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);

// set auto page breaks
$pdf->setAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__) . '/lang/eng.php')) {
    require_once(dirname(__FILE__) . '/lang/eng.php');
    $pdf->setLanguageArray($l);
}

/*************************************************************/
/*********************     CREAR PDF    **********************/
/*************************************************************/
$pdf->setFontSubsetting(true);
$pdf->SetFont('dejavusans', '', 8, '', true);

// add a page
$pdf->AddPage();

$html .= '
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="45%">
		<p style="text-align: center; margin:0;">
		<img src="imagenes/logo-factura.png" width="216" height="80" alt="Cotizaciones"/>
		</p>
        <p style="text-align: center; font-size: 9px; margin: 0; font-weight: bold;">
        ' . $xRazonSocial . '<br>
		RUC: ' . $xRucEmpresa . '<br>
		' . $xDirecEmpre . '<br>
		Teléfonos : ' . $xTelefEmpre . '<br>
		Email : ' . $xEmailVentas . '<br>
		Web : www.waykistore.net</p>
		<table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
                <td><p><strong>Cliente :</strong> ' . $nombre_cliente . '</p></td>
            </tr>
            <tr>
                <td><p><strong>RUC/DNI :</strong> ' . $documento . '</p></td>
                </tr>		
            <tr>
                <td><p><strong>Direccion :</strong> ' . $direccion_cliente . '</p></td>
            </tr>
            <tr>
                <td><p><strong>Email :</strong> ' . $email_cliente . '</p></td>
            </tr>
            <tr>
                <td><p><strong>Telefono/Movil :</strong> ' . $telefono_cliente . '</p></td>
            </tr>			
            <tr>
                <td><p><strong>Forma Pago	:</strong> ' . $forma_pago . '</p></td>
            </tr>
			<tr>
                <td><p><strong>Fecha Emision :</strong> ' . date('d-m-Y', strtotime($fecha_registro))  . '</p></td>
            </tr>
			<tr>
                <td><p><strong>Fecha Vencimiento :</strong> ' . $fecha_vencimiento . '</p></td>
            </tr>';
$html .= '			
	    </table>	
	  </td>
      <td width="20%">&nbsp;</td>
      <td width="35%">
		<div style="border: 1px solid #000;">
			<h1 style="text-align: center; font-size: 16px; margin: 0; display: block; line-height: 25px;">RUC : ' . $xRucEmpresa . '</h1>
			<h2 style="text-align: center; font-size: 16px; margin: 0; display: block; background-color:#cccccc; line-height: 25px;">' . $doc . '</h2>
			<h3 style="text-align: center; font-size: 11px; margin: 0; display: block; line-height: 25px;">' . $serie . '-' . $num_comprobante . '</h3>
		</div>
		<p style="text-align: center;"><strong>' . $fecha_emision . '</strong></p>
	  </td>
    </tr>
  </tbody>
</table>
<br><br>
<table width="100%" border="1" cellpadding="6">
	<tr bgcolor="#e5e5e5">
	  <th width="10%" style="text-align: center;"><strong>CANT.</strong> </th>
	  <th width="60%" style="text-align: center;"><strong>DESCRIPCION</strong> </th>
	  <th width="15%" style="text-align: center;"><strong>P. UNIT.</strong> </th>
	  <th width="15%" style="text-align: center;"><strong>IMPORTE</strong> </th>
	</tr>';
$sqlDetalleFacts    = mysqli_query($conexion, "SELECT * FROM detalle_cotizacionproductos WHERE cod_cotizacion='$cod_cotizacion'");
while ($fDetFac     = mysqli_fetch_array($sqlDetalleFacts)) {
    $producto       = $fDetFac['producto'];
    $cantidad       = $fDetFac['cantidad'];
    $precio         = $fDetFac['precio'];
    $totalprod      = ($precio * $cantidad);
    /**************************************************/
    $subtotal        += $totalprod;
    /**************************************************/
    $html .= '	
		<tr>
		<td>' . $cantidad . '</td>
		<td>' . $producto . '</td>
		<td style="text-align: right">S/. ' . number_format($precio, 2) . '</td>
		<td style="text-align: right">S/. ' . number_format($totalprod, 2) . '</td>
		</tr>';
}
$V            = new EnLetras();
$con_letra    = strtoupper($V->ValorEnLetras($total_monto, "soles"));

$html .=
    '</table>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td>
				<table width="100%" border="0" cellspacing="0" cellpadding="3">
					<tr>
						<td style="text-align: right" width="85%">SUB TOTAL :</td>
						<td style="text-align: right" width="15%"><strong>S/. ' . number_format($subtotal, 2) . '</strong></td>
					</tr>
					<tr>
						<td style="text-align: right" width="85%">OP. GRAVADAS :</td>
						<td style="text-align: right" width="15%"><strong>S/. ' . number_format($total_grabadas, 2) . '</strong></td>
					</tr>
					<tr>
						<td style="text-align: right" width="85%">I.G.V. :</td>
						<td style="text-align: right" width="15%"><strong>S/. ' . number_format($total_igv, 2) . '</strong></td>
					</tr>
					<tr>
						<td style="text-align: right" width="85%">TOTAL IMPORTE :</td>
						<td style="text-align: right" width="15%"><strong>S/. ' . number_format(($total_monto), 2) . '</strong></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
	<table width="100%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td></td>
		</tr>
		<tr>
			<td>
				<h4 style="text-align: center">SON : ' . $con_letra . '</h4>
				<h3 style="text-align: center">GENERADO</h3>
				<p style="text-align: center">' . $fecha_emision . '<br><br><img src="qr/' . $serie . '-' . $num_comp . '.png" width="100" height="100"/></p>
				<p style="text-align: center">Autorizado mediante Resolución de Intendencia Nº 032-005 Representacion impresa de la ' . $doc . '
				Consulte su documento electrónico en htts://www.sunat.gob.pe</p>
			</td>		
		</tr>
	</table>';
/*************************************************************/
/*************************************************************/
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$pdf->lastPage();
/*************************************************************/
/*********************     CREAR PDF    **********************/
/*************************************************************/
$pdf->Output($xRucEmpresa . '-Cotizacion-' . $num_comprobante . '.pdf', 'I');
$pdf->Output($_SERVER['DOCUMENT_ROOT'] . 'img-apps/pdf/' . $xRucEmpresa . '-Cotizacion-' . $num_comprobante . '.pdf', 'F');
$nombrePDF = $xRucEmpresa . '-' . $serie . '-' . $num_comprobante . '.pdf';
$sqlActualizarFact = mysqli_query($conexion, "UPDATE cotizacion_productos SET pdf='$nombrePDF' WHERE cod_cotizacion='$cod_cotizacion'");
/*************************************************************/
/*********************     FIN CREAR PDF    ******************/
/*************************************************************/
