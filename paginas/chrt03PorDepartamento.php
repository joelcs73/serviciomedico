
<input id="fi" value="<?php echo $fi; ?>" style="display: none">
<input id="ff" value="<?php echo $ff; ?>" style="display: none">
<input id="dataLabelsPorDepartamento" class="col" style="display:none ">
<input id="dataPorDepartamento" class="col" style="display:none " >

<canvas class="my-4" id="chrtPorDepartamentos" width="700" height="380"></canvas>


    <script>

    $.ajax({
      data:{
        fi:$("#fi").val(),
        ff:$("#ff").val()
      },
      url : "procesos/dataSet03GraficaPorDepartamento.php",
      global:false,
      type:"POST",
      dataType:"html",
      async:true,
      cache:false,
      success: function(informacion){
        // console.log(informacion);
        // var array = JSON.parse(informacion);
        array=informacion.split('||');
        $("#dataLabelsPorDepartamento").val(array[0]);
        $("#dataPorDepartamento").val(array[1]);

        var ctxDepartamento = document.getElementById("chrtPorDepartamentos");
        var dsEtiq = JSON.parse($("#dataLabelsPorDepartamento").val());
        var dsDatos = JSON.parse($("#dataPorDepartamento").val());
        var chrtPorDepartamentos = new Chart(ctxDepartamento, {
          type: 'pie',
          data: {
            labels: dsEtiq,
            datasets: [{
              label: "Mes en curso",
              data: dsDatos,
              lineTension: 0,
              backgroundColor: ['IndianRed','Pink','LightSalmon','Gold','Lavender','GreenYellow','Aqua','Cornsilk','White','Gainsboro','LightCoral','LightPink','Coral','Yellow','Thistle','Chartreuse','Cyan','BlanchedAlmond','Snow','LightGrey','Salmon','HotPink','Tomato','LightYellow','Plum','LawnGreen','LightCyan','Bisque','Honeydew','Silver','DarkSalmon','DeepPink','OrangeRed','LemonChiffon','Violet','Lime','PaleTurquoise','NavajoWhite','MintCream','DarkGray','LightSalmon','MediumVioletRed','DarkOrange','LightGoldenrodYellow','Orchid','LimeGreen','Aquamarine','Wheat','Azure','Gray','Crimson','PaleVioletRed','Orange','PapayaWhip','Fuchsia','PaleGreen','Turquoise','BurlyWood','AliceBlue','DimGray','Red','Moccasin','Magenta','LightGreen','MediumTurquoise','Tan','GhostWhite','LightSlateGray','FireBrick','PeachPuff','MediumOrchid','MediumSpringGreen','DarkTurquoise','RosyBrown','WhiteSmoke','SlateGray','DarkRed','PaleGoldenrod','MediumPurple','SpringGreen','CadetBlue','SandyBrown','Seashell','DarkSlateGray','Khaki','Amethyst','MediumSeaGreen','SteelBlue','Goldenrod','Beige','Black'],
              borderColor: 'Brown',
              borderWidth: .5
            }]
          }
        });
      },error: function(err){

      }
    }) 




    </script>