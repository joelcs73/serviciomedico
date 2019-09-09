<?php 
  include ("./clases/clsPaciente.php");
  $oPaciente = new clsPaciente();
  // $fi="";
  // $ff="";
?>
<h2>Atenciones del mes en curso</h2>

<div class="row">
  <div class="col">
    <div class="card border-dark mb-2 col-12">
      <div class="card-header"><strong>Por Padecimiento</strong></div>
      <div class="card-body">
        <?php 
          $oPaciente->tablaAtencionPorPadecimiento(); ?>
          <div class="ocultoParaMovil">
          <?php   
          include("chrt01PorPadecimiento.php");
        ?>
          </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark">
      <div class="card-header"><strong>Por sexo</strong></div>
      <div class="card-body">
        <?php 
          $oPaciente->tablaAtencionPorSexo(); ?>
          <div class="ocultoParaMovil">
          <?php   
          include("chrt02PorSexo.php");
        ?>
          </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card border-dark">
      <div class="card-header"><strong>Por departamento</strong></div>
      <div class="card-body">
        <?php 
        $oPaciente->tablaAtencionPorDepartamento(); ?>
          <div class="ocultoParaMovil">
          <?php   
          include("chrt03PorDepartamento.php");
        ?>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col">
    <div class="card border-dark">
      <div class="card-header"><strong>Por edades</strong></div>
      <div class="card-body">
        <?php 
        $oPaciente->tablaAtencionPorEdades(); ?>
          <div class="ocultoParaMovil">
          <?php   
          include("chrt04PorEdad.php");
        ?>
          </div>
      </div>
    </div>
  </div>
</div>