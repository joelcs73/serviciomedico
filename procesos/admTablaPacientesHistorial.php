<?php 
include_once("../clases/clsPaciente.php");

$strBusqueda = $_POST["cadenaBuscada"];

$oPaciente = new clsPaciente();
$oPaciente->tablaPacientesBuscados($strBusqueda);
?>