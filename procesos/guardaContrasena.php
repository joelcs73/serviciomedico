<?php 
include_once("../clases/clsConexion.php");
$oCon = new clsConexion;
$oCon->abrir_conexion();
	$strGuarda = "
	update admusuarios set 
		pwd = '".md5(trim($_POST["contrasena"]))."' 
		where idUsuario = ".$_POST["idUsuario"];
$resultado = mysqli_query($oCon->obtener_conexion(),$strGuarda);
$msg = array();
if (!$resultado){
	if (mysql_errno()==1062){
		$mensaje = "Registro duplicado - ".mysql_error();
	} else {
		$mensaje = "Error desconocido - Query:".$strGuarda;
	}
	$msg["resultado"] = "Error";
	$msg["mensaje"] = $mensaje;
}else{
	$msg["resultado"] = "Exito";
	$msg["mensaje"] = mysql_affected_rows()." Registro(s) actualizado(s)";
}
print json_encode($msg);
$oCon->cerrar_conexion();
?>