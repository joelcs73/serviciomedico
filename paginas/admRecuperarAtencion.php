<?php 
include_once("clases/clsPaciente.php");
include_once("clases/clsDepartamento.php");
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
 ?>



			<div class="row">
				<div class="col-md-12">
					<form class="form-inline">
						<fieldset>

							<!-- Form Name -->
							<legend>Recuperar la consulta de un paciente</legend>

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
									<button type="button" id="btnBuscar" name="btnBuscar" class="btn btn-outline-primary" onclick="muestraResultadoParaRecuperarConsulta()">Buscar</button>
								<!-- </div> -->
							</div>

						</fieldset>
					</form>
					<div class="col-md-12" id="tabResultado">

					</div>
				</div>
			</div>



<script type="text/javascript">

$(document).on('ready',function(){	

})

	function muestraResultadoParaRecuperarConsulta(){
		var strBusqueda = $("#txtNombreBuscado").val();
		if(strBusqueda==""){return;}

		var parametros = {
			cadenaBuscada : strBusqueda
		}
		$.ajax({
			data : parametros,
			url : "procesos/admTablaParaRecuperarConsulta.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){
				$("#tabResultado").html(informacion);
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		})
	}

	function mandaRecuperar(datos){
		var strBusqueda = $("#txtNombreBuscado").val();
		d=datos.split('||');
		var parametros = {
			cadenaBuscada : strBusqueda,
			idExpediente : d[0]
		}
		// console.log(parametros);
		$.ajax({
			data : parametros,
			url : "procesos/admTablaParaRecuperarConsulta.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){

				// location.reload();
				$("#tabResultado").html("");
				$("#tabResultado").html(informacion);
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		})
	}

</script>
