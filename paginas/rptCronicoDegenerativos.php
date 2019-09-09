<?php 
include("../clases/clsAdmin.php");
include("./clases/clsPaciente.php");
include("./clases/clsDepartamento.php");
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
$oAdm = new clsAdmin();
 ?>

  	<h3>Reporte Crónico degenerativos</h3>
 	<div class="row">

		<form class="form-horizontal">
			<fieldset>

				<!-- Form Name -->
				<!-- <legend>Reporte Crónico degenerativos</legend> -->

				<!-- Multiple Radios -->
				<div class="form-group">
					<label class="col-md-12 control-label" for="gradCronicoDegenerativos">Por enfermedad</label>
					<div class="col-md-12">
						<div class="radio">
							<label for="gradCronicoDegenerativos-0">
								<input type="radio" name="gradCronicoDegenerativos" id="gradCronicoDegenerativos-0" value="esDiabetico" checked="checked">
								Diabetes
							</label>
						</div>
						<div class="radio">
							<label for="gradCronicoDegenerativos-1">
								<input type="radio" name="gradCronicoDegenerativos" id="gradCronicoDegenerativos-1" value="esHipertenso">
								Hipertensión
							</label>
						</div>
						<div class="radio">
							<label for="gradCronicoDegenerativos-2">
								<input type="radio" name="gradCronicoDegenerativos" id="gradCronicoDegenerativos-2" value="esDislipidemico">
								Dislipidemia
							</label>
						</div>
					</div>
				</div>

				<!-- Button -->
		 		<div class="form-group">
		 			<label class="col-md-2 control-label" for="btnOk"></label>
		 			<div class="col-md-4 col-sm-6 col-xs-6">
		 				<button type="button" id="btnOk" name="btnOk" class="btn btn-outline-success" onclick="imprimirReporteCronicoDegenerativo()">Ok</button>
		 			</div>
		 		</div>
			</fieldset>
		</form>

<!--  		<div class="col-md-3">
 			<?php //$oPaciente->tablaTipoDeSangre(); ?>
 		</div> -->
 	</div>
 	

<script type="text/javascript">
  	$(document).ready(function() 
 	{ 
 		// $("#myTable").tablesorter(); 
 	} 
 	); 

 
function imprimirReporteCronicoDegenerativo(){
	var campoConsultado = $("input[name='gradCronicoDegenerativos']:checked").val();
	var etiquetaSeleccionada='';
	if(campoConsultado=='esDiabetico'){
		etiquetaSeleccionada='Diabetes';
	} else if(campoConsultado=='esHipertenso'){
		etiquetaSeleccionada='Hipertensión';
	} else if(campoConsultado=='esDislipidemico'){
		etiquetaSeleccionada = 'Dislipidemia';
	}
	console.log(etiquetaSeleccionada);
	var pagina = "paginas/rptCronicoDegenerativosPdf.php?c="+campoConsultado+"&e="+etiquetaSeleccionada;
	Abrir_ventana(pagina);
}

</script>
