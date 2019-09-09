<?php 
include_once "../clases/clsPaciente.php";


$idExpediente = $_POST["idExpediente"];

$oPaciente = new clsPaciente();

$oPaciente->cancelaConsulta($idExpediente);
?>