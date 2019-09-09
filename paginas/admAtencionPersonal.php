<?php 
	if(!isset($_SESSION)){
		@session_start();
	}
include_once("../clases/funciones.php");
include_once("./clases/clsPaciente.php");
include_once("./clases/clsPadecimiento.php");

$oPac = new clsPaciente();
$oPadec = new clsPadecimiento();

$idPaciente = $_GET["idPac"];
$idExpediente = $_GET["idExp"];

$oPac->obtenerDatosDelPaciente($idPaciente);
$oPac->obtenerDatosDeConsulta($idExpediente);

$nombreCompleto = $oPac->getNombre()." ".$oPac->getApellidoPaterno()." ".$oPac->getApellidoMaterno();
?>

	<div class="row">
		<div class="col-md-5">
			<div class="card border-success">
				<div class="card-body">
					<div class="card-header"><strong>Paciente: </strong><?php echo $nombreCompleto; ?></div>
					<table class="table table-striped table-sm">
						<tr>
							<td class="table-success">Número Seguro social</td>
							<td><?php echo $oPac->getNss(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Departamento</td>
							<td><?php echo $oPac->getNombreDepartamento(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Edad</td>
							<td><?php echo $oPac->getEdad(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Sexo</td>
							<td><?php echo $oPac->getSexo(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Tipo sanguíneo</td>
							<td><?php echo $oPac->getTipoSanguineo(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Alergias</td>
							<td><?php echo $oPac->getAlergias(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Anteced. pat. familiares</td>
							<td><?php echo $oPac->getAntPatFam(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Anteced. pat. personales</td>
							<td><?php echo $oPac->getAntPatPer(); ?></td>
						</tr>
						<tr>
							<td class="table-success">Es diabético(a)</td>
							<td <?php echo ($oPac->getEsDiabetico()==1?'class="danger"':''); ?>><?php echo ($oPac->getEsDiabetico()==1?'Si':'No'); ?></td>
						</tr>
						<tr>
							<td class="table-success">Es hipertenso(a)</td>
							<td <?php echo ($oPac->getEsHipertenso()==1?'class="danger"':''); ?>><?php echo ($oPac->getEsHipertenso()==1?'Si':'No'); ?></td>
						</tr>
						<tr>
							<td class="table-success">Es Dislipidémico(a)</td>
							<td <?php echo ($oPac->getEsDislipidemico()==1?'class="danger"':''); ?>><?php echo ($oPac->getEsDislipidemico()==1?'Si':'No'); ?></td>
						</tr>
						<tr>
							<td class="table-success">Motivo de consulta</td>
							<td class=""><strong><?php echo $oPac->getMotivoDeConsulta(); ?></strong></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<div class="col-md-7">
			<form class="form-horizontal" id="frmAtencion">
				<fieldset>

					<!-- Form Name -->
					<!-- <legend>Otros datos</legend> -->
					<div class="card border-dark">
						<div class="card-header">Atención personal del <?php echo $oPac->getFechaDeConsulta().' '.$oPac->getHoraDeConsulta(); ?></div>

						<div class="form-group row invisible">
							<label class="col-md-3 control-label" for="txtIdExpediente">Id expediente:</label>  
							<div class="col-md-2">
								<input id="txtIdExpediente" name="txtIdExpediente" type="number" placeholder="" class="form-control input-md" value="<?php echo $idExpediente; ?>" readonly>
							</div>
						</div>


						<div class="form-group row">
							<label class="col-md-3 control-label" for="txtAtendidoPor">Atendido(a) por:</label>  
							<div class="col-md-8">
								<?php 
									if($oPac->getAtendidoPor()==""){ ?>
										<input id="txtAtendidoPor" name="txtAtendidoPor" type="" placeholder="" class="form-control input-md" value="<?php echo $_SESSION['nombreUsuario']; ?>" readonly> 
									<?php } else { ?>
										<input id="txtAtendidoPor" name="txtAtendidoPor" type="" placeholder="" class="form-control input-md" value="<?php echo trim($oPac->getAtendidoPor()); ?>" readonly>
									<?php }
								 ?>
							</div>
						</div>

						<!-- Textarea -->
						<div class="form-group row">
							<label class="col-md-3 control-label" for="txtDiagnostico">Dx:</label>
							<div class="col-md-8">                     
								<textarea class="form-control" id="txtDiagnostico" name="txtDiagnostico"><?php echo trim($oPac->getDx()); ?></textarea>
							</div>
						</div>

						<div class="row">
							<div class="card">
								<!-- Text input-->
								<div class="form-group row">
									<label class="col-md-5 control-label" for="txtTa">T.A (mmHg):</label>  
									<div class="col-md-4">
										<input id="txtTa" name="txtTa" type="text" placeholder="" class="form-control input-md" value="<?php echo $oPac->getTa(); ?>">
									</div>
								</div>

								<!-- Text input-->
								<div class="form-group row">
									<label class="col-md-5 control-label" for="txtFc">F.C (p/m):</label>  
									<div class="col-md-4">
										<input id="txtFc" name="txtFc" type="" placeholder="" class="form-control input-md" value="<?php echo $oPac->getFc(); ?>">
									</div>
								</div>

								<!-- Text input-->
								<div class="form-group row">
									<label class="col-md-5 control-label" for="txtTemperatura">Temp. (°C):</label>  
									<div class="col-md-4">
										<input id="txtTemperatura" name="txtTemperatura" type="number" placeholder="" class="form-control input-md" value="<?php echo $oPac->getTemperatura(); ?>">
									</div>
								</div>


								<!-- Text input-->
								<div class="form-group row">
									<label class="col-md-5 control-label" for="txtGlucosa">Glucosa (mg/dL):</label>  
									<div class="col-md-4">
										<input id="txtGlucosa" name="txtGlucosa" type="number" placeholder="" class="form-control input-md" value="<?php echo $oPac->getGlucosa(); ?>">
									</div>
								</div>
							</div>

							<div class="card" style="background: FloralWhite">
								<!-- Text input-->
								<div class="form-group row">
									<label class="col-md-4 control-label" for="txtPeso">Peso (kg):</label>  
									<div class="col-md-5">
										<input id="txtPeso" name="txtPeso" type="number" placeholder="" class="form-control input-md" value="<?php echo $oPac->getPeso(); ?>">
									</div>
								</div>

								<div class="form-group row ">
									<label class="col-md-4 control-label" for="txtTalla">Talla(cm):</label>  
									<div class="col-md-5">
										<input id="txtTalla" name="txtTalla" type="number" placeholder="" class="form-control input-md" value="<?php echo $oPac->getTalla(); ?>">
									</div>
								</div>

								<div class="form-group row ">
									<label class="col-md-4 control-label" for="txtImc">Imc:</label>  
									<div class="col-md-5">
										<input id="txtImc" name="txtImc" type="number" placeholder="" class="form-control input-md" value="<?php echo $oPac->getImc(); ?>" readonly>
									</div>
								</div>

								<div class="form-group row invisible">
									<label class="col-md-4 control-label" for="txtConstanteFcm">Constante p/fmc:</label>  
									<div class="col-md-5">
										<input id="txtConstanteFcm" name="txtConstanteFcm" type="number" placeholder="" class="form-control input-md" value="<?php if($oPac->getSexo()=='Masculino'){ echo 220;} else {echo 226;}?>" readonly>
									</div>
								</div>

								<div class="form-group row invisible">
									<label class="col-md-4 control-label" for="txtEdad">Edad:</label>  
									<div class="col-md-5">
										<input id="txtEdad" name="txtEdad" type="number" placeholder="" class="form-control input-md" value="<?php echo $oPac->getEdad(); ?>" readonly>
									</div>
								</div>

								<div class="form-group row ">
									<label class="col-md-4 control-label" for="txtPorcentajeFcm">% F.C. Sugerida:</label>  
									<div class="col-md-5">
										<input id="txtPorcentajeFcm" name="txtPorcentajeFcm" type="number" placeholder="" class="form-control input-md" min="50" max="100" step="5" value="<?php echo $oPac->getPorcentajeFcm(); ?>">
									</div>
								</div>

								<div class="form-group row ">
									<label class="col-md-4 control-label" for="txtFcm">F.C. Sugerida:</label>
									<div class="col-md-5">
										<input id="txtFcm" name="txtFcm" type="number" placeholder="" class="form-control input-md" value="<?php echo $oPac->getFcm(); ?>" readonly>
									</div>
								</div>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-3 control-label" for="txtTratamiento">Rp.:</label>
							<div class="col-md-8">                     
								<textarea class="form-control" id="txtTratamiento" name="txtTratamiento"><?php echo trim($oPac->getTratamiento());?></textarea>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-3 control-label" for="txtTratamiento">Padecimiento:</label>
							<div class="col-md-8">
								
							<select id="cboPadecimiento" class="form-control">
								<option value="0">Seleccione</option>
								<?php $oPadec->LlenaComboPadecimientos($oPac->getIdPadecimiento()); ?>
							</select>
							</div>
						</div>

						<div class="form-group row">
							<label class="col-md-3 control-label" for="txtNota">Nota:</label>
							<div class="col-md-8">                     
								<textarea class="form-control" id="txtNota" name="txtNota"><?php echo trim($oPac->getNota()); ?></textarea>
							</div>
						</div>

						<!-- Button -->
						<div class="form-group row">
							<label class="col-md-3 control-label" for="btnGuardar"></label>
							<div class="col-md-2">
								<button id="btnGuardar" name="btnGuardar" class="btn btn-outline-success btn-sm" type="button" onclick="guardaAtencionjqry()">Guardar</button>
							</div>
							<div class="col-md-7" id="mensajes"></div>
						</div>
					</div>
				</fieldset>
			</form>
		</div>
	</div>
<div class="row">
	<div class="col-md-12">
		Historial de <?php echo $nombreCompleto; ?>
		<?php $oPac->listaHistorialDeConsultas($idPaciente); ?>
	</div>
</div>
 <a href="./index.php?p=admAtencionMedica"><i>Volver al listado de pacientes</i></a>

<script type="text/javascript">
	$("#txtPeso").change(function(){
		var peso = $("#txtPeso").val();
		var altura = $("#txtTalla").val();

		if($("#txtPeso").val()!="" && $("#txtTalla").val()!=""){
			var alturaMetro = altura/100;
			var alturaCuadrado = alturaMetro * alturaMetro;
			var imc = peso / alturaCuadrado;
			$("#txtImc").val(Math.round(imc*100)/100);
		}
	})
	$("#txtTalla").change(function(){
		var peso = $("#txtPeso").val();
		var altura = $("#txtTalla").val();

		if($("#txtPeso").val()!="" && $("#txtTalla").val()!=""){
			var alturaMetro = altura/100;
			var alturaCuadrado = alturaMetro * alturaMetro;
			var imc = peso / alturaCuadrado;
			$("#txtImc").val(Math.round(imc*100)/100);
		}
	})

	$("#txtPorcentajeFcm").change(function(){
		var porcentaje = $("#txtPorcentajeFcm").val()/100;
		var fcm = parseInt(($("#txtConstanteFcm").val() - $("#txtEdad").val()) * porcentaje);
		$("#txtFcm").val(fcm);
	})

	function guardaAtencionjqry(){
		if($("#txtDiagnostico").val()=="" || $("#txtTratamiento").val()=="" || $("#cboPadecimiento").val()==0){
			$("#mensajes").html("<b>Atención: Debe ingresar DX, RP y Padecimiento</b>");
			return;
		}
		parametros = {
			p_idExpediente : $("#txtIdExpediente").val(),
			p_diagnostico : $("#txtDiagnostico").val(),
			p_ta : $("#txtTa").val(),
			p_fc : $("#txtFc").val(),
			p_temperatura : $("#txtTemperatura").val(),
			p_glucosa : $("#txtGlucosa").val(),
			p_peso : $("#txtPeso").val(),
			p_talla : $("#txtTalla").val(),
			p_imc : $("#txtImc").val(),
			p_porcFcm : $("#txtPorcentajeFcm").val(),
			p_fcm : $("#txtFcm").val(),
			p_tratamiento : $("#txtTratamiento").val(),
			p_idPadecimiento : $("#cboPadecimiento").val(),
			p_atendidoPor : $("#txtAtendidoPor").val(),
			p_nota : $("#txtNota").val()
		}

		$.ajax({
			data : parametros,
			url : "procesos/admGuardaAtencion.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){
				location.reload();
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		})
	}

	function imprimirReceta(idExp){
		// console.log(idExp);

		var idExpediente = idExp;
		var pagina = "paginas/rptRecetaPdf.php?exp="+idExpediente;

		if (idExp!=""){
			Abrir_ventana(pagina);
		}
	}

	function imprimirDatosConsulta(idExp){
		// console.log(idExp);

		var idExpediente = idExp;
		var pagina = "paginas/rptDatosConsultaPdf.php?exp="+idExpediente;

		if (idExp!=""){
			Abrir_ventana(pagina);
		}
	}	
</script>