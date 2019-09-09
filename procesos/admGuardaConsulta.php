<?php 
include_once("../clases/clsPaciente.php");


$idPaciente = $_POST["p_idPaciente"];
$motivo = $_POST["p_motivo"];
$ta = $_POST["p_ta"];
$fc = $_POST["p_fc"];
$temp = $_POST["p_temperatura"];
$glucosa = $_POST["p_glucosa"];
$peso = $_POST["p_peso"];
$talla = $_POST["p_talla"];
$sexo = $_POST["p_sexo"];
$edad = $_POST["p_edad"];
$imc = $_POST["p_imc"];
$porcFcm = $_POST["p_porcFcm"];
$fcm = $_POST["p_fcm"];

$oPaciente = new clsPaciente();

$oPaciente->guardaConsulta($idPaciente,$motivo,$ta,$fc,$temp,$glucosa,$peso,$talla,$sexo,$edad,$imc,$porcFcm,$fcm);
?>