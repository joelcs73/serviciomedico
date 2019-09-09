function listaPacientes(){
    $.ajax({
      type: 'GET',
      url: "http://localhost/serviciomedico/api/pacientes/",
      cache: false,
      async: true,
      dataType: "json",
      success: function (data) {
        muestraPacientes(data);
      }, 
      error: function (objeto, tipo, causa) {

      }, 
      complete: function (xhr, status) {
        // $('#spinner').hide();
      }
    });
  }

function muestraPacientes(data){
  var paciente="";
  var salida = ''+
  '<table class="table table-hover table-striped table-sm">'+
    '<thead>'+
  '<tr>'+
  '<th>Paciente</th>'+
  '<th>Departamento</th>'+
  '<th class="text-center">Consultas</th>'+
  '<th class="text-center">Edición</th>'+
  '<th class="text-center">Consulta</th>'+
  '<th class="text-center">Eliminar</th>'+
  '</tr>'+
  '</thead>'+
  '<tbody>';

  for (var i = 0; i < data.pacientes.length; i++) {
    datos="";
    dat=data.pacientes[i];
    paciente = dat.apPaterno+' '+dat.apMaterno+' '+dat.nombre;
    salida = salida +
    '<tr class="paciente">'+
    '<td><span class=" grpUsuarios">'+paciente+'</span></td>'+
    '<td><span class=" grpUsuarios">'+dat.nombreDepartamento+'</span></td>'+
    '<td class="text-center"><span class=" grpUsuarios">'+dat.consultas+'</span></td>'+
    '<td class="text-center"><button class="btn btn-outline-dark" data-toggle="modal" data-target="#modalEditaPaciente" onclick="agregaDatosAlForm('+datos+')"><i class=" fa fa-pencil-alt"></i></button></td>'+
    '<td class="text-center"><button class="btn btn-outline-success" data-toggle="modal" data-target="#modalConsulta" onclick="agregaDatosAlFormConsulta('+datos+')"><i class=" far fa-clock"></i></button></td>';
    if(dat.consultas==0){
      salida = salida +'<td class="text-center"><button class="btn btn-outline-danger" onclick="eliminaPacienteJqry('+datos+')"><i class=" far fa-trash-alt"></i></button></td>';
    } else {
      salida = salida +'<td></td>';
    }
    salida = salida + '</tr>';
  }
  salida = salida + '</tbody>'+
  '</table>';
  $("#listaDePacientes").html(salida);
}