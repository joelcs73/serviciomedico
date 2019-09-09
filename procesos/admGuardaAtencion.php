<?php 
include_once("../clases/clsPaciente.php");
include_once("../clases/funciones.php");


$idExpediente = $_POST["p_idExpediente"];
$diagnostico = $_POST["p_diagnostico"];
$ta = $_POST["p_ta"];
$fc = $_POST["p_fc"];
$temperatura = $_POST["p_temperatura"];
$peso = $_POST["p_peso"];
$talla = $_POST["p_talla"];
$imc = $_POST["p_imc"];
$porcFcm = $_POST["p_porcFcm"];
$fcm = $_POST["p_fcm"];
$glucosa = $_POST["p_glucosa"];
$tratamiento = $_POST["p_tratamiento"];
$idPadecimiento = $_POST["p_idPadecimiento"];
$atendidoPor = $_POST["p_atendidoPor"];
$nota = $_POST["p_nota"];


if($diagnostico=="" || $tratamiento==""){
	return;
}

$oPaciente = new clsPaciente();
$oPaciente->guardaAtencion($idExpediente,$diagnostico,$ta,$fc,$temperatura,$peso,$talla,$imc,$porcFcm,$fcm,$glucosa,$tratamiento,$idPadecimiento,$atendidoPor,$nota);
?>