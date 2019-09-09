<?php 
include("clases/clsPaciente.php");
include("clases/clsDepartamento.php");
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
 ?>

<style>
.botn{ 
  display:inline-block;
  position:relative;
  margin:0 auto 0 auto;
  -moz-border-radius:50%;
  -webkit-border-radius:50%;
  border-radius:50%;
  text-align:center;
  width: 40px;
  height: 40px;
  /*font-size:20px; */}
</style>

		<!-- Nav tabs -->
		<ul class="nav nav-tabs nav-fill" >
			<li class="nav-item" id="tabAtencionMedica"><a class="nav-link alert-link" href="#AtnMedica" aria-controls="AtnMedica" role="tab" data-toggle="tab">Atención médica</a></li>
			<li role="presentation" class="nav-item"><a class="nav-link alert-link" href="#histMedico" aria-controls="histMedico" role="tab" data-toggle="tab">Historial clínico</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="AtnMedica">
				<div class="row">
					<div class="col-md-12">
						<?php $oPaciente->listaDeConsultasPendientesMedico(); ?>
					</div>
				</div>
			</div>
			<div role="tabpanel" class="tab-pane" id="histMedico">
				<div class="col-md-12">
					<form class="form-inline">
						<fieldset>

							<!-- Form Name -->
							<legend>Historial clínico de algún paciente</legend>

							<!-- Text input-->
							</br>
							<div class="form-group">
								<label  for="txtNombreBuscado">Nombre</label>  
								<!-- <div class="col-md-10"> -->
									<input id="txtNombreBuscado" name="txtNombreBuscado" type="text" placeholder="Ingrese nombre o apellidos" class="form-control input-md col-sm-11">
								<!-- </div> -->
							</div>

							<!-- Button -->
							<div class="form-group">
								<!-- <label class="col-md-1 control-label" for="btnBuscar"></label> -->
								<!-- <div class="col-md-4"> -->
									<button type="button" id="btnBuscar" name="btnBuscar" class="btn btn-outline-primary" onclick="muestraResultado()">Buscar</button>
								<!-- </div> -->
							</div>

						</fieldset>
					</form>
					<div class="col-md-12" id="tabResultado">

					</div>
					<div class="col-md-12" id="tabHistorial">
						
					</div>
				</div>
			</div>
		</div>


<script type="text/javascript">

$(document).on('ready',function(){	
	$("#tabAtencionMedica").on('click',function(){
		$("#tabResultado").html("");
		$("#tabHistorial").html("");
		$("#txtNombreBuscado").val("");
	})
})

	function confirmaCancelarConsulta(datos){
		d=datos.split('||');
		idExpediente = d[0];
		paciente = d[1];
		
		$.Zebra_Dialog('Confirme que cancela la consulta de: </br> <strong>'+paciente+'</strong>', {
		    title: 'Eliminando usuario',
		    type: 'question',
		    buttons: [
		        {caption: 'Si', callback: function() { 
		        	cancelarConsulta(idExpediente);
		         }},
		        {caption: 'Cancelar', callback: function() { 
		        	return; 
		        }}
		    ]
		});
	}

	function cancelarConsulta(id){
		var parametros = {
			idExpediente : id
		}
		$.ajax({
			data : parametros,
			url : "procesos/admCancelaConsulta.php",
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

	function muestraResultado(){
		var strBusqueda = $("#txtNombreBuscado").val();
		if(strBusqueda==""){return;}

		var parametros = {
			cadenaBuscada : strBusqueda
		}
		$.ajax({
			data : parametros,
			url : "procesos/admTablaPacientesHistorial.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){
				$("#tabResultado").html(informacion);
				$("#tabHistorial").html("");
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		})
	}

	function muestraHistorial(datos){
		d=datos.split('||');
		var parametros = {
			idPaciente : d[0],
			nombrePaciente : d[1]
		}
		$.ajax({
			data : parametros,
			url : "procesos/admHistorialClinico.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){
				$("#tabResultado").html("");
				$("#tabHistorial").html(informacion);
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		})
	}
</script>
