<?php 
include_once 'clsConexion.php';

class clsPadecimiento{
	public function LlenaComboPadecimientos($idPad){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$strPad = "select * from catpadecimientos order by descripcion";
		$qryPad = mysqli_query($oCon->obtener_conexion(),$strPad);
		while ($datPade=mysqli_fetch_assoc($qryPad)){
			if ($datPade["idPadecimiento"]==$idPad){
				$sel="selected";
			} else {
				$sel="";
			}
			echo "<option value=".$datPade["idPadecimiento"]." ".$sel.">".$datPade["descripcion"]."</option>";
		}
		$oCon->cerrar_conexion();
	}	

	public function listaDePadecimientos(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select idPadecimiento, descripcion from catpadecimientos order by descripcion ";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		echo '<table class="table table-hover table-sm table-striped">';
		echo '<tr>';
		echo 	'<th>Descripcion</th>';
		echo 	'<th class="text-center">Edición</th>';
		//echo 	'<th class="text-center">Eliminar</th>';
		echo '</tr>';
		while ($admPadec=mysqli_fetch_assoc($resultadoQry)){
			$datos="'".
			$admPadec["idPadecimiento"]."||".
			$admPadec["descripcion"]."'";

			echo '<tr class="paciente">';
			echo 	'<td><span class=" grpUsuarios">'.$admPadec["descripcion"].'</span></td>';
			echo    '<td class="text-center"><button class="btn btn-outline-dark" data-toggle="modal" data-target="#modalEditaPadecimiento" onclick="agregaDatosAlForm('.$datos.')"><i class="fa fa-pencil-alt"></i></button></td>';
			//echo    '<td class="text-center"><button class="btn btn-danger glyphicon glyphicon-trash" onclick="confirmaEliminaUsuario('.$datos.')"></button></td>';
			echo '</tr>';
		}
		echo '</table>';
		$oCon->cerrar_conexion();
	}

	public function guardaPadecimiento($idPadecimiento,$descripcion){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if($idPadecimiento!=0){
			$sql = "update catpadecimientos set descripcion='".$descripcion."' where idPadecimiento = ".$idPadecimiento;
		} else {
			$sql = "insert into catpadecimientos (descripcion) values ('".$descripcion."')";
		}
		echo $sql;
		mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->cerrar_conexion();
	}

}

?>