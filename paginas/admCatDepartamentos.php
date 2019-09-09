<?php 
include_once("clases/clsDepartamento.php");
$oDep = new clsDepartamento();
?>

 	<h3>Catálogo de departamentos</h3>
 	<div class="row">
 		<div class="col-md-12">
 			<?php $oDep->listaDeDepartamentos(); ?>
 		</div>
 	</div>

 	<nav class="navbar navbar-expand-lg navbar-light fixed-bottom bg-light ">
 		<div class="container">
 			<div class="col-md-12 offset-md-11">
 				<button type="button" class="btn btn-success btn-sm botn" id="btnAgregar" data-toggle="modal" data-target="#modalNuevoPadecimiento"><span class="fa fa-plus" aria-hidden="true"></span></button>
 			</div>
 		</div>
 	</nav>

 	<!-- Modal -->
 	<div class="modal fade" id="modalNuevoPadecimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabelNuevo">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
 					<h4 class="modal-title" id="myModalLabelNuevo">Nuevo departamento</h4>
 				</div>
 				<div class="modal-body">
 					<input type="text" name="" id="txtIdPadecimientoNvo" class="form-control input invisible">
					<label>Descripción</label>
					<input type="text" name="" id="txtDescripcionNvo" class="form-control input">
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 					<button type="button" class="btn btn-primary" onclick="guardaPadecimientoNuevo()">Guardar</button>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="modal fade " id="modalEditaDepartamento" tabindex="-1" role="dialog" aria-labelledby="myModalLabelModifica">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
 					<h4 class="modal-title" id="myModalLabelModifica">Modificar descripción departamento</h4>
 				</div>
 				<div class="modal-body">
 					<input type="text" name="" id="txtIdDepartamentoEd" class="form-control input invisible">
					<label>Descripción</label>
					<input type="text" name="" id="txtNombreDepartamentoEd" class="form-control input">
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 					<button type="button" class="btn btn-primary" onclick="guardaDepartamentojqry()">Guardar</button>
 				</div>
 			</div>
 		</div>
 	</div>



<script type="text/javascript">
	function guardaDepartamentojqry(){
		var parametros = {
			p_idDepartamento : $("#txtIdDepartamentoEd").val(),
			p_nombreDepartamento : $("#txtNombreDepartamentoEd").val()
		}

		$.ajax({
			data : parametros,
			url : "procesos/admGuardaDepartamento.php",
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

	function guardaPadecimientoNuevo(){
		var parametros = {
			p_idDepartamento : 0,
			p_nombreDepartamento : $("#txtDescripcionNvo").val()
		}

		$.ajax({
			data : parametros,
			url : "procesos/admGuardaDepartamento.php",
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
		p_idDepartamento = d[0];
		p_nombreDepartamento = d[1];

		$("#txtIdDepartamentoEd").val(p_idDepartamento);
		$("#txtNombreDepartamentoEd").val(p_nombreDepartamento);

	}

</script>
