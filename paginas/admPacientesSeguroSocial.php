<?php 
include_once("../clases/clsAdmin.php");
include_once("./clases/clsPaciente.php");
include_once("./clases/clsDepartamento.php");
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
$oAdm = new clsAdmin();
 ?>

  	<h3>Seguro social de pacientes</h3>
 	<div class="row">
 		<div class="col-md-12">
 			<?php $oPaciente->listaDePacientesSeguroSocial(); ?>
 		</div>
 	</div>
 	
 	<div class="row">
 		<div class="col-md-12">
			<input class="col-md-1 invisible" type="text"  id="txtIdUsuario" placeholder="idUsuario">
			<input class="col-md-1 invisible" type="text"  id="txtIdArea" placeholder="idArea">
 		</div>
 	</div>


<script type="text/javascript">
  	$(document).ready(function() 
 	{ 
 		// $("#myTable").tablesorter(); 
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


	function guardaNSS(datos){
		d=datos.split('||');
		idPaciente = d[0];
		id = 'txtNSS'+idPaciente;
		nss = document.getElementById(id).value;
		parametros = {
			p_idPaciente : idPaciente,
			p_nss : nss
		}
		// if (nss!=""){
			//console.log("Se cambiará al id:"+idPaciente+" con "+nss);
			$.ajax({
				data : parametros,
				url : "procesos/admGuardaNss.php",
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

		// }
	}

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
			p_esDislipidemico : $("#chkEsDislipidemicoEd").prop('checked')
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
			p_esDiabetico : $("#chkEsDiabeticoEd").prop('checked'),
			p_esHipertenso : $("#chkEsHipertensoEd").prop('checked'),
			p_esDislipidemico : $("#chkEsDislipidemicoEd").prop('checked')
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
		console.log(datos);

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
