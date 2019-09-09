<?php 
include("../clases/clsAdmin.php");
include("./clases/clsPaciente.php");
include("./clases/clsDepartamento.php");
$oPaciente = new clsPaciente();
$oDepto = new clsDepartamento();
$oAdm = new clsAdmin();
 ?>

  	<h3>Club de sangre</h3>
 	<div class="row">
 		<div class="col-md-3">
 			<?php $oPaciente->tablaTipoDeSangre(); ?>
 		</div>
 	</div>
 	

<script type="text/javascript">
  	$(document).ready(function() 
 	{ 
 		// $("#myTable").tablesorter(); 
 	} 
 	); 

 
function muestraListaGrupoSanguineo(grupoSanguineo){
	 // console.log("Aquí se invocará la lista del grupo "+grupoSanguineo);
	 // alert(grupoSanguineo);
	var pagina = "paginas/rptReporteDeClubDeSangrePdf.php?g="+grupoSanguineo;
	Abrir_ventana(pagina);
}

</script>
