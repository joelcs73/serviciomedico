<?php 
include_once("../clases/clsUsuarios.php");

$idUsuario = $_POST["idUsuario"];

$objAdmin = new clsUsuario();

$objAdmin->LlenaOpcionesDeAcceso($idUsuario);
 ?>