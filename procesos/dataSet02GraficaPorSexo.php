<?php 
include_once("../clases/clsPaciente.php");

$fi = $_POST["fi"];
$ff = $_POST["ff"];

$oPaciente = new clsPaciente();


$oPaciente->dataSetGraficaPorSexo($fi,$ff); 


?>