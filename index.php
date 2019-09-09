<?php 
if(!isset($_SESSION)){
	@session_start();
}
$usu = $_SESSION["usuario"];
$p = $_GET["p"];
$idProv = $_GET["idProv"];
$e = $_GET["e"];

	$pag="paginas/".$p.".php";

	if($p=="atencion"){$pag="paginas/admAtencionPersonal.php";}
	if($p=="inicio"){$pag="paginas/inicio.php";}
	if($p=="cambioContrasena"){$pag="paginas/perfil.php";}
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Servicio Médico</title>

	<?php include("meta.php");
	include("estilos.php");
	include("scripts.php");
	include_once("clases/funciones.php");
	?>
</head>
<!-- <body oncontextmenu="return false;"> -->
<body>
	<!-- <div class="container-fluid"> -->
	<div class="">
		<?php 
		if($usu==""){
			include("login.php");
		} else { ?>
			<nav>
				<?php 
				include("menu.php");
				?>
			</nav>
			<!-- <section class="container-fluid"> -->
			<section class="container" style="margin-bottom: 70px;  margin-top: 58px;">
				<?php  
				@include($pag);
				?>
				
			</section>

			<footer>
				<p class="copyright text-muted">
					H. CONGRESO DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE</br>
					Coordinación de Informática. <span class="fa fa-phone"></span> 3073    </br>
					Desarrollo de aplicaciones. <span class="fa fa-phone"></span> 3080</br>
				</p>
			</footer>
		<?php 	}?>

		</div>
</body>


<!-- <body >
	<nav >			
		<?php //if($usu!=""){	//include("menu.php");} ?>
	</nav>
		<div>
			<?php //if($usu==""){
				//include("login.php");
			//} else { ?>
			<header class="container-fluid">
				<?php // @include($pag);?>
			</header>

			<footer>
				<p class="copyright text-muted">
					H. CONGRESO DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE</br>
					Coordinación de Informática. <span class="fa fa-phone"></span> 3073    </br>
					Desarrollo de aplicaciones. <span class="fa fa-phone"></span> 3080</br>
				</p>
			</footer>
			<?php //	}?>

		</div>
	</body> -->
	</html>