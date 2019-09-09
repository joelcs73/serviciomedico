<!-- MENU.PHP -->
<?php 
include("clases/clsAdmin.php");

// include("encabezado.php"); 
$objAdmin = new clsAdmin();
?>

<!-- <div class="container-fluid"> -->
  <div class="row">
    <div class="col-md-12">
      <!-- <nav class="navbar navbar-expand-lg navbar-light fixed-top  " style="background-color: #e3f2fd;"> -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!-- <nav class="navbar navbar-expand-lg navbar-dark fixed-top  " style="background-color: #6f91c5;"> -->
        <button class="navbar-toggler nav-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
          <!-- <span class="navbar-toggler-icon"></span> -->
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
            <a class="nav-link " href="index.php?p=inicio"><span class="fa fa-home fa-2x"></span></a>
              <!-- <a class="nav-link" href="index.php?p=inicio">Inicio <span class="sr-only">(current)</span></a> -->
            </li>
<!--       <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->
      <li class="nav-item dropdown ">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Opciones de usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php 
            $objAdmin->devuelveMenu(); 
          ?>
        </div>
      </li>
      <li class="nav-item "><a class="nav-link" href="index.php?p=cambioContrasena"><span class="fas fa-key" aria-hidden="true"></span> Cambiar mi contraseña</a></li>
      <!-- <li class="nav-item active"><a class="nav-link" href="index.php?p=cambioContrasena">Mi contraseña</a></li> -->
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if($usu!=""){ ?>
      <li class="nav-item">
        <!-- <a class="nav-link active" href="#" onClick="document.location.href='s.php'">Cerrar Sesión</a> -->
        <a class="nav-link " href="#" onClick="document.location.href='s.php'"><span class="fas fa-sign-out-alt" aria-hidden="true"></span> Cerrar sesión <?= trim($_SESSION["nombreUsuario"]);?></a>
      </li>
      <?php } ?>
    </ul>
<!--     <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>

</div>
</div>
<!-- </div> -->
