// INSTANCIA XMLhttpRequest ////////////////////////
function getXMLHttpRequest(){try {req = new XMLHttpRequest();} catch (err1) {try { req = new ActiveXObject("Msxml2.XMLHTTP");} catch (err2) {try {req = new ActiveXObject("Microsoft.XMLHTTP");	} catch (err3){	req = false;}}} return req;	}

var cargando = "<img src='imagenes/carga2.gif' width='100' height='12' />";

var formSendR=getXMLHttpRequest();

function formSend(formid,destino,divDestino,boton,mensaje)
{
         var Formulario = document.getElementById(formid);
         var longitudFormulario = Formulario.elements.length;
         var parametroslog = "";
         var sepCampos;
         sepCampos = "";
         for (var i=0; i <= Formulario.elements.length-1;i++) {
         parametroslog += sepCampos+Formulario.elements[i].name+'='+encodeURI(Formulario.elements[i].value);
         sepCampos="&";
		 }
	
	var ale = Math.round(Math.random()*1000000);
	parametroslog += "&form="+formid+"&divDestino="+divDestino+"&boton="+boton+"&ale="+ale;
	//alert(parametroslog);
	formSendR.open("POST",destino,true);
	formSendR.onreadystatechange = formSend_R;
	formSendR.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=ISO-8859-1');
	formSendR.send(parametroslog);
	if(mensaje!=null){
		$('#'+divDestino).html('<p class="alert alert-danger">'+mensaje+'</p>');
	}
	desvanecer(destino);
}

function formSend_R()	
{
	if (formSendR.readyState==4)
	{
		if (formSendR.status==200)
		{
			divDestino = formSendR.responseText.substr(0,5);
			botDestino = formSendR.responseText.substr(5,5);
			resDigito =  formSendR.responseText.substr(10,1);
			respuestaTotal = formSendR.responseText.substr(11,999999999999999999999999999999999);
			//alert(formSendR.responseText);
			if(resDigito==3) { document.location.reload(); }
			if(resDigito==2) { aparecer(botDestino); }
			if(resDigito==1) { desvanecer(botDestino); }
			
			//aparecer(botDestino);
			
			document.getElementById(divDestino).innerHTML = respuestaTotal;

			aparecer(divDestino);
			desvanecer("loader");
		}
	}
	else 
	{
		
		aparecer("loader");
	}
	
}

function desvanecer(div)
{
	$("#"+div).hide("clip");
}
	
function aparecer(div)
{
	$("#"+div).show("clip");
		
}
function poner(chec,dest)
{
	var casilla = document.getElementById(chec).checked;
	if(casilla == true)
	{
		document.getElementById(dest).value = "1"; 
	} else {
		document.getElementById(dest).value = "0"; 
	}
}

function poneropt(opt,dest)
{
	valor = document.getElementById(opt).value;
	document.getElementById(dest).value = valor;
}

function totEdiles(chec)
{
	var casilla = document.getElementById(chec).checked;
	var total = 0;
	if(casilla == true)
	{
		total=total++;
	}			
	return total;
}

function Abrir_ventana (pagina) 
{
	var opciones="toolbar=no, location=no, directories=no, status=no, menubar=yes, scrollbars=yes, resizable=yes, width=1080, height=1200, top=85, left=140";
	window.open(pagina,"",opciones);
}
function eliminarRegistro(descRegistro,idRegistro, archivoEliminar)
{
	document.getElementById('errMessage').innerHTML = "<div class='info' style='overflow:hidden; '><div style='width:35px; height:35px; float:left; margin-right:5px'><img src='images/interrogacion.png' width='35' height='35'></div><div style='width:420px; float:left; margin-top:10px '><div> Estas seguro que deseas ELIMINAR el Registro.<div style='margin:5px'><strong>"+descRegistro+"</strong></div></div><div style='width:420px; float:left; margin-top:10px '>  </div><div style='width:420px; float:left; margin-top:10px '>  <div style='text-align:center'>    <input name='button' type='button' class='botones' onClick='confirmaEliminar("+idRegistro+","+'"'+archivoEliminar+'"'+")' style='width:60px' id='button' value='Si'>    <input name='button2' type='button'  onClick='vaciarMsg()' style='margin-left:3px; width:60px' class='botones' id='button2' value='No'>  </div></div></div></div>";	
}
function confirmaEliminar(idRegistro, archivoEliminar)
{ 
	document.location.href = "proceso/"+archivoEliminar+"?idRegistro="+idRegistro; 
}
function vaciarMsg()
{
	document.getElementById('errMessage').innerHTML = '';			
}
function eliminarRegistroAsociado(descRegistro,idRegistro)
{
	document.getElementById('errMessage').innerHTML = "<div class='info' style='overflow:hidden;'><div style='width:35px; height:35px; float:left; margin-right:5px'><img src='images/interrogacion.png' width='35' height='35'></div><div style='width:420px; float:left; margin-top:10px'><div>No se puede ELIMINAR el Registro,<div style='margin:0px'><strong>"+descRegistro+"</strong>ya que tiene Asociado un Reporte</div></div><div style='width:420px; float:left; margin-top:10px '></div><div style='width:420px; float:left; margin-top:10px'><div style='text-align:center'><input name='button2' type='button' onClick='vaciarMsg()' style='margin-left:3px; width:60px' class='botones' id='button2' value='Ok'></div></div></div></div>";	
}

function checboxControl(chec,textbox)
{
	var casilla = document.getElementById(chec).checked;
	if(casilla == true) 
	{
		document.getElementById(textbox).value = "1";
	}	
	else
	{
			document.getElementById(textbox).value = "0";
	}
}
