<?php 
include_once("../clases/clsPaciente.php");

$strBusqueda = $_POST["cadenaBuscada"];
$idExpediente = $_POST["idExpediente"];

$oPaciente = new clsPaciente();
if($idExpediente!=""){
	$oPaciente->recuperaAtencion($idExpediente,$strBusqueda);
}
	
$oPaciente->tablaParaRecuperarConsulta($strBusqueda);

?>