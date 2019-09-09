	<!-- ENCABEZADO.PHP -->
	<img src="imagenes/servicio_medico.jpg" class="rounded mx-auto d-block" style="width:800px; height:41px">
	<div class="row">
		<div class="col-md-2 text-center">
			<div>
				<!-- <img alt="Bootstrap Image Preview" style="width:200px; height:113px" src="imagenes/logosf.png" /> -->
				</br>
				<img alt="Bootstrap Image Preview" style="width:120px; height:113px" src="imagenes/logoLXV.png" />
			</div>
		</div>
		<div class="col-md-7 text-center">
			<!-- <h4>Secretaría General</h4> -->
			<h1>Oficina de servicios médicos</h1>

		</div>
		<div class="col-md-3 text-center text-success">
			<?php if($usu!=""){
				echo "Usuario: ".trim($_SESSION["nombreUsuario"]);
			}?>

		</div>
	</div>