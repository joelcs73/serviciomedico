<?php 
include_once '../clases/clsAdmin.php';
include_once './clases/clsPaciente.php';
include_once './clases/clsDepartamento.php';
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
$oAdm = new clsAdmin();
 ?>

  	<h3>Administración de pacientes</h3>
 	<div class="row">
 		<div class="col-md-12">
 			<?php $oPaciente->listaDePacientes(); ?>
 		</div>
 	</div>
 	
 	<div class="row">
 		<div class="col-md-12">
			<input class="col-md-1 invisible" type="text"  id="txtIdUsuario" placeholder="idUsuario">
			<input class="col-md-1 invisible" type="text"  id="txtIdArea" placeholder="idArea">
 		</div>
 	</div>

 	<!-- <nav class="navbar navbar-light navbar-fixed-bottom"> -->
 	<nav class="navbar navbar-expand-lg navbar-light fixed-bottom bg-light ">
 		<div class="container">
<!--  			<div class="col-sm-11">
	 			<input type="input" class="form-control" id="exampleInputEmail3" placeholder="Buscar">
 			</div> -->
 			<div class="col-md-12 offset-md-11 ">
 				<button type="button" class="btn btn-success btn-sm botn" id="btnAgregar" data-toggle="modal" data-target="#modalNuevoPaciente"><span class="fa fa-plus" aria-hidden="true"></span></button>
 			</div>
 		</div>
 	</nav>

 	<!-- Modal -->
 	<div class="modal fade" id="modalNuevoPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabelNuevo">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
 					<h4 class="modal-title" id="myModalLabelNuevo">Nuevo paciente - campos en rojo son obligatorios</h4>
 				</div>
 				<div class="modal-body">
 					<input type="text" name="" id="txtIdPacienteNvo" class="form-control input invisible">
 					<div class="has-error">
						<label class="has-error">Apellido paterno</label>
						<input type="text" name="" id="txtApPaterNvo" placeholder="Obligatorio" class="form-control input">
 					</div>
					<label>Apellido materno</label>
					<input type="text" name="" id="txtApMaterNvo" class="form-control input">
					<div class="has-error">
						<label>Nombre</label>
						<input type="text" name="" id="txtNombreNvo" placeholder="Obligatorio" class="form-control input">
						
						<label>Fecha de nacimiento (día/mes/año)</label>
						<!-- <input type="text" name="" id="txtFechaDeNacimientoNvo" class="calendario form-control" readonly> -->
						<div class="row">
							<div class="col-md">
								<input type="date" name="" id="txtFechaDeNacimientoNvo" class="form-control" >
							</div>
						</div>


						<label>Sexo</label>
							<select id="cboSexoNvo" class="form-control">
								<option value="0">Seleccione</option>
								<option value="Femenino">Femenino</option>
								<option value="Masculino">Masculino</option>
							</select>
					</div>
					<!-- <label>Tipo sanguíneo</label>
					<select id="cboTipoSanguineoNvo" class="form-control">
						<option value=" ">Opcional</option>
						<option value="A negativo">A negativo</option>
						<option value="A positivo">A positivo</option>
						<option value="B negativo">B negativo</option>
						<option value="B positivo">B positivo</option>
						<option value="AB negativo">AB negativo</option>
						<option value="AB positivo">AB positivo</option>
						<option value="O negativo">O negativo</option>
						<option value="O positivo">O positivo</option>
						<option value="Desconocido">Desconocido</option>
					</select> -->
					<!-- <input type="text" name="" id="txtTipoSanguineoNvo" placeholder="Opcional" class="form-control input"> -->



					<div class="has-error">
						<label>Alergias</label>
						<input type="text" name="" id="txtAlergiasNvo" placeholder="Obligatorio" class="form-control input">
					</div>
					<label>Antecedentes Patológicos Familiares</label>
					<input type="text" name="" id="txtAntPatFamNvo" placeholder="Opcional" class="form-control input">
					<label>Antecedentes Patológicos Personales</label>
					<input type="text" name="" id="txtAntPatPerNvo" placeholder="Opcional" class="form-control input">
					<div class="row">
						<div class="col-md-4">
							<label class="control-label" for="chkEsDiabeticoNvo">Es diabético</label>
							<div class=" material-switch ">
								<input id="chkEsDiabeticoNvo" name="chkEsDiabeticoNvo" type="checkbox"/>
								<label for="chkEsDiabeticoNvo" class="label-success"></label>
							</div>
						</div>

						<div class="col-md-4">
							<label class="control-label" for="chkEsHipertensoNvo">Es hipertenso</label>
							<div class=" material-switch ">
								<input id="chkEsHipertensoNvo" name="chkEsHipertensoNvo" type="checkbox"/>
								<label for="chkEsHipertensoNvo" class="label-success"></label>
							</div>
						</div>

						<div class="col-md-4">
							<label class="control-label" for="chkEsDislipidemicoNvo">Es Dislipidémico</label>
							<div class=" material-switch ">
								<input id="chkEsDislipidemicoNvo" name="chkEsDislipidemicoNvo" type="checkbox"/>
								<label for="chkEsDislipidemicoNvo" class="label-success"></label>
							</div>
						</div>
					</div>
					<div class="has-error">
						<label>Departamento</label>
							<select id="cboDepartamentoNvo" class="form-control">
								<option value="0">Seleccione</option>
								<?php $oDepto->LlenaComboDepartamentos(); ?>
							</select>
					</div>
					<label>Extensión</label>
					<input type="text" name="" id="txtCelularNvo" placeholder="Opcional" class="form-control input">
<!-- 					<label>Contacto</label>
					<input type="text" name="" id="txtContactoNvo" placeholder="Opcional" class="form-control input">
					<label>Correo</label>
					<input type="email" name="" id="txtCorreoNvo" placeholder="Opcional" class="form-control input"> -->
					<label>Número de Seguridad Social</label>
					<input type="number" name="" id="txtNSSNvo" placeholder="Opcional" class="form-control input">

 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 					<button type="button" class="btn btn-primary" onclick="guardaPacienteNuevo()">Guardar</button>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="modal fade " id="modalEditaPaciente" tabindex="-1" role="dialog" aria-labelledby="myModalLabelModifica">
 		<div class="modal-dialog modal-lg" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
 					<h4 class="modal-title" id="myModalLabelModifica">Modificar paciente</h4>
 				</div>
 				<div class="modal-body">
 					<input type="text" name="" id="txtIdPacienteEd" class="form-control input invisible">
 					<div class="has-error">
						<label >Apellido paterno</label>
						<input type="text" name="" id="txtApPaterEd" class="form-control input">
 					</div>
					<label>Apellido materno</label>
					<input type="text" name="" id="txtApMaterEd" class="form-control input">
					<div class="has-error">
						<label>Nombre</label>
						<input type="text" name="" id="txtNombreEd" class="form-control input">
						<label>Fecha de nacimiento (día-mes-año)</label>
						<!-- <input type="text" name="" id="txtFechaDeNacimientoEd" class="calendario form-control" readonly> -->
						<div class="row">
							<div class="col-md">
								<input type="date" name="" id="txtFechaDeNacimientoEd" class="form-control" >
							</div>
						</div>
						<label>Sexo</label>
						<select id="cboSexoEd" class="form-control">
							<option value="0">Seleccione</option>
							<option value="Femenino">Femenino</option>
							<option value="Masculino">Masculino</option>
						</select>
					</div>
<!-- 					<label>Tipo sanguíneo</label>
					<select id="cboTipoSanguineoEd" class="form-control">
						<option value=" ">Opcional</option>
						<option value="A negativo">A negativo</option>
						<option value="A positivo">A positivo</option>
						<option value="B negativo">B negativo</option>
						<option value="B positivo">B positivo</option>
						<option value="AB negativo">AB negativo</option>
						<option value="AB positivo">AB positivo</option>
						<option value="O negativo">O negativo</option>
						<option value="O positivo">O positivo</option>
						<option value="Desconocido">Desconocido</option>
					</select> -->
					<!-- <input type="text" name="" id="txtTipoSanguineoEd" class="form-control input"> -->
					<div class="has-error">
						<label>Alergias</label>
						<input type="text" name="" id="txtAlergiasEd" class="form-control input">
					</div>
					<label>Antecedentes Patológicos Familiares</label>
					<input type="text" name="" id="txtAntPatFamEd" class="form-control input">
					<label>Antecedentes Patológicos Personales</label>
					<input type="text" name="" id="txtAntPatPerEd" class="form-control input">

					<div class="row">
						<div class="col-md-4">
							<label class="control-label" for="chkEsDiabeticoEd">Es diabético(a)</label>
							<div class=" material-switch ">
								<input id="chkEsDiabeticoEd" name="chkEsDiabeticoEd" type="checkbox"/>
								<label for="chkEsDiabeticoEd" class="label-success"></label>
							</div>
						</div>

						<div class="col-md-4">
							<label class="control-label" for="chkEsHipertensoEd">Es hipertenso(a)</label>
							<div class=" material-switch ">
								<input id="chkEsHipertensoEd" name="chkEsHipertensoEd" type="checkbox"/>
								<label for="chkEsHipertensoEd" class="label-success"></label>
							</div>
						</div>

						<div class="col-md-4">
							<label class="control-label" for="chkEsDislipidemicoEd">Es Dislipidémico(a)</label>
							<div class=" material-switch ">
								<input id="chkEsDislipidemicoEd" name="chkEsDislipidemicoEd" type="checkbox"/>
								<label for="chkEsDislipidemicoEd" class="label-success"></label>
							</div>
						</div>
					</div>

					<div class="has-error">
						
						<label>Departamento</label>
						<select id="cboDepartamentoEd" class="form-control">
							<option value="0">Seleccione</option>
							<?php $oDepto->LlenaComboDepartamentos(); ?>
						</select>
					</div>
					<label>Extensión</label>
					<input type="text" name="" id="txtCelularEd" class="form-control input">
<!-- 					<label>Contacto</label>
					<input type="text" name="" id="txtContactoEd" class="form-control input">
					<label>Correo</label>
					<input type="email" name="" id="txtCorreoEd" class="form-control input"> -->
					<label>Número de Seguridad Social</label>
					<input type="number" name="" id="txtNSSEd" class="form-control input">


 				</div>
 				<div class="modal-footer">
 					<label id="mensajes"></label>
 					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 					<button type="button" class="btn btn-primary" onclick="guardaPacientejqry()">Guardar</button>
 				</div>
 			</div>
 		</div>
 	</div>


 	<div class="modal fade " id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="myModalLabelConsulta">
 		<div class="modal-dialog modal-lg" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
 					<h4 class="modal-title" id="myModalLabelConsulta">Nueva consulta</h4>
 				</div>
 				<div class="modal-body">
 					<input type="text" name="" id="txtIdPacienteCons" class="form-control input invisible">
 					<input type="text" name="" id="txtSexo" class="form-control input invisible">
 					<input type="text" name="" id="txtEdad" class="form-control input invisible">
 					<div class="row">
	 					<div class="col-4">
							<label>Apellido paterno</label>
							<input type="text" name="" id="txtApPaterCons" class="form-control input" disabled>
							<label>Apellido materno</label>
							<input type="text" name="" id="txtApMaterCons" class="form-control input" disabled >
							<label>Nombre</label>
							<input type="text" name="" id="txtNombreCons" class="form-control input" disabled>
							<label>Departamento</label>
								<select id="cboDepartamentoCons" class="form-control" disabled>
									<option value="0">Seleccione</option>
									<?php $oDepto->LlenaComboDepartamentos(); ?>
								</select>
		                    <label>Motivo de consulta</label>
							<input type="text" name="" id="txtMotivoCons" placeholder="Descripción detallada" class="form-control input">
	 					</div>

	 					<div class="col-4">
							<label>T.A (mmHg)</label>
							<input type="text" name="" id="txtTa" placeholder="Dato opcional" class="form-control input">
							<label>F.C (p/m)</label>
							<input type="text" name="" id="txtFc" placeholder="Dato opcional" class="form-control input">
							<label>Temp. (°C)</label>
							<input type="number" name="" id="txtTemperatura" placeholder="Dato opcional" class="form-control input">
							<label>Glucosa (mg/dL)</label>
							<input type="number" name="" id="txtGlucosa" placeholder="Dato opcional" class="form-control input">
	 					</div>

						<div class="col-4">
							<label>Peso (kg)</label>
							<input type="number" name="txtPeso" id="txtPeso" placeholder="Dato opcional" class="form-control input" >
							<label>Talla(cm):</label>
							<input type="number" name="txtTalla" id="txtTalla" placeholder="Dato opcional" class="form-control input" >
							<input type="number" name="txtConstanteFcm" id="txtConstanteFcm" placeholder="" class="form-control input invisible"  >
							<label>IMC</label>
							<input type="number" name="txtImc" id="txtImc" placeholder="" class="form-control input" value="0" readonly>
							<label>% F. C. sugerida</label>
							<input type="number" name="txtPorcentajeFcm" id="txtPorcentajeFcm" placeholder="Dato opcional" class="form-control input" min="50" max="100" step="5" value="100">
							<label>F. C. sugerida</label>
							<input type="number" name="txtFcm" id="txtFcm" placeholder="" class="form-control input" readonly>
						</div>
 					</div>
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 					<button type="button" class="btn btn-primary" onclick="guardaConsultajqry()">Guardar</button>
 				</div>
 			</div>
 		</div>
 	</div>


<script type="text/javascript">
  	$(document).ready(function() 
 	{ 
 		// $("#myTable").tablesorter(); 
	 	$('#txtApPaterEd').keydown(function(e) {  

	 		//alert (e.keyCode); 
	 		if (e.keyCode == 34) { 
	 			console.log('No se admiten comillas'); 
	 			return false; } 
	 	});
 	} 
 	); 


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

	function guardaPacientejqry(){
		var parametros = {

			p_idPaciente : $("#txtIdPacienteEd").val(),
			p_nombre : $("#txtNombreEd").val(),
			p_ApPat : $("#txtApPaterEd").val(),
			p_ApMat : $("#txtApMaterEd").val(),
			p_fecNac : $("#txtFechaDeNacimientoEd").val(),
			p_sexo : $("#cboSexoEd").val(),
			p_tipoSanguineo : $("#cboTipoSanguineoEd").val(),
			p_alergias : $("#txtAlergiasEd").val(),
			p_apf : $("#txtAntPatFamEd").val(),
			p_app : $("#txtAntPatPerEd").val(),
			p_celular : $("#txtCelularEd").val(),
			p_contacto : $("#txtContactoEd").val(),
			p_correo : $("#txtCorreoEd").val(),
			p_idDep : $("#cboDepartamentoEd").val(),
			p_esDiabetico : $("#chkEsDiabeticoEd").prop('checked'),
			p_esHipertenso : $("#chkEsHipertensoEd").prop('checked'),
			p_esDislipidemico : $("#chkEsDislipidemicoEd").prop('checked'),
			p_nss : $("#txtNSSEd").val()
		}

		$.ajax({
			data : parametros,
			url : "procesos/admGuardaPaciente.php",
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

	function guardaPacienteNuevo(){
		var parametros = {
			p_idPaciente : 0,
			p_nombre : $("#txtNombreNvo").val(),
			p_ApPat : $("#txtApPaterNvo").val(),
			p_ApMat : $("#txtApMaterNvo").val(),
			p_fecNac : $("#txtFechaDeNacimientoNvo").val(),
			p_sexo : $("#cboSexoNvo").val(),
			p_tipoSanguineo : $("#cboTipoSanguineoNvo").val(),
			p_alergias : $("#txtAlergiasNvo").val(),
			p_apf : $("#txtAntPatFamNvo").val(),
			p_app : $("#txtAntPatPerNvo").val(),
			p_celular : $("#txtCelularNvo").val(),
			p_contacto : $("#txtContactoNvo").val(),
			p_correo : $("#txtCorreoNvo").val(),
			p_idDep : $("#cboDepartamentoNvo").val(),
			p_esDiabetico : $("#chkEsDiabeticoNvo").prop('checked'),
			p_esHipertenso : $("#chkEsHipertensoNvo").prop('checked'),
			p_esDislipidemico : $("#chkEsDislipidemicoNvo").prop('checked'),
			p_nss : $("#txtNSSNvo").val()
		}


		$.ajax({
			data : parametros,
			url : "procesos/admGuardaPaciente.php",
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

	function confirmaEliminaUsuario(datos){
		d=datos.split('||');
		idUsuario = d[0];
		nombreUsuario = d[2];
		
		$.Zebra_Dialog('Confirme que elimina a: </br> <strong>'+nombreUsuario+'</strong>', {
		    title: 'Eliminando usuario',
		    type: 'question',
		    buttons: [
		        {caption: 'Si', callback: function() { 
		        	eliminaUsuario(idUsuario);
		         }},
		        {caption: 'Cancelar', callback: function() { 
		        	return; 
		        }}
		    ]
		});
	}

	function eliminaUsuario(id){
		var parametros = {
			p_idUsuario : id
		}
		$.ajax({
			data : parametros,
			url : "procesos/admEliminaUsuario.php",
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


	function agregaDatosAlForm(datos){
		d=datos.split('||');
		p_idPaciente = d[0];
		p_nombre = d[1];
		p_ApPat = d[2];
		p_ApMat = d[3];
		p_sexo = d[4];
		p_tipoSanguineo = d[5];
		p_alergias = d[6];
		p_apf = d[7];
		p_app = d[8];
		p_idDep = d[11];
		p_celular = d[9];
		p_correo = d[10];
		p_fechaDeNacimiento = d[12];
		p_esDiabetico = d[13];
		p_esHipertenso = d[14];
		p_esDislipidemico = d[15];
		p_contacto = d[18];
		p_nss = d[19];
		// console.log(datos);

		p_fecha = new Date(p_fechaDeNacimiento);

		$("#txtIdPacienteEd").val(p_idPaciente);
		$("#txtApPaterEd").val(p_ApPat);
		$("#txtApMaterEd").val(p_ApMat);
		$("#txtNombreEd").val(p_nombre);
		$("#cboSexoEd").val(p_sexo);
		$("#cboTipoSanguineoEd").val(p_tipoSanguineo);
		$("#txtAlergiasEd").val(p_alergias);
		$("#txtAntPatFamEd").val(p_apf);
		$("#txtAntPatPerEd").val(p_app);
		$("#cboDepartamentoEd").val(p_idDep);
		$("#txtCelularEd").val(p_celular);
		$("#txtContactoEd").val(p_contacto);
		$("#txtCorreoEd").val(p_correo);
		$("#txtFechaDeNacimientoEd").val(p_fechaDeNacimiento);
		//$("#txtFechaDeNacimientoEd").prop("value",p_fechaDeNacimiento);

		$("#chkEsDiabeticoEd").prop("checked", 0);
		$("#chkEsDiabeticoEd").prop("checked",(p_esDiabetico==1 ? "checked" : ""));

		$("#chkEsHipertensoEd").prop("checked", 0);
		$("#chkEsHipertensoEd").prop("checked",(p_esHipertenso==1 ? "checked" : ""));

		$("#chkEsDislipidemicoEd").prop("checked", 0);
		$("#chkEsDislipidemicoEd").prop("checked",(p_esDislipidemico==1 ? "checked" : ""));

		$("#txtNSSEd").val(p_nss);
	}

	function agregaDatosAlFormConsulta(datos){
		d=datos.split('||');
		p_idPaciente = d[0];
		p_nombre = d[1];
		p_ApPat = d[2];
		p_ApMat = d[3];
		p_sexo = d[4];
		p_tipoSanguineo = d[5];
		p_alergias = d[6];
		p_apf = d[7];
		p_app = d[8];
		p_celular = d[9];
		p_correo = d[10];
		p_idDep = d[11];
		p_edad = d[16];
		p_constanteFcm = d[17];


		$("#txtIdPacienteCons").val(p_idPaciente);
		$("#txtSexo").val(p_sexo);
		$("#txtEdad").val(p_edad);
		$("#txtApPaterCons").val(p_ApPat);
		$("#txtApMaterCons").val(p_ApMat);
		$("#txtNombreCons").val(p_nombre);
		$("#cboDepartamentoCons").val(p_idDep);
		$("#txtConstanteFcm").val(p_constanteFcm);

		var porcentaje = $("#txtPorcentajeFcm").val()/100;
		var fcm = parseInt(($("#txtConstanteFcm").val() - $("#txtEdad").val()) * porcentaje);
		$("#txtFcm").val(fcm);

	}

	function guardaConsultajqry(){
		varPeso = $("#txtPeso").val();
		if(varPeso==""){
			varPeso="0";
		}
		varTalla = $("#txtTalla").val();
		if(varTalla==""){
			varTalla="0";
		}

		var parametros = {
			p_idPaciente : $("#txtIdPacienteCons").val(),
			p_motivo : $("#txtMotivoCons").val(),
			p_ta : $("#txtTa").val(),
			p_fc : $("#txtFc").val(),
			p_temperatura : $("#txtTemperatura").val(),
			p_glucosa : $("#txtGlucosa").val(),
			p_peso : varPeso,
			p_talla : varTalla,
			p_sexo : $("#txtSexo").val(),
			p_edad : $("#txtEdad").val(),
			p_imc : $("#txtImc").val(),
			p_porcFcm : $("#txtPorcentajeFcm").val(),
			p_fcm : $("#txtFcm").val()
		}

		$.ajax({
			data : parametros,
			url : "procesos/admGuardaConsulta.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){
				location.reload();
				//console.log(informacion);
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		})

	}

	function eliminaPacienteJqry(datos){
		d=datos.split('||');

		var parametros = {
			p_idPaciente : d[0]
		}
console.log("Se eliminará "+d[0]);
		$.ajax({
			data : parametros,
			url : "procesos/admEliminaPaciente.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){
				location.reload();
				//console.log(informacion);
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		})

	}

	function refrescaPagina(){
		location.reload();
	}


</script>
