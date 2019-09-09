<?php 
include("conexion.php");
//require 'Kint.class.php';
class Tree{

	private $_elementos = array();
	private $_consulta;

	public function __construct($consulta){
	//	$consulta: el query que traerá los datos de la tabla.
		$this->_consulta=$consulta;

	}

	public function get(){
		$query = mysql_query($this->_consulta);
		
		$this->_elementos["padres"] = $this->_elementos["hijos"] = array();

		while($elemento=mysql_fetch_array($query)){
			if($elemento["padre"]==0){
				array_push($this->_elementos["padres"], $elemento);
			} else {
				array_push($this->_elementos["hijos"], $elemento);
			}
		}
		return $this->_elementos; 
	}

	public static function nested($rows = array(),$parent_id,$campoId,$campoTitulo,$campoPadre,$campoTieneHijos){
		$html = "";
		if(!empty($rows)){
			$html.="<ul style='list-style: none;'>";
			foreach ($rows as $row) {
				if($row[$campoPadre] == $parent_id){
					$html.="<li style='margin:5px 0px'>";
					$html.="<span><i class='glyphicon glyphicon-folder-open'></i></span>";
					//$html.="<a href='#' data-status='".$row[$campoTieneHijos]."' style='margin: 5px 6px' class='label label-warning label-xs btn-folder'>";
					$html.="<a href='#' data-status='".$row[$campoTieneHijos]."' style='margin: 5px 6px' class='btn-folder' id=".$row[$campoId].">";
					// if($row[$campoTieneHijos]==1){
					// 	$html.="<span class=glyphicon glyphicon-minus-sign'></span>".$row[$campoTitulo]."</a>";
					// } else {
					// 	$html.="<span class=glyphicon glyphicon-plus-sign'></span>".$row[$campoTitulo]."</a>";
					// }
					$html.=$row[$campoTitulo]."</a>";
					$html.=self::nested($rows,$row[$campoId],$campoId,$campoTitulo,$campoPadre,$campoTieneHijos);
					$html.="</li>";
				}
			}
			$html.="</ul>";
		}
		return $html;
	}
}
 ?>
