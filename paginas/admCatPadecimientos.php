<?php
include_once './clases/clsPadecimiento.php';
$oPad = new clsPadecimiento();
?>

 	<h3>Catálogo de padecimientos</h3>
 	<div class="row">
 		<div class="col-md-12">
 			<?php $oPad->listaDePadecimientos(); ?>
 		</div>
 	</div>

 	<nav class="navbar navbar-expand-lg navbar-light fixed-bottom bg-light ">
 		<div class="container">
 			<div class="col-md-12 offset-md-11">
 				<button type="button" class="btn btn-success btn-sm botn" id="btnAgregar" data-toggle="modal" data-target="#modalNuevoPadecimiento"><i class="fa fa-plus" aria-hidden="true"></i></button>
 			</div>
 		</div>
 	</nav>

 	<!-- Modal -->
 	<div class="modal fade" id="modalNuevoPadecimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabelNuevo">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
 					<h4 class="modal-title" id="myModalLabelNuevo">Nuevo padecimiento</h4>
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

 	<div class="modal fade " id="modalEditaPadecimiento" tabindex="-1" role="dialog" aria-labelledby="myModalLabelModifica">
 		<div class="modal-dialog" role="document">
 			<div class="modal-content">
 				<div class="modal-header">
 					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>
 					<h4 class="modal-title" id="myModalLabelModifica">Modificar descripción padecimiento</h4>
 				</div>
 				<div class="modal-body">
 					<input type="text" name="" id="txtIdPadecimientoEd" class="form-control input invisible">
					<label>Descripción</label>
					<input type="text" name="" id="txtDescripcionEd" class="form-control input">
 				</div>
 				<div class="modal-footer">
 					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
 					<button type="button" class="btn btn-primary" onclick="guardaPadecimientojqry()">Guardar</button>
 				</div>
 			</div>
 		</div>
 	</div>


<script type="text/javascript">
	function guardaPadecimientojqry(){
		var parametros = {
			p_idPadecimiento : $("#txtIdPadecimientoEd").val(),
			p_descripcion : $("#txtDescripcionEd").val()
		}

		$.ajax({
			data : parametros,
			url : "procesos/admGuardaPadecimiento.php",
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
			p_idPadecimiento : 0,
			p_descripcion : $("#txtDescripcionNvo").val()
		}

		$.ajax({
			data : parametros,
			url : "procesos/admGuardaPadecimiento.php",
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
		p_idPadecimiento = d[0];
		p_descripcion = d[1];

		$("#txtIdPadecimientoEd").val(p_idPadecimiento);
		$("#txtDescripcionEd").val(p_descripcion);

	}

</script>
