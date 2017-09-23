<?php 

header("Content-type:application/pdf");

if (isset($_POST['fecha'])) {
	$fecha = $_POST['fecha'];
} else {
	header('location: proforma-nueva.html');
}

$titulo = $_POST['titulo'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$tipoidentificacion = $_POST['tipoidentificacion'];
$cedula = $_POST['cedula'];
$direccion = $_POST['direccion'];
$barrio = $_POST['barrio'];
$departamento = $_POST['departamento'];
$ciudad = $_POST['ciudad'];
$celular = $_POST['celular'];
$telefonofijo = $_POST['telefonofijo'];


$vehiculoImplemento = $_POST['vehiculoImplemento'];

$arreglo = explode(',',$vehiculoImplemento); //Convertir en json el array

$resultado = count($arreglo);

$numeroVehiculoImplemento = $resultado / 4; //Numero de implementos adquiridos

for ($i=0; $i < $numeroVehiculoImplemento; $i++) { 

	for ($j= ($i * 3); $j <  (($i+1) * 3); $j++) { 
		$arreglo[$j].' <br>';
	}
}

$total = 0;

$html = '
<div id="cuerpo">
	<p>Yopal, '.$fecha.'</p>
	<br>
	<p>'.$titulo.'</p>
	<p><b>'.$nombres.' '.$apellidos.'</b></p>
	<p>'.$tipoidentificacion.' '.$cedula.'</p>
	<p>Dirección '.$direccion.'</p>
	<p>YOPAL</p>
	<p>CEL: '.$celular.'</p>
	<br>
	<br>
	<h4>PROFORMA</h4>
	<br>
	<p>Atendemos su amable solicitud, cotizándole a continuación el siguiente equipo de aplicación agrícola. </p>
	<br> COMPRAS <br><table class="table"><tr><td>Marca</td><td>Tipo de vehiculo</td><td>modelo</td><td>Precio</td></tr>';

		for ($i=0; $i < $numeroVehiculoImplemento; $i++) { 
			$html = $html . '<tr> <br> ';
			for ($j= ($i * 4); $j <  (($i+1) * 4); $j++) { 
				$html =  $html .'<td>' .$arreglo[$j].'</td>';
				if (((($i + 1) *4) -1) == $j) {
					$total = $total + $arreglo[$j];
				}
			}
			$html = $html . '</tr>';
		}


	$html = $html. '<tr><td colspan="3">Total</td><td>'.$total.'</td></tr></table><br>
	<br>
	<p>FORMA DE PAGO</p>
	<br>
	
	<p>Préstamo línea FINAGRO o LEASING: A tramitar por intermedio de un banco comercial del país.
	GARANTIA:
	MASSEY FERGUSON concede para sus productos una garantía de un (1) año, excluyendo dicha garantía los daños ocasionados por uso inadecuado de la máquina, mal manejo y mal mantenimiento.
	Como Concesionario Autorizado de fábrica, garantizamos el suministro de repuestos y el servicio técnico de la maquina ofrecida.</p>
	<br>
	<br>
	<p>OFERTA VALIDA POR 40 DIAS.</p>
	<br>
	<p>Atentamente.</p>
	<br>
	<br>
	<p>ANASTACIO GOMEZ LOZANO<br>
	GERENTE GENERAL.</p>

</div>
';

//==============================================================
//==============================================================
//==============================================================

include("mpdf60/mpdf.php");

$mpdf=new mPDF('c','Letter'); 

$mpdf->SetDisplayMode('fullpage');

// LOAD a stylesheet
$stylesheet = file_get_contents('mpdfstyleA4.css');

$stylesheet = file_get_contents('css/bootstrap.css');

$mpdf->WriteHTML($stylesheet,1);	// The parameter 1 tells that this is css/style only and no body/html/text

$mpdf->WriteHTML($html);

$mpdf->Output();

exit;
//==============================================================
//==============================================================
//==============================================================


?>