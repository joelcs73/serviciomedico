<?php 
include("clases/clsPaciente.php");
include("clases/clsDepartamento.php");
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
 ?>



 <form class="form col">
 	<fieldset>

 		<h3>Especifique el rango de fechas para el reporte</h3>
 		<div class="form-group">
 			<label class="col-xs-2 col-sm-3 control-label" for="txtFechaInicial">Fecha inicial</label>  
 			<div class="col-md-4 col-sm-6 col-xs-6">
 				<input id="txtFechaInicial" name="txtFechaInicial" type="date" placeholder="" class="form-control input-md" value="<?php echo date("Y-m-d") ?>">
 			</div>
 		</div>

 		<div class="form-group">
 			<label class="col-xs-2 col-sm-3 control-label" for="txtFechaFinal">Fecha final</label>  
 			<div class="col-md-4 col-sm-6 col-xs-6">
 				<input id="txtFechaFinal" name="txtFechaFinal" type="date" placeholder="" class="form-control input-md" value="<?php echo date("Y-m-d") ?>">
 			</div>
 		</div>

 		<div class="form-group">
 			<label class="col-md-2 control-label" for="btnOk"></label>
 			<div class="col-md-4">
 				<button type="button" id="btnOk" name="btnOk" class="btn btn-outline-success" onclick="imprimirReporteDeEstadisticas()">Ok</button>
 			</div>
 		</div>

 	</fieldset>
 </form>
<div id="reporte">
	
</div>

<script type="text/javascript">
	function imprimirReporteDeEstadisticas(){
		var fechaInicial = $("#txtFechaInicial").val();
		var fechaFinal = $("#txtFechaFinal").val();

		var parametros = {
			fi : fechaInicial,
			ff : fechaFinal
		}
		$.ajax({
			data : parametros,
			url : "procesos/rptEstadisticas.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(informacion){
				$("#reporte").html(informacion);
			},error: function(err){
				//alert(err);
				//console.log(err);
			}
		}) 
	}
</script>