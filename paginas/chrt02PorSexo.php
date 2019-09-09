
<input id="fi" value="<?php echo $fi; ?>" style="display: none">
<input id="ff" value="<?php echo $ff; ?>" style="display: none">
<input id="dataLabelsPorSexo" class="col" style="display:none ">
<input id="dataPorSexo" class="col" style="display:none " >

<canvas class="my-4" id="chrtPorSexos" width="700" height="380"></canvas>


    <script>

    $.ajax({
      data:{
        fi:$("#fi").val(),
        ff:$("#ff").val()
      },
      url : "procesos/dataSet02GraficaPorSexo.php",
      global:false,
      type:"POST",
      dataType:"html",
      async:true,
      cache:false,
      success: function(informacion){
        // console.log(informacion);
        // var array = JSON.parse(informacion);
        array=informacion.split('||');
        $("#dataLabelsPorSexo").val(array[0]);
        $("#dataPorSexo").val(array[1]);

        var ctxSexo = document.getElementById("chrtPorSexos");
        var dsEtiq = JSON.parse($("#dataLabelsPorSexo").val());
        var dsDatos = JSON.parse($("#dataPorSexo").val());
        var chrtPorSexos = new Chart(ctxSexo, {
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