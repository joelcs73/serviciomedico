<?php 
include_once("../clases/clsPadecimiento.php");

$idPadecimiento = $_POST["p_idPadecimiento"];
$descripcion = $_POST["p_descripcion"];

if($descripcion==""){
	return;
}

$oPadecimiento = new clsPadecimiento();
$oPadecimiento->guardaPadecimiento($idPadecimiento,$descripcion);
?>