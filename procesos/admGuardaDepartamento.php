<?php 
include_once("../clases/clsDepartamento.php");

$idDepartamento = $_POST["p_idDepartamento"];
$nombreDepartamento = $_POST["p_nombreDepartamento"];

if($nombreDepartamento==""){
	return;
}

$oDepartamento = new clsDepartamento();
$oDepartamento->guardaDepartamento($idDepartamento,$nombreDepartamento);
?>