<?php 
	include("../clases/clsConexion.php");
	$oCon = new clsConexion;
	$oCon->abrir_conexion();
	$bd=$_POST["baseDeDatos"];
	$tables=$_POST["tablas"];

   //get all of the tables
	if($tables == '*'){
		$tables = array();
		$result = mysqli_query($oCon->obtener_conexion(),'SHOW TABLES');
		while($row = mysqli_fetch_row($result)){
			$tables[] = $row[0];
		}
	}
	else{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}

   //cycle through
	$return = "";
	foreach($tables as $table){

		//echo "Respaldando tabla ".$table."</br>";

		$result = mysqli_query($oCon->obtener_conexion(),'SELECT * FROM '.$table);

		$num_fields = mysqli_num_fields($result);

		// $return.= 'DROP TABLE '.$table.';';
		$row2 = mysqli_fetch_row(mysqli_query($oCon->obtener_conexion(),'SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";

		for ($i = 0; $i < $num_fields; $i++){
			while($row = mysqli_fetch_row($result)){
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j<$num_fields; $j++){
					$row[$j] = addslashes($row[$j]);
					// $row[$j] = preg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j<($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}


   	//Guardar archivo
	date_default_timezone_set('America/Mexico_City');
	$rutaArchivo = '../'.$bd.'_'.date('ymd_Hi').'.sql';
	$handle = fopen($rutaArchivo,'w');
	fwrite($handle,$return);
	fclose($handle);


	$nombreArchivo = $bd.'_'.date('ymd_Hi').'.sql';
	$respuesta = '
		<div class="col s12 m6">
			<div class="card blue-grey darken-1">
				<div class="card-content white-text">
					<span class="card-title">Respaldo completado</span>
					<p>Se ha creado el archivo '.$nombreArchivo.'</br>Ahora puede descargarlo en un lugar específico o en una memoria</p>
				</div>
				<div class="card-action">
					<a href="'.$nombreArchivo.'"><i class="material-icons">Descargar archivo</i></a>
				</div>
			</div>
		</div>
	';


	echo $respuesta;
	$oCon->cerrar_conexion();
 ?>