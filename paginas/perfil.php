<form class="form-horizontal">
    <fieldset>
<input id="txtIdUsuario" name="txtIdUsuario" type="text" class="form-control input-md invisible" value="<?php echo $_SESSION["idUsuario"]; ?>" readonly>
        <!-- Form Name -->
        <legend>Cambio de contraseña</legend>

        <!-- Text input-->
        <div class="form-group">
          <label class="col-md-4 control-label" for="txtNombreUsuario">Nombre</label>  
          <div class="col-md-3">
              <input id="txtNombreUsuario" name="txtNombreUsuario" type="text" placeholder="Nombre completo" class="form-control input-md" value="<?php echo $_SESSION["nombreUsuario"];?>" readonly>
          </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
          <label class="col-md-4 control-label" for="txtContrasena">Contraseña</label>
          <div class="col-md-3">
            <input id="txtContrasena" name="txtContrasena" type="password" placeholder="Mín. 8 caracteres" class="form-control input-md">

        </div>
    </div>

    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="btnGuardar"></label>
      <div class="col-md-4">
        <button id="btnGuardar" type="button" name="btnGuardar" class="btn btn-primary"><span class="fa fa-check"></span></button>
    </div>
</div>
</fieldset>
</form>
<div id="idMsg" class="alert alert-danger col-md-12 invisible" role="alert">
    <strong id="etiqueta">Error!</strong><p id="mensaje">vamos a probar el mensaje de error en esta parte de la pantalla</p>
</div>


    <script>
        $(document).ready(function(){
            $('#btnGuardar').click(function(){
                if ($("#txtContrasena").val()!=""){
                    if($("#txtContrasena").val().length<8){
                        $("#idMsg").attr("class","alert alert-danger col-md-12");
                        $("#mensaje").html("La contraseña debe tener 8 o más caracteres");
                        return;
                    } else {
                        $("#idMsg").attr("class","alert alert-danger col-md-12 invisible");
                    }
                } else {
                    return;
                }


                var datos = {
                    idUsuario : $("#txtIdUsuario").val(),
                    contrasena : $("#txtContrasena").val(),
                };
                $.ajax({
                    data : datos,
                    url : 'procesos/guardaContrasena.php',
                    global: false,
                    type:"POST",
                    dataType: "json",
                    async: true
                }).done(function(resp){
                    if(resp.resultado=="Error"){
                        $("#idMsg").attr("class","alert alert-danger col-md-12");
                        $("#mensaje").html(resp.mensaje);
                    } else {
                        $("#idMsg").attr("class","alert alert-success col-md-12");
                        $("#etiqueta").html('¡Aviso!');
                        $("#mensaje").html('Constraseña guardada con éxito');
                        //location.reload();
                    }
                });
            });
        })
    </script>