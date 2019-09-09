<?php 
include_once("../clases/clsPaciente.php");

$id = $_POST["p_idPaciente"];

$objAdmin = new clsPaciente();

$objAdmin->eliminaPaciente($id);
?>