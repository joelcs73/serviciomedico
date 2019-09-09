<p id="titulo">Respaldando... espere un momento</p>

<p id="bd" class="invisible"><?php echo $_SESSION["bd"] ?></p>

<div class="progress" id="progreso">
	<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
	<!-- <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div> -->
</div>

<div class="row" id="divResultado">

</div>


<script type="text/javascript">

	$(document).ready(function(){
		parametro = {
			baseDeDatos:$("#bd").html(),
			tablas:"*"
		}
		$.ajax({
			data:parametro,
			url:"procesos/proRespalda.php",
			global:false,
			type:"POST",
			dataType:"html",
			async:true,
			cache:false,
			success: function(resp){
				if (resp!=""){
					$("#progreso").html("");
					$('#titulo').attr('class','invisible');
					$('#progreso').attr('class','invisible');
					$("#divResultado").html(resp);
				} else {
					$("#divResultado").html('<strong>No se puedo realizar el respaldo</strong> ');
				}
			},
			error: function(err){
						$("#divResultado").html(err);
					}
				})

	});

	
</script>
