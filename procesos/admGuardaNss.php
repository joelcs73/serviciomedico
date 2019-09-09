<?php 
include_once("../clases/clsPaciente.php");
include_once("../clases/funciones.php");


$idPaciente = $_POST["p_idPaciente"];
$nss = $_POST["p_nss"];

$oPaciente = new clsPaciente();
$oPaciente->guardaNss($idPaciente,$nss);
?>