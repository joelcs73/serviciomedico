<?php 
include_once("clases/clsPaciente.php");
include_once("clases/clsDepartamento.php");
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

 	<h3>Consultas pendientes</h3>
 	<div class="row">
 		<div class="col-md-12">
 			<?php $oPaciente->listaDeConsultasPendientes(); ?>
 		</div>
 	</div>
 	
 	<div class="row">
 		<div class="col-md-12">
			<input class="col-md-1 invisible" type="text"  id="txtIdUsuario" placeholder="idUsuario">
			<input class="col-md-1 invisible" type="text"  id="txtIdArea" placeholder="idArea">
 		</div>
 	</div>


<script type="text/javascript">

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

</script>
