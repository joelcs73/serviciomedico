<?php 
require('../fpdf/fpdf.php');

include_once('../clases/clsConexion.php');
include_once('../clases/clsPaciente.php');
include_once('../clases/funciones.php');


class PDF extends FPDF {
	private $v_fecha;
    private $v_grupo;

	public function setFecha($fec){$this->v_fecha=$fec;}
	public function getFecha(){return $this->v_fecha;}

    public function setGrupoSanguineo($gs){$this->v_grupo=$gs;}
    public function getGrupoSanguineo(){return $this->v_grupo;}

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
        $this->Cell(40,5,utf8_decode('Reporte de club de sangre.  Grupo:'.$this->getGrupoSanguineo()),0,1,'L');
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
        $header = array("NOMBRE","SEXO","DEPTO","EDAD","DIABETICO(A)","HIPERTENSO(A)","DISLIPIDÉMICO(A)","TELÉFONO","CORREO");
        $w = array(70, 16, 90, 10, 21, 24, 27, 22, 50);

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
        $result=mysqli_query($oCon->obtener_conexion(),$paramQuery);
        // $this->SetY(49);
        while($row = mysqli_fetch_assoc($result)){
            $this->Cell($w[0],4,utf8_decode($row["nombre"]),$marcoDeCelta,0,'L',$fill);
            $this->Cell($w[1],4,utf8_decode($row["sexo"]),$marcoDeCelta,0,'L',$fill);
            // $this->SetFont('Arial','',5);
            $this->Cell($w[2],4,utf8_decode($row["nombreDepartamento"]),$marcoDeCelta,0,'L',$fill);
            // $this->SetFont('Arial','',8);
            $this->Cell($w[3],4,utf8_decode($row["edad"]),$marcoDeCelta,0,'C',$fill);
            $this->Cell($w[4],4,utf8_decode($row["esDiabetico"]),$marcoDeCelta,0,'C',$fill);
            $this->Cell($w[5],4,utf8_decode($row["esHipertenso"]),$marcoDeCelta,0,'C',$fill);
            $this->Cell($w[6],4,utf8_decode($row["esDislipidemico"]),$marcoDeCelta,0,'C',$fill);
            // $this->SetFont('Arial','',5);
            $this->Cell($w[7],4,utf8_decode($row["telefono"]),$marcoDeCelta,0,'L',$fill);
            // $this->SetFont('Arial','',8);
            $this->Cell($w[8],4,utf8_decode($row["correo"]),$marcoDeCelta,0,'L',$fill);

            $this->Ln();
            $linea = $linea + 1;

            $fill = !$fill;
        }
        // Línea de cierre
        $this->Ln();
        
        $this->Ln();
        $this->Ln();
        $this->Ln();

    }
}


$grupoSanguineo = $_GET['g'];
// echo $grupoSanguineo;

$objPaciente = new clsPaciente();

//Crear instancia de la clase que se declaró al inicio de este archivo
$pdf = new PDF('L','mm','Legal');

//Definir alias para el número de páginas
$pdf->AliasNbPages();

// Establecer márgenes izquierdo, superior, derecho
$pdf->SetMargins(5,5);
$pdf->setGrupoSanguineo($grupoSanguineo);
// $pdf->setFecha(getdate());

//$pdf->AliasNbPages();
$pdf->SetFillColor(232,232,232);
$pdf->SetLinewidth(.6);
$pdf->AddPage();

$strQry = $objPaciente->qryReporteClubDeSangre($grupoSanguineo);


$pdf->FancyTable($strQry);
$pdf->Output();
?>