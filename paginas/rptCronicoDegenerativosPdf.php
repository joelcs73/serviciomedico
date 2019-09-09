<?php 
require('../fpdf/fpdf.php');

include_once('../clases/clsConexion.php');
include_once('../clases/clsPaciente.php');
include_once('../clases/funciones.php');


class PDF extends FPDF {
	private $v_fecha;
    private $v_grupo;
    private $v_campo;
    private $v_etiqueta;

	public function setFecha($fec){$this->v_fecha=$fec;}
	public function getFecha(){return $this->v_fecha;}

    public function setGrupoSanguineo($gs){$this->v_grupo=$gs;}
    public function getGrupoSanguineo(){return $this->v_grupo;}

    public function setCampo($cpo){$this->v_campo=$cpo;}
    public function getCampo(){return $this->v_campo;}

    public function setEtiqueta($et){$this->v_etiqueta=$et;}
    public function getEtiqueta(){return $this->v_etiqueta;}

    // Cabecera de página
    function Header(){
        // Logo
        //$this->Image('../imagenes/logotipo.jpg',10,11,45);

        $m1=5; // es el margen en el encabezado
        $this->SetY(10);
        $this->SetX($m1);
        $this->SetFont('Arial','',12);
        $this->Cell(192,5,utf8_decode('CONGRESO DEL ESTADO DE VERACRUZ DE IGNACIO DE LA LLAVE.'),0,1,'L');
        $this->SetX($m1);
        $this->SetFont('Arial','',11);
        $this->Cell(192,5,utf8_decode('Oficina de Servicios Médicos.'),0,1,'L');
        $this->SetX($m1);
        $this->SetFont('Arial','',9);
        $this->Cell(40,5,utf8_decode('Reporte de pacientes que padecen:'.$this->getEtiqueta()),0,1,'L');
        $this->SetY(25);
        // $this->Cell(343,5,utf8_decode('Fecha:'.$this->getFecha()),0,1,'R');
        // Logo derecha
        //$this->Image('../imagenes/logoCentenarioVertical.jpg',5,80,20,60);
    }

    // Pie de página
    function Footer(){
        // Posición: a 1,5 cm del final
        $this->SetY(-20);
        // Arial italic 8
        $this->SetFont('Arial','',8);

        // $this->SetFont('Arial','',10);
        // Número de página
        $this->Cell(345,5,utf8_decode('Página '.$this->PageNo().' de {nb}'),0,0,'R');
    }

    function FancyTable($paramQuery){
        $oCon = new clsConexion;
        $oCon->abrir_conexion();
    // Colores, ancho de línea y fuente en negrita
       $this->SetFillColor(110,110,110);
        $this->SetTextColor(255);
        //$this->SetDrawColor(128,0,0);
        $this->SetLineWidth(.3);
        $this->SetFont('Arial','',8);
    // Cabecera
        $header = array("NOMBRE","SEXO","EDAD","TELÉFONO","CONTACTO","CORREO","DEPARTAMENTO");
        $w = array(70, 16, 10, 45, 45, 55, 100);

        for($i=0;$i<count($header);$i++){
            $this->Cell($w[$i],5,utf8_decode($header[$i]),1,0,'l',true);
        }
        $this->Ln();
    // Restauración de colores y fuentes
        $this->SetFillColor(237,237,237);
        $this->SetTextColor(0);
        $this->SetFont('Arial','',8);
        // Datos
        $fill = false;

        $marcoDeCelta = "";

        $linea = 0;
        $tantos = 0;
        $result=mysqli_query($oCon->obtener_conexion(),$paramQuery);
        // $this->SetY(49);
        while($row = mysqli_fetch_assoc($result)){
            $this->Cell($w[0],4,utf8_decode($row["nombre"]),$marcoDeCelta,0,'L',$fill);
            $this->Cell($w[1],4,utf8_decode($row["sexo"]),$marcoDeCelta,0,'L',$fill);
            $this->Cell($w[2],4,utf8_decode($row["edad"]),$marcoDeCelta,0,'C',$fill);
            $this->Cell($w[3],4,utf8_decode($row["celular"]),$marcoDeCelta,0,'L',$fill);
            $this->Cell($w[4],4,utf8_decode($row["contacto"]),$marcoDeCelta,0,'L',$fill);
            $this->Cell($w[5],4,utf8_decode($row["correo"]),$marcoDeCelta,0,'L',$fill);
            $this->Cell($w[6],4,utf8_decode($row["nombreDepartamento"]),$marcoDeCelta,0,'L',$fill);
            $this->Ln();
            $linea = $linea + 1;

            $fill = !$fill;
        }
        // Línea de cierre
        $this->Ln();
        $this->Cell($w[0],4,$linea.' pacientes',$marcoDeCelta,0,'L',$fill);
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $oCon->cerrar_conexion();
    }
}


$campo = $_GET['c'];
$etiqueta = $_GET['e'];


$objPaciente = new clsPaciente();

//Crear instancia de la clase que se declaró al inicio de este archivo
$pdf = new PDF('L','mm','Legal');

//Definir alias para el número de páginas
$pdf->AliasNbPages();

// Establecer márgenes izquierdo, superior, derecho
$pdf->SetMargins(5,5);

$pdf->setCampo($campo);
$pdf->setEtiqueta($etiqueta);
// $pdf->setFecha(getdate());

//$pdf->AliasNbPages();
$pdf->SetFillColor(232,232,232);
$pdf->SetLinewidth(.6);
$pdf->AddPage();

$strQry = $objPaciente->qryReporteCronicoDegenerativos($campo);

$pdf->FancyTable($strQry);
$pdf->Output();
?>