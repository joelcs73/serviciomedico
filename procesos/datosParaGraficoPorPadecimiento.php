<?php 
include_once("../clases/clsonexion.php");
$oCon = new clsConexion;
$oCon->abrir_conexion();
$sql="SELECT cp.descripcion, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN catpadecimientos cp ON ex.idPadecimiento = cp.idPadecimiento WHERE ex.estado = 'Atendido' AND month(fecha)= month(curdate()) GROUP BY ex.idPadecimiento ORDER BY total DESC";

$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
$data=array();

// $result = mysql_fetch_array($resultadoQry);
// $f=0;
// foreach ($result as $row) {
// 	$data[]=$row;
// 	$f++;
// }

$f=0;
while ($fila = mysqli_fetch_assoc($resultadoQry)) {
	$data[] = $fila;
	 $f++;
}

print json_encode($data);
$oCon->cerrar_conexion();
?>