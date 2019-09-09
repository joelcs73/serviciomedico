<?php 
include_once 'clsConexion.php';
//include("../tree.php");
class clsDepartamento{
	public function LlenaComboDepartamentos(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$strDep = "select * from catdepartamentos order by nombreDepartamento";
		$qryDep = mysqli_query($oCon->obtener_conexion(),$strDep);
		while ($datDep=mysqli_fetch_assoc($qryDep)){
			echo "<option value=".$datDep["idDepartamento"].">".$datDep["nombreDepartamento"]."</option>";
		}
		$oCon->cerrar_conexion();
	}	

	public function listaDeDepartamentos(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select idDepartamento, nombreDepartamento from catdepartamentos order by nombreDepartamento ";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		echo '<table class="table table-hover table-sm table-striped">';
		echo '<tr>';
		echo 	'<th>Nombre</th>';
		echo 	'<th class="text-center">Edición</th>';
		//echo 	'<th class="text-center">Eliminar</th>';
		echo '</tr>';
		while ($admPadec=mysqli_fetch_assoc($resultadoQry)){
			$datos="'".
			$admPadec["idDepartamento"]."||".
			$admPadec["nombreDepartamento"]."'";

			echo '<tr class="paciente">';
			echo 	'<td><span class=" grpUsuarios">'.$admPadec["nombreDepartamento"].'</span></td>';
			echo    '<td class="text-center"><button class="btn btn-outline-dark" data-toggle="modal" data-target="#modalEditaDepartamento" onclick="agregaDatosAlForm('.$datos.')"><i class="fa fa-pencil-alt"></i></button></td>';
			//echo    '<td class="text-center"><button class="btn btn-danger glyphicon glyphicon-trash" onclick="confirmaEliminaUsuario('.$datos.')"></button></td>';
			echo '</tr>';
		}
		echo '</table>';
		$oCon->obtener_conexion();
	}

	public function guardaDepartamento($idDepartamento,$nombreDepartamento){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if($idDepartamento!=0){
			$sql = "update catdepartamentos set nombreDepartamento='".$nombreDepartamento."' where idDepartamento = ".$idDepartamento;
		} else {
			$sql = "insert into catdepartamentos (nombreDepartamento) values ('".$nombreDepartamento."')";
		}
		//echo $sql;
		mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->obtener_conexion();
	}
}

?>