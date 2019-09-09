<?php 
include_once("../clases/clsPaciente.php");

$idPaciente = $_POST["idPaciente"];
$nombrePaciente = $_POST["nombrePaciente"];

$oPaciente = new clsPaciente();
$oPaciente->tablaHistorialClinico($idPaciente,$nombrePaciente);
?>