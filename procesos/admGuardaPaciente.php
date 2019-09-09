<?php 
include_once("../clases/clsPaciente.php");
include_once("../clases/funciones.php");


$idPaciente = $_POST["p_idPaciente"];
$nombre = $_POST["p_nombre"];
$apPat = $_POST["p_ApPat"];
$apMat = $_POST["p_ApMat"];
//$fecNac = fecha_para_bd($_POST["p_fecNac"]);
$fecNac = $_POST["p_fecNac"];
$sexo = $_POST["p_sexo"];
$tipoSang = $_POST["p_tipoSanguineo"];
$alergias = $_POST["p_alergias"];
$apf = $_POST["p_apf"];
$app = $_POST["p_app"];
$celular = $_POST["p_celular"];
$contacto = $_POST["p_contacto"];
$correo = $_POST["p_correo"];
$idDep = $_POST["p_idDep"];
$esDiabetico = ($_POST["p_esDiabetico"]=='true'?1:0);
$esHipertenso = ($_POST["p_esHipertenso"]=='true'?1:0);
$esDislipidemico = ($_POST["p_esDislipidemico"]=='true'?1:0);
$nss = $_POST["p_nss"];

if($nombre=="" || $apPat=="" || $fecNac=="" || $sexo=="0" || $alergias=="" || $idDep=="0"){
	return;
}

$oPaciente = new clsPaciente();
$oPaciente->guardaPaciente($idPaciente,$nombre,$apPat,$apMat,$fecNac,$sexo,$tipoSang,$alergias,$apf,$app,$celular,$contacto,$correo,$idDep,$esDiabetico,$esHipertenso,$esDislipidemico,$nss);
?>