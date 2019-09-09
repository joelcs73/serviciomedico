<?php 
include("clases/clsPaciente.php");
include("clases/clsDepartamento.php");
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
 ?>



 <form class="form-horizontal col-sm-6 col-xs-12">
 	<fieldset>

 		<!-- Form Name -->
 		<h3>Reporte de turno</h3>

 		<!-- Text input-->
 		<div class="form-group">
 			<label class="col-xs-2 col-sm-3 control-label" for="txtFecha">Fecha</label>  
 			<div class="col-xs col-sm col-md-8 col-lg-6 ">
 				<input id="txtFecha" name="txtFecha" type="date" placeholder="" class="form-control input-md" value="<?php echo date("Y-m-d") ?>">
 			</div>
 		</div>

 		<div class="form-group">
 			<label class="col-md-2 control-label" for="btnOk"></label>
 			<div class="col-md-4 col-sm-6 col-xs-6">
 				<button type="button" id="btnOk" name="btnOk" class="btn btn-outline-success" onclick="imprimirReporteDeTurno()">Ok</button>
 			</div>
 		</div>

 	</fieldset>
 </form>


<script type="text/javascript">
	function imprimirReporteDeTurno(){
		var fecha = $("#txtFecha").val();
		// console.log(fecha);
		var pagina = "paginas/rptReporteDeTurnoPdf.php?f="+fecha;
		Abrir_ventana(pagina);
	}
</script>