<?php 
include_once 'clsConexion.php';
include_once 'funciones.php';
//include("../tree.php");
class clsPaciente{
	private $pacIdPaciente;
	private $pacNombre;
	private $pacApPater;
	private $pacApMater;
	private $pacFechaNacim;
	private $pacEdad;
	private $pacSexo;
	private $pacTipoSanguineo;
	private $pacAlergias;
	private $pacAntPatFam;
	private $pacAntPatPer;
	private $pacCelular;
	private $pacContacto;
	private $pacCorreo;
	private $pacIdDepartamento;
	private $pacNombreDepartamento;
	private $pacEsDiabetico;
	private $pacEsHipertenso;
	private $pacEsDislipidemico;
	private $pacNss;

	private $expIdExpediente;
	private $expMotivoDeConsulta;
	private $expFecha;
	private $expHora;
	private $expDx;
	private $expTa;
	private $expFc;
	private $expTemp;
	private $expPeso;
	private $expImc;
	private $porcentajeFcm;
	private $fcm;
	private $expTalla;
	private $expGlucosa;
	private $expTratamiento;
	private $expIdPadecimiento;
	private $expIdMedicamento;
	private $expAtendidoPor;
	private $expEstado;
	private $expNombreCompleto;
	private $expNota;

	public function setIdPaciente($idPac){$this->pacIdPaciente=$idpac;}
	public function getIdPaciente(){return $this->pacIdPaciente;}

	public function setNombre($nom){$this->pacNombre=$nom;}
	public function getNombre(){return $this->pacNombre;}

	public function setApellidoPaterno($apPat){$this->pacApPater=$apPat;}
	public function getApellidoPaterno(){return $this->pacApPater;}

	public function setApellidoMaterno($apMat){$this->pacApMater=$apMat;}
	public function getApellidoMaterno(){return $this->pacApMater;}	

	public function setNombreCompletoReceta($nomc){$this->expNombreCompleto = $nomc;}
	public function getNombreCompletoReceta(){return $this->expNombreCompleto;}

	public function setFechaDeNacimiento($fec){$this->pacFechaNacim=$fec;}
	public function getFechaDeNacimiento(){return $this->pacFechaNacim;}

	public function setEdad($ed){$this->pacEdad = $ed;}
	public function getEdad(){return $this->pacEdad;}

	public function setSexo($sexo){$this->pacSexo=$sexo;}
	public function getSexo(){return $this->pacSexo;}

	public function setTipoSanguineo($tipo){$this->pacTipoSanguineo=$tipo;}
	public function getTipoSanguineo(){return $this->pacTipoSanguineo;}

	public function setAlergias($aler){$this->pacAlergias=$aler;}
	public function getAlergias(){return $this->pacAlergias;}

	public function setAntPatFam($apf){$this->pacAntPatFam=$apf;}
	public function getAntPatFam(){return $this->pacAntPatFam;}

	public function setAntPatPer($app){$this->pacAntPatPer=$app;}
	public function getAntPatPer(){return $this->pacAntPatPer;}

	public function setCelular($cel){$this->pacCelular=$cel;}
	public function getCelular(){return $this->pacCelular;}

	public function setContacto($con){$this->pacContacto=$con;}
	public function getContacto(){return $this->pacContacto;}

	public function setCorreo($co){$this->pacCorreo=$co;}
	public function getCorreo(){return $this->pacCorreo;}

	public function setIdDepartamento($idDep){$this->pacIdDepartamento=$idDep;}
	public function getIdDepartamento(){return $this->pacIdDepartamento;}

	public function setNombreDepartamento($nomDep){$this->pacNombreDepartamento=$nomDep;}
	public function getNombreDepartamento(){return $this->pacNombreDepartamento;}


	public function setMotivoDeconsulta($mot){$this->expMotivoDeConsulta = $mot;}
	public function getMotivoDeConsulta(){return $this->expMotivoDeConsulta;}

	public function setFechaDeConsulta($fec){$this->expFecha=$fec;}
	public function getFechaDeConsulta(){return $this->expFecha;}

	public function setHoraDeConsulta($ho){$this->expHora=$ho;}
	public function getHoraDeConsulta(){return $this->expHora;}

	public function setDx($dx){$this->expDx=$dx;}
	public function getDx(){return $this->expDx;}

	public function setTa($ta){$this->expTa=$ta;}
	public function getTa(){return $this->expTa;}

	public function setFc($fc){$this->expFc=$fc;}
	public function getFc(){return $this->expFc;}

	public function setTemperatura($temp){$this->expTemp=$temp;}
	public function getTemperatura(){return $this->expTemp;}

	public function setPeso($peso){$this->expPeso=$peso;}
	public function getPeso(){return $this->expPeso;}

	public function setTalla($talla){$this->expTalla=$talla;}
	public function getTalla(){return $this->expTalla;}

	public function setImc($imc){$this->expImc=$imc;}
	public function getImc(){return $this->expImc;}

	public function setPorcentajeFcm($pfcm){$this->porcentajeFcm=$pfcm;}
	public function getPorcentajeFcm(){return $this->porcentajeFcm;}

	public function setFcm($vfcm){$this->fcm=$vfcm;}
	public function getFcm(){return $this->fcm;}

	public function setGlucosa($glu){$this->expGlucosa=$glu;}
	public function getGlucosa(){return $this->expGlucosa;}

	public function setTratamiento($trat){$this->expTratamiento = $trat;}
	public function getTratamiento(){return $this->expTratamiento;}

	public function setIdPadecimiento($idPad){$this->expIdPadecimiento=$idPad;}
	public function getIdPadecimiento(){return $this->expIdPadecimiento;}

	public function setIdMedicamento($idMed){$this->expIdMedicamento=$idMed;}
	public function getIdMedicamento(){return $this->expIdMedicamento;}

	public function setAtendidoPor($atn){$this->expAtendidoPor=$atn;}
	public function getAtendidoPor(){return $this->expAtendidoPor;}

	public function setEsDiabetico($dm){$this->pacEsDiabetico = $dm;}
	public function getEsDiabetico(){return $this->pacEsDiabetico;}

	public function setEsHipertenso($hta){$this->pacEsHipertenso=$hta;}
	public function getEsHipertenso(){return $this->pacEsHipertenso;}

	public function setEsDislipidemico($dsp){$this->pacEsDislipidemico=$dsp;}
	public function getEsDislipidemico(){return $this->pacEsDislipidemico;}

	public function setNota($n){$this->expNota=$n;}
	public function getNota(){return $this->expNota;}

	public function setNss($nss){$this->pacNss=$nss;}
	public function getNss(){return $this->pacNss;}



	public function listaDePacientes(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select p.idPaciente, p.nombre, p.apPaterno, p.apMaterno, count(e.idPaciente) as consultas, date_format(p.fechaDeNacimiento,'%Y-%m-%d') as fechaDeNacimiento, TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad, p.sexo, if(p.sexo='Masculino',220,226) as constanteFcm, p.tipoSanguineo, p.alergias, p.antPatFam, p.antPatPer, p.celular, p.contacto, p.correo, p.idDepartamento , d.nombreDepartamento, p.esDiabetico, p.esHipertenso, p.esDislipidemico, p.numeroSeguroSocial from paciente p left join catdepartamentos d on p.idDepartamento = d.idDepartamento left join expediente e on p.idPaciente = e.idPaciente group by p.idPaciente order by p.apPaterno, p.apMaterno, p.nombre";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		echo '<table class="table table-hover table-striped table-sm">';
		echo '<thead>';
		echo '<tr>';
		echo 	'<th>Paciente</th>';
		echo 	'<th>Departamento</th>';
		echo 	'<th class="text-center">Consultas</th>';
		echo 	'<th class="text-center">Edición</th>';
		echo 	'<th class="text-center">Consulta</th>';
		echo 	'<th class="text-center">Eliminar</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while ($admusuarios=mysqli_fetch_assoc($resultadoQry)){
			$datos="'".
			$admusuarios["idPaciente"]."||".
			$admusuarios["nombre"]."||".
			$admusuarios["apPaterno"]."||".
			$admusuarios["apMaterno"]."||".
			$admusuarios["sexo"]."||".
			$admusuarios["tipoSanguineo"]."||".
			$admusuarios["alergias"]."||".
			$admusuarios["antPatFam"]."||".
			$admusuarios["antPatPer"]."||".
			$admusuarios["celular"]."||".
			$admusuarios["correo"]."||".
			$admusuarios["idDepartamento"]."||".
			$admusuarios["fechaDeNacimiento"]."||".
			$admusuarios["esDiabetico"]."||".
			$admusuarios["esHipertenso"]."||".
			$admusuarios["esDislipidemico"]."||".
			$admusuarios["edad"]."||".
			$admusuarios["constanteFcm"]."||".
			$admusuarios["contacto"]."||".
			$admusuarios["numeroSeguroSocial"]."'";

			$paciente = $admusuarios["apPaterno"].' '.$admusuarios["apMaterno"].' '.$admusuarios["nombre"];
			echo '<tr class="paciente">';
			echo 	'<td><span class=" grpUsuarios">'.$paciente.'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admusuarios["nombreDepartamento"].'</span></td>';
			echo 	'<td class="text-center"><span class=" grpUsuarios">'.$admusuarios["consultas"].'</span></td>';
			echo    '<td class="text-center"><button class="btn btn-outline-dark" data-toggle="modal" data-target="#modalEditaPaciente" onclick="agregaDatosAlForm('.$datos.')"><i class=" fa fa-pencil-alt"></i></button></td>';
			echo    '<td class="text-center"><button class="btn btn-outline-success" data-toggle="modal" data-target="#modalConsulta" onclick="agregaDatosAlFormConsulta('.$datos.')"><i class=" far fa-clock"></i></button></td>';
			if($admusuarios["consultas"]==0){
				echo    '<td class="text-center"><button class="btn btn-outline-danger" onclick="eliminaPacienteJqry('.$datos.')"><i class=" far fa-trash-alt"></i></button></td>';
			} else {
				echo    '<td></td>';
			}
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}


	public function listaDePacientesSeguroSocial(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select p.idPaciente, p.nombre, p.apPaterno, p.apMaterno, count(e.idPaciente) as consultas, date_format(p.fechaDeNacimiento,'%Y-%m-%d') as fechaDeNacimiento, TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad, p.sexo, if(p.sexo='Masculino',220,226) as constanteFcm, p.tipoSanguineo, p.alergias, p.antPatFam, p.antPatPer, p.celular, p.contacto, p.correo, p.idDepartamento , d.nombreDepartamento, p.esDiabetico, p.esHipertenso, p.esDislipidemico, p.numeroSeguroSocial from paciente p left join catdepartamentos d on p.idDepartamento = d.idDepartamento left join expediente e on p.idPaciente = e.idPaciente group by p.idPaciente order by p.apPaterno, p.apMaterno, p.nombre";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		echo '<table class="table table-hover table-striped table-sm">';
		echo '<thead>';
		echo '<tr>';
		echo 	'<th>Paciente</th>';
		echo 	'<th>Departamento</th>';
		echo 	'<th class="text-center">No. Seguro social</th>';
		echo '</tr>';
		echo '</thead>';
		echo '<tbody>';
		while ($admusuarios=mysqli_fetch_assoc($resultadoQry)){
			$datos="'".
			$admusuarios["idPaciente"]."||".
			$admusuarios["nombre"]."||".
			$admusuarios["apPaterno"]."||".
			$admusuarios["apMaterno"]."||".
			$admusuarios["sexo"]."||".
			$admusuarios["tipoSanguineo"]."||".
			$admusuarios["alergias"]."||".
			$admusuarios["antPatFam"]."||".
			$admusuarios["antPatPer"]."||".
			$admusuarios["celular"]."||".
			$admusuarios["correo"]."||".
			$admusuarios["idDepartamento"]."||".
			$admusuarios["fechaDeNacimiento"]."||".
			$admusuarios["esDiabetico"]."||".
			$admusuarios["esHipertenso"]."||".
			$admusuarios["esDislipidemico"]."||".
			$admusuarios["edad"]."||".
			$admusuarios["constanteFcm"]."||".
			$admusuarios["contacto"]."'";

			$paciente = $admusuarios["apPaterno"].' '.$admusuarios["apMaterno"].' '.$admusuarios["nombre"];
			echo '<tr class="paciente">';
			echo 	'<td><span class=" grpUsuarios">'.$paciente.'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admusuarios["nombreDepartamento"].'</span></td>';
			echo 	'<td><input type="text" name="" id="txtNSS'.$admusuarios["idPaciente"].'" placeholder="NSS" class="form-control input" value="'.$admusuarios["numeroSeguroSocial"].'" onblur="guardaNSS('.$datos.')"></td>';
			echo '</tr>';
		}
		echo '</tbody>';
		echo '</table>';
	}

	public function guardaPaciente($idPaciente,$nombre,$apPat,$apMat,$fecNac,$sexo,$tipoSang,$alergias,$apf,$app,$celular,$contacto,$correo,$idDep,$esDiabetico,$esHipertenso,$esDislipidemico,$nss){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if($idPaciente!=0){
			$sql = "update paciente set nombre='".$nombre."', apPaterno = '".$apPat."', apMaterno = '".$apMat."', sexo = '".$sexo."', fechaDeNacimiento = '".$fecNac."', tipoSanguineo = '".$tipoSang."', alergias = '".$alergias."', antPatFam = '".$apf."', antPatPer = '".$app."', celular = '".$celular."', contacto = '".$contacto."', correo = '".$correo."', idDepartamento = ".$idDep.", esDiabetico = ".$esDiabetico.", esHipertenso = ".$esHipertenso.", esDislipidemico = ".$esDislipidemico.", numeroSeguroSocial='".$nss."'  where idPaciente = ".$idPaciente;
		} else {
			$sql = "insert into paciente (nombre,apPaterno,apMaterno,fechaDeNacimiento,sexo,tipoSanguineo,alergias,antPatFam,antPatPer,celular,contacto,correo,idDepartamento,esDiabetico,esHipertenso,esDislipidemico,numeroSeguroSocial) values ('".$nombre."','".$apPat."','".$apMat."','".$fecNac."','".$sexo."','".$tipoSang."','".$alergias."','".$apf."','".$app."','".$celular."','".$contacto."','".$correo."',".$idDep.",".$esDiabetico.",".$esHipertenso.",".$esDislipidemico.",'".$nss."')";
			//echo $sql;
			if($this->existePaciente($nombre,$apPat,$apMat)){
				return;
			}
		}
		//echo $sql;
		mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->cerrar_conexion();
	}

	public function guardaNss($idPaciente,$nss){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql = "update paciente set numeroSeguroSocial='".$nss."' where idPaciente = ".$idPaciente;		
		mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->cerrar_conexion();
	}

	private function existePaciente($nombre,$apPat,$apMat){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$busca = "select * from paciente where nombre ='".$nombre."' and apPaterno = '".$apPat."' and apMaterno='".$apMat."'";
		$sql = mysqli_query($oCon->obtener_conexion(),$busca);
		$filas = mysqli_num_rows($sql);
		if ($filas>0){
			return true;
		} else {
			return false;
		}
		$oCon->cerrar_conexion();
	}

	public function eliminaPaciente($idPaciente){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql1="delete from paciente where idPaciente=".$idPaciente;
		mysqli_query($oCon->obtener_conexion(),$sql1);
		$oCon->cerrar_conexion();
	}

	public function listaDeConsultasPendientes(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select e.idExpediente,p.nombre,p.apPaterno,p.apMaterno, d.nombreDepartamento, date_format(e.fecha,'%d/%m/%Y %l:%i %p') as fecha,convert(e.motivoDeConsulta,char(250)) as motivoDeConsulta,p.idPaciente from expediente e left join paciente p on e.idPaciente = p.idPaciente left join catdepartamentos d on p.idDepartamento = d.idDepartamento where estado = 'Pendiente'";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		// echo '<table class="table table-responsive table-hover table-condensed table-striped">';
		echo '<table class="table table-hover table-striped table-sm">';
		echo '<tr>';
		echo 	'<th>Paciente</th>';
		echo 	'<th>Departamento</th>';
		echo 	'<th>Fecha/hora de registro</th>';
		echo 	'<th>Motivo de consulta</th>';
		echo 	'<th class="text-center">Cancelar</th>';
		//echo 	'<th class="text-center">Permisos</th>';
		//echo 	'<th class="text-center">Eliminar</th>';
		echo '</tr>';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			$paciente = $admExp["apPaterno"].' '.$admExp["apMaterno"].' '.$admExp["nombre"];

			$datos="'".
			$admExp["idExpediente"]."||".
			$paciente."||".
			$admExp["idPaciente"]."'";

			echo '<tr class="paciente">';
			echo 	'<td><span class=" grpUsuarios">'.$paciente.'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["nombreDepartamento"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["fecha"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["motivoDeConsulta"].'</span></td>';
			echo    '<td class="text-center"><button class="btn btn-outline-danger" onclick="confirmaCancelarConsulta('.$datos.')"><i class="far fa-trash-alt"></i></button></td>';
			//echo    '<td class="text-center"><button class="btn btn-warning glyphicon glyphicon-list" data-toggle="modal" data-target="#modalOpcionies" onclick="agregaDatosAlFormOpciones('.$datos.')"></button></td>';
			//echo    '<td class="text-center"><button class="btn btn-danger glyphicon glyphicon-trash" onclick="confirmaEliminaUsuario('.$datos.')"></button></td>';
			echo '</tr>';
		}
		echo '</table>';
		$oCon->cerrar_conexion();
	}

	public function guardaConsulta($idPaciente,$motivo,$ta,$fc,$temp,$glucosa,$peso,$talla,$sexo,$edad,$imc,$porcFcm,$fcm){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql1 = "select idExpediente,fecha,idPaciente,timestampdiff(minute,fecha,now()) as diferencia from expediente where idPaciente = ".$idPaciente." order by idExpediente desc limit 1";
		$res1 = mysqli_query($oCon->obtener_conexion(),$sql1);
		$numFilas = mysqli_num_rows($res1);
		$fila = mysqli_fetch_row($res1);
		$minutos = $fila[3];
		if($numFilas>0){
			if($minutos<60){
				echo "No se puede hasta que pasen 120 minutos; apenas van ".$minutos;
				return;
			}
		}

		// /* CÁLCULO DE IMC */
		// $valPeso = (double) $peso;
		// $valAltura = (double) $talla;
		// $imc=0;

		// if($valPeso!=0 && $valAltura!=0){
		// 	$valAlturaMetro = $valAltura/100;
		// 	$valAlturaCuadrado = $valAlturaMetro * $valAlturaMetro;
		// 	$imc = $valPeso / $valAlturaCuadrado;
		// }


		// /* CÁLCULO DE FCM */
		// $const=0;
		// $porcentaje = 1;
		// if($sexo=='Masculino'){ $const=220;} else {$const=226;}
		// $fcm = ($const - $edad) * $porcentaje;

		$sql = "insert into expediente (motivoDeConsulta,fecha,idPaciente,estado,ta,fc,temp,glucosa,peso,talla,imc,porcFcm,fcm) values ('".$motivo."', now(), ".$idPaciente.",'Pendiente','".$ta."','".$fc."','".$temp."','".$glucosa."',".$peso.",".$talla.",".$imc.",".$porcFcm.",".$fcm.")";
		echo $sql."</br>";
		echo mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->cerrar_conexion();
	}

	public function cancelaConsulta($idExpediente){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		//$sql = "update expediente set estado = 'Cancelado' where idExpediente = ".$idExpediente;
		$sql = "delete from expediente where idExpediente = ".$idExpediente;
		mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->cerrar_conexion();
	}


	public function listaDeConsultasPendientesMedico(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select e.idExpediente,p.nombre,p.apPaterno,p.apMaterno, d.nombreDepartamento, date_format(e.fecha,'%d/%m/%Y %l:%i %p') as fecha,convert(e.motivoDeConsulta,char(250)) as motivoDeConsulta,p.idPaciente from expediente e left join paciente p on e.idPaciente = p.idPaciente left join catdepartamentos d on p.idDepartamento = d.idDepartamento where estado = 'Pendiente'";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		// echo '<table class="table table-responsive table-hover table-condensed table-striped">';
		echo '<table class="table  table-striped table-sm">';
		echo '<tr>';
		echo 	'<th>Paciente</th>';
		echo 	'<th>Departamento</th>';
		echo 	'<th>Fecha/hora de registro</th>';
		echo 	'<th>Motivo de consulta</th>';
		//echo 	'<th class="text-center">Atender</th>';
		//echo 	'<th class="text-center">Permisos</th>';
		//echo 	'<th class="text-center">Eliminar</th>';
		echo '</tr>';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			$paciente = $admExp["apPaterno"].' '.$admExp["apMaterno"].' '.$admExp["nombre"];

			$datos="'".
			$admExp["idExpediente"]."||".
			$paciente."||".
			$admExp["idPaciente"]."'";

			echo '<tr class="paciente">';
			echo 	'<td><span ><a class="list-group-item list-group-item-secondary" href=./index.php?p=atencion&idPac='.$admExp["idPaciente"].'&idExp='.$admExp["idExpediente"].'>'.$paciente.'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["nombreDepartamento"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["fecha"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["motivoDeConsulta"].'</span></td>';
			//echo    '<td class="text-center"><button class="btn btn-default glyphicon glyphicon-pencil" onclick="confirmaCancelarConsulta('.$datos.')"></button></td>';

			echo '</tr>';
		}
		echo '</table>';
		$oCon->cerrar_conexion();
	}

	public function obtenerDatosDelPaciente($parIdPaciente){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$strSql="
		SELECT 
			p.idPaciente,
			p.nombre,
			p.apPaterno,
			p.apMaterno,
			date_format(p.fechaDeNacimiento,'%d-%m-%Y') AS fechaDeNacimiento,
			TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad,
			p.sexo, 
			p.tipoSanguineo, 
			p.alergias, 
			p.antPatFam, 
			p.antPatPer, 
			p.celular, 
			p.contacto, 
			p.correo, 
			d.nombreDepartamento, 
			p.esDiabetico, 
			p.esHipertenso, 
			p.esDislipidemico,
			p.numeroSeguroSocial 
		FROM 
			paciente p LEFT JOIN catdepartamentos d ON p.idDepartamento = d.idDepartamento 
		WHERE 
			idPaciente = ".$parIdPaciente;

		//echo $strSql;

		$qry = mysqli_query($oCon->obtener_conexion(),$strSql);

		while($datPaciente = mysqli_fetch_assoc($qry)){
			$this->setIdPaciente($datPaciente["idPaciente"]);
			$this->setNombre($datPaciente["nombre"]);
			$this->setApellidoPaterno($datPaciente["apPaterno"]);
			$this->setApellidoMaterno($datPaciente["apMaterno"]);
			$this->setFechaDeNacimiento($datPaciente["fechaDeNacimiento"]);
			$this->setEdad($datPaciente["edad"]);
			$this->setSexo($datPaciente["sexo"]);
			$this->setTipoSanguineo($datPaciente["tipoSanguineo"]);
			$this->setAlergias($datPaciente["alergias"]);
			$this->setAntPatFam($datPaciente["antPatFam"]);
			$this->setAntPatPer($datPaciente["antPatPer"]);
			$this->setCelular($datPaciente["celular"]);
			$this->setContacto($datPaciente["contacto"]);
			$this->setCorreo($datPaciente["correo"]);
			$this->setNombreDepartamento($datPaciente["nombreDepartamento"]);
			$this->setEsDiabetico($datPaciente["esDiabetico"]);
			$this->setEsHipertenso($datPaciente["esHipertenso"]);
			$this->setEsDislipidemico($datPaciente["esDislipidemico"]);
			$this->setNss($datPaciente["numeroSeguroSocial"]);
		}
		$oCon->cerrar_conexion();
	}

	public function obtenerDatosDeConsulta($idExp){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$strSql="
		SELECT 
			e.idExpediente,
			e.motivoDeConsulta,
			date_format(e.fecha,'%d/%m/%Y ') as fecha,
			date_format(e.fecha,'%H:%i ') as hora,
			convert(e.dx,char(2000)) as dx,
			e.ta,
			e.fc,
			e.temp,
			e.peso,
			e.talla,
			e.imc,
			e.porcFcm,
			e.fcm,
			e.glucosa,
			e.tratamiento,
			e.idPaciente,
			e.idPadecimiento,
			e.idMedicamento,
			e.estado, 
			e.atendidoPor, 
			concat(p.nombre,' ',p.apPaterno,' ',p.apMaterno) as nombreCompleto,
			e.nota
		FROM 
			expediente e LEFT JOIN paciente p on e.idPaciente = p.idPaciente 
		WHERE 
			e.idExpediente = ".$idExp;
		/* SELECT 
			e.idExpediente,
			e.motivoDeConsulta,
			date_format(e.fecha,'%d/%m/%Y ') as fecha,
			date_format(e.fecha,'%H:%i ') as hora,
			convert(e.dx,char(2000)) as dx,
			e.ta,
			e.fc,
			e.temp,
			e.peso,
			e.talla,
			e.imc,
			e.porcFcm,
			e.fcm,
			e.glucosa,
			convert(e.tratamiento,char(2000)) as tratamiento,
			e.idPaciente,
			e.idPadecimiento,
			e.idMedicamento,
			e.estado, 
			e.atendidoPor, 
			concat(p.nombre,' ',p.apPaterno,' ',p.apMaterno) as nombreCompleto,
			convert(e.nota,char(2000)) as nota 
		FROM 
			expediente e LEFT JOIN paciente p on e.idPaciente = p.idPaciente 
		WHERE 
			e.idExpediente = ".$idExp;*/

		$qry = mysqli_query($oCon->obtener_conexion(),$strSql);
		while($datExp = mysqli_fetch_assoc($qry)){
			$this->setMotivoDeconsulta($datExp["motivoDeConsulta"]);
			$this->setFechaDeConsulta($datExp["fecha"]);
			$this->setHoraDeConsulta($datExp["hora"]);
			$this->setDx($datExp["dx"]);
			$this->setTa($datExp["ta"]);
			$this->setFc($datExp["fc"]);
			$this->setTemperatura($datExp["temp"]);
			$this->setPeso($datExp["peso"]);
			$this->setTalla($datExp["talla"]);
			$this->setImc($datExp["imc"]);
			$this->setPorcentajeFcm($datExp["porcFcm"]);
			$this->setFcm($datExp["fcm"]);
			$this->setGlucosa($datExp["glucosa"]);
			$this->setTratamiento($datExp["tratamiento"]);
			$this->setIdPadecimiento($datExp["idPadecimiento"]);
			$this->setIdMedicamento($datExp["idMedicamento"]);
			$this->setAtendidoPor($datExp["atendidoPor"]);
			$this->setNombreCompletoReceta($datExp["nombreCompleto"]);
			$this->setNota($datExp["nota"]);
		}
		$oCon->cerrar_conexion();
	}

	public function listaHistorialDeConsultas($idPac){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select e.idExpediente, p.descripcion as padecimiento, date_format(e.fecha,'%d/%m/%Y %l:%i %p') as fecha, convert(e.motivoDeConsulta,char(250)) as motivoDeConsulta, e.dx, e.ta, e.fc, e.temp, e.peso, e.glucosa from expediente e left join catpadecimientos p on e.idPadecimiento = p.idPadecimiento where e.estado = 'Atendido' and e.idPaciente = ".$idPac." order by e.fecha desc";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		// echo '<table class="table table-responsive table-hover table-condensed table-striped">';
		echo '<table class="table table-hover table-striped table-sm">';
		echo '<tr>';
		echo 	'<th>Fecha</th>';
		echo 	'<th>Padecimiento</th>';
		echo 	'<th>T.A</th>';
		echo 	'<th>F.C</th>';
		echo 	'<th>Temp</th>';
		echo 	'<th>Peso</th>';
		echo 	'<th>Glucosa</th>';
		echo 	'<th class="text-center">Receta</th>';
		echo 	'<th class="text-center">Notas</th>';
		echo '</tr>';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			echo '<tr class="paciente">';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["fecha"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["padecimiento"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["ta"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["fc"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["temp"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["peso"].'</span></td>';
			echo 	'<td><span class=" grpUsuarios">'.$admExp["glucosa"].'</span></td>';
			echo    '<td class="text-center"><button class="btn btn-outline-dark" data-toggle="modal" data-target="#modalConsulta" onclick="imprimirReceta('.$admExp["idExpediente"].')"><span class="fa fa-file-medical-alt"></span></button></td>';
			echo    '<td class="text-center"><button class="btn btn-outline-success data-toggle="modal" data-target="#modalConsulta" onclick="imprimirDatosConsulta('.$admExp["idExpediente"].')"><span class="fa fa-notes-medical"/></button></td>';
			echo '</tr>';
		}
		echo '</table>';
		$oCon->cerrar_conexion();
	}

	public function guardaAtencion($idExpediente,$diagnostico,$ta,$fc,$temperatura,$peso,$talla,$imc,$porcFcm,$fcm,$glucosa,$tratamiento,$idPadecimiento,$atendidoPor,$nota){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql = "update expediente set 
		dx = '".$diagnostico."', 
		ta = '".$ta."', 
		fc = '".$fc."', 
		temp = '".$temperatura."', 
		peso = '".$peso."', 
		talla = ".$talla.",
		imc = ".$imc.",
		porcFcm = ".$porcFcm.",
		fcm = ".$fcm.",
		glucosa = '".$glucosa."', 
		tratamiento = '".$tratamiento."',
		estado = 'Atendido', 
		idPadecimiento = ".$idPadecimiento.", 
		atendidoPor = '".$atendidoPor."',
		nota = '".$nota."' 
		where idExpediente = ".$idExpediente;
		//echo $sql;
		mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->cerrar_conexion();
	}

	public function tablaAtencionPorPadecimiento($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT cp.descripcion, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN catpadecimientos cp ON ex.idPadecimiento = cp.idPadecimiento WHERE ex.estado = 'Atendido' AND month(fecha)= month(curdate()) GROUP BY ex.idPadecimiento ORDER BY total DESC";
		} else {
			$sql="SELECT cp.descripcion, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN catpadecimientos cp ON ex.idPadecimiento = cp.idPadecimiento WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' and date(ex.fecha) <= '".$ff."' ) GROUP BY ex.idPadecimiento ORDER BY total DESC";
		}

		$rSuma = mysqli_query($oCon->obtener_conexion(),$sql);
		$GranTot = 0;
		while($dat=mysqli_fetch_assoc($rSuma)){
			$GranTot = $GranTot + $dat["total"];
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
echo '		         <table class="table table-striped table-hover table-sm">
            <tr>
              <th>Enfermedad</th><th class="text text-center">Atenciones</th><th class="text text-center">%</th>
            </tr>';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			//$color = sprintf('#%06X', mt_rand(0, 0xaaaaaa));
		    //echo '<tr style="color: '.$color.'">';
		    $porc = number_format(($admExp["total"]*100)/$GranTot,2);
		    echo '<tr>';
		    echo 	'<td>'.$admExp["descripcion"].'</td><td class="text text-center">'.$admExp["total"].'</td><td class="text text-center">'.$porc.'</td>';
		    echo '</tr>';
		}
		echo '<tr>';
		echo 	'<th>Total</th><th class="text text-center">'.$GranTot.'</th><th class="text text-center">100%</th>';
		echo '</tr>
		</table>';
		$oCon->cerrar_conexion();
	}



	public function tablaAtencionPorSexo($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT pa.sexo, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND month(fecha)= month(curdate()) GROUP BY pa.sexo ORDER BY total desc";
		} else {
			$sql="SELECT pa.sexo, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' and date(ex.fecha) <= '".$ff."') GROUP BY pa.sexo ORDER BY total desc";
		}

		$rSuma = mysqli_query($oCon->obtener_conexion(),$sql);
		$GranTot = 0;
		while($dat=mysqli_fetch_assoc($rSuma)){
			$GranTot = $GranTot + $dat["total"];
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
        echo '<table class="table table-striped table-hover table-sm">
          <tr>
            <th>Sexo</th><th class="text text-center">Atenciones</th><th class="text text-center">%</th>
          </tr>';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			// $color = sprintf('#%06X', mt_rand(0, 0xaaaaaa));
		 //    echo '<tr style="color: '.$color.'">';
			$porc = number_format(($admExp["total"]*100)/$GranTot,2);
		    echo '<tr>';
		    echo 	'<td>'.$admExp["sexo"].'</td><td class="text text-center">'.$admExp["total"].'</td><td class="text text-center">'.$porc.'</td>';
		    echo '</tr>';
		}
		echo '<tr>';
		echo 	'<th>Total</th><th class="text text-center">'.$GranTot.'</th><th class="text text-center">100%</th>';
		echo '</tr>
				</table>';
		$oCon->cerrar_conexion();
	}

	public function tablaAtencionPorDepartamento($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT de.nombreDepartamento, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente LEFT JOIN catdepartamentos de ON pa.idDepartamento = de.idDepartamento WHERE ex.estado = 'Atendido' AND month(fecha)= month(curdate()) GROUP BY de.nombreDepartamento ORDER BY total desc, de.nombreDepartamento ";
		} else {
			$sql="SELECT de.nombreDepartamento, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente LEFT JOIN catdepartamentos de ON pa.idDepartamento = de.idDepartamento WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' AND date(ex.fecha) <= '".$ff."' ) GROUP BY de.nombreDepartamento ORDER BY total desc, de.nombreDepartamento ";
		}


		$rSuma = mysqli_query($oCon->obtener_conexion(),$sql);
		$GranTot = 0;
		while($dat=mysqli_fetch_assoc($rSuma)){
			$GranTot = $GranTot + $dat["total"];
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		echo '<table class="table table-striped table-hover table-sm">
          <tr>
            <th>Departamento</th><th class="text text-center">Atenciones</th><th class="text text-center">%</th>
          </tr>';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			// $color = sprintf('#%06X', mt_rand(0, 0xaaaaaa));
		 //    echo '<tr style="color: '.$color.'">';
			$porc = number_format(($admExp["total"]*100)/$GranTot,2);
		    echo '<tr>';
		    echo 	'<td>'.$admExp["nombreDepartamento"].'</td><td class="text text-center">'.$admExp["total"].'</td><td class="text text-center">'.$porc.'</td>';
		    echo '</tr>';
		}
		echo '<tr>';
		echo 	'<th>Total</th><th class="text text-center">'.$GranTot.'</th><th class="text text-center">100%</th>';
		echo '</tr>
		</table>';
		$oCon->cerrar_conexion();
	}

	public function tablaAtencionPorEdades($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT TIMESTAMPDIFF(YEAR, pa.fechaDeNacimiento, CURDATE()) AS edad, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND month(ex.fecha)= month(curdate()) GROUP BY edad ORDER BY edad desc";
		} else {
			$sql="SELECT TIMESTAMPDIFF(YEAR, pa.fechaDeNacimiento, CURDATE()) AS edad, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' and date(ex.fecha) <= '".$ff."') GROUP BY edad ORDER BY edad desc";
		}


		$rSuma = mysqli_query($oCon->obtener_conexion(),$sql);
		$GranTot = 0;
		while($dat=mysqli_fetch_assoc($rSuma)){
			$GranTot = $GranTot + $dat["total"];
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		echo '<table class="table table-striped table-hover table-sm">
            <tr>
              <th>Edad</th><th class="text text-center">Atenciones</th><th class="text text-center">%</th>
            </tr>';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			// $color = sprintf('#%06X', mt_rand(0, 0xaaaaaa));
		 //    echo '<tr style="color: '.$color.'">';
			$porc = number_format(($admExp["total"]*100)/$GranTot,2);
		    echo '<tr>';
		    echo 	'<td>'.$admExp["edad"].'</td><td class="text text-center">'.$admExp["total"].'</td><td class="text text-center">'.$porc.'</td>';
		    echo '</tr>';
		}
		echo '<tr>';
		echo 	'<th>Total</th><th class="text text-center">'.$GranTot.'</th><th class="text text-center">100%</th>';
		echo '</tr>
		</table>';
		$oCon->cerrar_conexion();
	}

	public function qryReporteDeTurno($fecha){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$strQuery = "
			SELECT
				CONCAT(p.apPaterno,' ',p.apMaterno,' ',p.nombre) AS nombre, 
				p.sexo, 
				TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad, 
				d.nombreDepartamento, 
				CONCAT('TA:',e.ta,' FC:',e.fc,' Temp:',e.temp) AS datos, 
				CONVERT(e.dx,char(300)) as dx, 
				TRIM(replace(CONVERT(e.tratamiento,char(300)),'\n',', ')) as rp, 
				e.atendidoPor, 
				DATE_FORMAT(e.fecha,'%H:%i') as hora
			FROM 
				expediente e left join paciente p on e.idPaciente = p.idPaciente left join 
				catdepartamentos d on p.idDepartamento = d.idDepartamento 
			WHERE 
				e.estado = 'Atendido' AND 
				fecha LIKE '".$fecha."%' 
			ORDER BY 
				hora
		";
		return $strQuery;
		$oCon->cerrar_conexion();
	}


	public function qryReporteClubDeSangre($grupoSanguineo){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$strQuery="
		SELECT 
			CONCAT(p.apPaterno,' ',p.apMaterno,' ',p.nombre) AS nombre, 
			p.sexo, 
			d.nombreDepartamento, 
			TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad, 
			IF(esDiabetico=1,'Si','No') AS esDiabetico, 
			IF(esHipertenso=1,'Si','No') AS esHipertenso, 
			IF(esDislipidemico=1,'Si','No') AS esDislipidemico, 
			p.celular AS telefono, 
			p.correo
		FROM 
			paciente p LEFT JOIN catdepartamentos d ON p.idDepartamento = d.idDepartamento 
		WHERE 
			tipoSanguineo like '".$grupoSanguineo."%'
		ORDER BY 
			nombre
		";
		return $strQuery;
		$oCon->cerrar_conexion();
	}


	public function qryReporteCronicoDegenerativos($campo){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$strQuery="
		SELECT 
			CONCAT(p.apPaterno,' ',p.apMaterno,' ',p.nombre) AS nombre, 
			p.sexo, 
			TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad, 
			p.celular,
			p.contacto, 
			p.correo, 
			d.nombreDepartamento 
		FROM 
			paciente p LEFT JOIN catdepartamentos d ON p.idDepartamento = d.idDepartamento 
		WHERE 
			".$campo."=1 
		ORDER BY 
			nombre
		";
		return $strQuery;
		$oCon->cerrar_conexion();
	}

	public function tablaPacientesBuscados($cadenaBuscada){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="SELECT e.idPaciente, CONCAT(p.apPaterno,' ',p.apMaterno,' ',p.nombre) AS nombrePaciente, p.sexo, TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad, d.nombreDepartamento FROM expediente e LEFT JOIN paciente p ON e.idPaciente = p.idPaciente LEFT JOIN catdepartamentos d ON p.idDepartamento = d.idDepartamento WHERE e.estado = 'Atendido' AND (p.apPaterno LIKE '%".$cadenaBuscada."%' OR p.apMaterno LIKE '%".$cadenaBuscada."%' OR p.nombre LIKE '%".$cadenaBuscada."%') GROUP BY p.idPaciente ORDER BY p.apPaterno, p.apMaterno, p.nombre ";
		$filas = mysqli_num_rows(mysqli_query($oCon->obtener_conexion(),$sql));
		if($filas==0){
			echo "<h2>No hay resultados para esta búsqueda</h2>";
			return;
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		// echo '<table class="table table-responsive table-hover table-striped">';
		echo '<table class="table table-hover table-striped table-sm">';
		echo '<tr>';
		echo 	'<th>Nombre</th>';
		echo 	'<th>Sexo</th>';
		echo 	'<th>Edad</th>';
		echo 	'<th>Departamento</th>';
		// echo 	'<th></th>';
		echo '</tr>';
		while ($tabPaciente=mysqli_fetch_assoc($resultadoQry)){
			$datos="'".
			$tabPaciente["idPaciente"]."||".
			$tabPaciente["nombrePaciente"]."'";
		    echo '<tr>';
		    echo 	'<td><span ><a class="list-group-item list-group-item-secondary" href="#" onclick="muestraHistorial('.$datos.')">'.$tabPaciente["nombrePaciente"].'</span></td>';
		    // echo 	'	<td>'.$tabPaciente["nombrePaciente"].'</td>';
		    echo 	'	<td >'.$tabPaciente["sexo"].'</td>';
		    echo 	'	<td >'.$tabPaciente["edad"].'</td>';
		    echo    '	<td >'.$tabPaciente["nombreDepartamento"].'</td>';
			// echo    '	<td class="text-center"><button class="btn btn-default btn-sm" onclick="muestraHistorial('.$datos.')"><span class="fa fa-eye"></span></button></td>';
		    echo '</tr>';
		}
		echo '</table>';
		$oCon->cer;
	}

	

	public function tablaHistorialClinico($idPaciente,$nombrePaciente){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="SELECT e.idExpediente, p.descripcion as padecimiento, date_format(e.fecha,'%d/%m/%Y %l:%i %p') as fecha, convert(e.motivoDeConsulta,char(250)) as motivoDeConsulta, e.dx, e.ta, e.fc, e.temp, e.peso, e.glucosa, e.tratamiento as rp, e.nota, e.atendidoPor from expediente e left join catpadecimientos p on e.idPadecimiento = p.idPadecimiento where e.estado = 'Atendido' and e.idPaciente = ".$idPaciente." order by e.fecha desc";
		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		echo "<h2>Historial clínico de: $nombrePaciente</h2>";
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){ 
			$idHeading = "heading".$admExp["idExpediente"];
			$idCollaps = "collapse".$admExp["idExpediente"];

			echo '<div class="card border-success">';
			echo '	<div class="card-header">';
			echo '		<h5 class="card-title">';
			echo 				$admExp["fecha"];
			echo '		</h5>';
			echo '	</div>';
			echo '		<div class="card-body">';
			echo '			<p>';
			echo '				<strong>Motivo de consulta: </strong>';
			echo 				$admExp["motivoDeConsulta"];
			echo '				<strong>DX: </strong>';
			echo 				$admExp["dx"];
			echo '				<strong>TA: </strong>';
			echo 				$admExp["ta"];
			echo '				<strong>FC: </strong>';
			echo 				$admExp["fc"];
			echo '				<strong>Temperatura: </strong>';
			echo 				$admExp["temp"];
			echo '				<strong>Peso: </strong>';
			echo 				$admExp["peso"];
			echo '				<strong>Glucosa: </strong>';
			echo 				$admExp["glucosa"];
			echo '			</p>';
			echo '			<p>';
			echo '				<strong>Padecimiento: </strong>';
			echo 				$admExp["padecimiento"];
			echo '			</p>';
			echo '			<p>';
			echo '				<strong>RP: </strong>';
			echo 				$admExp["rp"];
			echo '			</p>';
			echo '			<p>';
			echo '				<strong>Nota: </strong>';
			echo 				$admExp["nota"];
			echo '			</p>';
			echo '			<p>';
			echo '				<strong>Atendido(a) por: </strong>';
			echo 				$admExp["atendidoPor"];
			echo '			</p>';
			echo '		</div>';
			echo '</div>';
		}
		echo '</div>';
		$oCon->cerrar_conexion();
	}

	public function dataSetGraficaPorPadecimiento($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT cp.descripcion, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN catpadecimientos cp ON ex.idPadecimiento = cp.idPadecimiento WHERE ex.estado = 'Atendido' AND month(fecha)= month(curdate()) GROUP BY ex.idPadecimiento ORDER BY total DESC";
		} else {
			$sql="SELECT cp.descripcion, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN catpadecimientos cp ON ex.idPadecimiento = cp.idPadecimiento WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' and date(ex.fecha) <= '".$ff."' ) GROUP BY ex.idPadecimiento ORDER BY total DESC";
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		$titulos = '[';
		$valores = '[';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			$titulos = $titulos.'"'.$admExp["descripcion"].'",';
			$valores = $valores.$admExp["total"].",";
		}
		$titulos = substr($titulos,0,-1).']';
		$valores = substr($valores,0,-1).',0]';

		echo $titulos.'||'.$valores;
		$oCon->cerrar_conexion();
	}

	public function dataSetGraficaPorSexo($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT pa.sexo, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND month(fecha)= month(curdate()) GROUP BY pa.sexo ORDER BY total desc";
		} else {
			$sql="SELECT pa.sexo, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' and date(ex.fecha) <= '".$ff."') GROUP BY pa.sexo ORDER BY total desc";
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		$titulos = '[';
		$valores = '[';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			$titulos = $titulos.'"'.$admExp["sexo"].'",';
			$valores = $valores.$admExp["total"].",";
		}
		$titulos = substr($titulos,0,-1).']';
		$valores = substr($valores,0,-1).',0]';

		echo $titulos.'||'.$valores;
		$oCon->cerrar_conexion();
	}

	public function dataSetGraficaPorDepartamento($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT de.nombreDepartamento, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente LEFT JOIN catdepartamentos de ON pa.idDepartamento = de.idDepartamento WHERE ex.estado = 'Atendido' AND month(fecha)= month(curdate()) GROUP BY de.nombreDepartamento ORDER BY total desc, de.nombreDepartamento ";
		} else {
			$sql="SELECT de.nombreDepartamento, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente LEFT JOIN catdepartamentos de ON pa.idDepartamento = de.idDepartamento WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' AND date(ex.fecha) <= '".$ff."' ) GROUP BY de.nombreDepartamento ORDER BY total desc, de.nombreDepartamento ";
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		$titulos = '[';
		$valores = '[';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			$titulos = $titulos.'"'.$admExp["nombreDepartamento"].'",';
			$valores = $valores.$admExp["total"].",";
		}
		$titulos = substr($titulos,0,-1).']';
		$valores = substr($valores,0,-1).',0]';

		echo $titulos.'||'.$valores;
		$oCon->cerrar_conexion();
	}


	public function dataSetGraficaPorEdad($fi="",$ff=""){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		if ($fi==""){
			$sql="SELECT TIMESTAMPDIFF(YEAR, pa.fechaDeNacimiento, CURDATE()) AS edad, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND month(ex.fecha)= month(curdate()) GROUP BY edad ORDER BY total desc";
		} else {
			$sql="SELECT TIMESTAMPDIFF(YEAR, pa.fechaDeNacimiento, CURDATE()) AS edad, count(ex.idExpediente) AS total FROM expediente ex LEFT JOIN paciente pa ON ex.idPaciente = pa.idPaciente WHERE ex.estado = 'Atendido' AND (date(ex.fecha) >= '".$fi."' and date(ex.fecha) <= '".$ff."') GROUP BY edad ORDER BY total desc";
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		$titulos = '[';
		$valores = '[';
		while ($admExp=mysqli_fetch_assoc($resultadoQry)){
			$titulos = $titulos.'"'.$admExp["edad"].'",';
			$valores = $valores.$admExp["total"].",";
		}
		$titulos = substr($titulos,0,-1).']';
		$valores = substr($valores,0,-1).',0]';

		echo $titulos.'||'.$valores;
		$oCon->cerrar_conexion();
	}

	public function tablaTipoDeSangre(){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="select tipoSanguineo, count(tipoSanguineo) as total from paciente where tipoSanguineo<>'' group by tipoSanguineo order by tipoSanguineo ";
		$filas = mysqli_num_rows(mysqli_query($oCon->obtener_conexion(),$oCon->obtener_conexion(),$sql));
		if($filas==0){
			echo "<h2>No hay resultados para esta lista</h2>";
			return;
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		// echo '<table class="table  table-sm">';
		// while ($tabPaciente=mysqli_fetch_assoc($resultadoQry)){
		// 	$datos="'".
		// 	$tabPaciente["idPaciente"]."||".
		// 	$tabPaciente["nombrePaciente"]."'";
		//     echo '<tr>';
		//     echo 	'<td><span><a class="list-group-item list-group-item-danger" href="#" onclick="muestraHistorial('.$datos.')">'.$tabPaciente["tipoSanguineo"].'  <span class="badge badge-light badge-pill">'.$tabPaciente["total"].' Pacientes</span></li></span></td>';
		//     echo '</tr>';
		// }
		// echo '</table>';

		echo '<ul class="list-group">';
		while ($tabPaciente=mysqli_fetch_assoc($resultadoQry)){
			$grupo="'".$tabPaciente["tipoSanguineo"]."'";
			echo '<a class="list-group-item list-group-item-danger" href="#" onclick="muestraListaGrupoSanguineo('.$grupo.')"> <li class="list-group-item d-flex justify-content-between align-items-center">'.$tabPaciente["tipoSanguineo"];
			echo '<span class="badge badge-danger badge-pill">'.$tabPaciente["total"].' Paciente(s)</span>';
			echo '</li></a>';
		}
		echo '<ul/>';
		$oCon->cerrar_conexion();
	}

	public function tablaParaRecuperarConsulta($cadenaBuscada){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql="SELECT e.idPaciente, e.idExpediente, CONCAT(p.apPaterno,' ',p.apMaterno,' ',p.nombre) AS nombrePaciente, date_format(e.fecha,'%d/%m/%Y %l:%i %p') as fecha, e.atendidoPor, p.sexo, TIMESTAMPDIFF(YEAR, p.fechaDeNacimiento, CURDATE()) AS edad, d.nombreDepartamento FROM expediente e LEFT JOIN paciente p ON e.idPaciente = p.idPaciente LEFT JOIN catdepartamentos d ON p.idDepartamento = d.idDepartamento WHERE e.estado = 'Atendido' AND (p.apPaterno LIKE '%".$cadenaBuscada."%' OR p.apMaterno LIKE '%".$cadenaBuscada."%' OR p.nombre LIKE '%".$cadenaBuscada."%')  ORDER BY p.apPaterno, p.apMaterno, p.nombre, e.fecha desc ";
		$filas = mysqli_num_rows(mysqli_query($oCon->obtener_conexion(),$sql));
		if($filas==0){
			echo "<h2>No hay resultados para esta búsqueda</h2>";
			return;
		}

		$resultadoQry = mysqli_query($oCon->obtener_conexion(),$sql);
		// echo '<table class="table table-responsive table-hover table-striped">';
		echo '<table class="table table-hover table-striped table-sm">';
		echo '<tr>';
		echo 	'<th>Nombre</th>';
		echo 	'<th>Fecha</th>';
		echo 	'<th>Atención por</th>';
		echo 	'<th class="text-center">Recupera</th>';
		// echo 	'<th>Sexo</th>';
		// echo 	'<th>Edad</th>';
		// echo 	'<th>Departamento</th>';
		// echo 	'<th></th>';
		echo '</tr>';
		while ($tabPaciente=mysqli_fetch_assoc($resultadoQry)){
			$datos="'".
			$tabPaciente["idExpediente"]."'";

		    echo '<tr>';
		    echo 	'	<td>'.$tabPaciente["nombrePaciente"].'</td>';
		    // echo 	'<td><span ><a class="list-group-item list-group-item-secondary" href="#" onclick="muestraHistorial('.$datos.')">'.$tabPaciente["nombrePaciente"].'</span></td>';
		    echo 	'	<td >'.$tabPaciente["fecha"].'</td>';
		    echo 	'	<td >'.$tabPaciente["atendidoPor"].'</td>';
			echo    '	<td class="text-center"><button class="btn btn-default btn-sm" onclick="mandaRecuperar('.$datos.')"><span class="fa fa-undo"></span></button></td>';
		    // echo 	'	<td >'.$tabPaciente["sexo"].'</td>';
		    // echo 	'	<td >'.$tabPaciente["edad"].'</td>';
		    // echo    '	<td >'.$tabPaciente["nombreDepartamento"].'</td>';
		    echo '</tr>';
		}
		echo '</table>';
		$oCon->cerrar_conexion();
	}

	public function recuperaAtencion($idExpediente,$cadenaBuscada){
		$oCon = new clsConexion;
		$oCon->abrir_conexion();
		$sql = "update expediente set estado = 'Pendiente' where idExpediente = ".$idExpediente;
		//echo $sql;
		mysqli_query($oCon->obtener_conexion(),$sql);
		$oCon->cerrar_conexion();
	}

}

?>