<?php 
include("../clases/clsPaciente.php");

$fi = $_POST["fi"];
$ff = $_POST["ff"];

$oPaciente = new clsPaciente();

echo '<div class="row">';
echo 	'<div class="col">';
echo 		'<div class="card border-dark">';
echo 			'<div class="card-header"><strong>Por Padecimiento</strong></div>';
echo 			'<div class="card-body">';
					$oPaciente->tablaAtencionPorPadecimiento($fi,$ff); 
echo 				'<div class="ocultoParaMovil">';
						include("../paginas/chrt01PorPadecimiento.php");
echo 				'</div>';
echo 			'</div>';
echo 		'</div>';
echo 	'</div>';

echo 	'<div class="col">';
echo 		'<div class="card border-dark">';
echo 			'<div class="card-header"><strong>Por Sexo</strong></div>';
echo 			'<div class="card-body">';
					$oPaciente->tablaAtencionPorSexo($fi,$ff); 
echo 				'<div class="ocultoParaMovil">';
						include("../paginas/chrt02PorSexo.php");
echo 				'</div>';
echo 			'</div>';
echo 		'</div>';
echo 	'</div>';


echo 	'<div class="col">';
echo 		'<div class="card border-dark">';
echo 			'<div class="card-header"><strong>Por Departamento</strong></div>';
echo 			'<div class="card-body">';
					$oPaciente->tablaAtencionPorDepartamento($fi,$ff); 
echo 				'<div class="ocultoParaMovil">';
						include("../paginas/chrt03PorDepartamento.php");
echo 				'</div>';
echo 			'</div>';
echo 		'</div>';
echo 	'</div>';
echo '</div>';


echo '<div class="row">';
echo 	'<div class="col">';
echo 		'<div class="card border-dark">';
echo 			'<div class="card-header"><strong>Por Edades</strong></div>';
echo 			'<div class="card-body">';
					$oPaciente->tablaAtencionPorEdades($fi,$ff); 
echo 				'<div class="ocultoParaMovil">';
						include("../paginas/chrt04PorEdad.php");
echo 				'</div>';
echo 			'</div>';
echo 		'</div>';
echo 	'</div>';
echo '</div>';



?>