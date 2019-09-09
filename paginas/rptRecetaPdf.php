<?php 
require('../fpdf/fpdf.php');

// include('../clases/conexion.php');
include('../clases/clsPaciente.php');

$idExp = $_GET["exp"];


$objPaciente = new clsPaciente();

$objPaciente->obtenerDatosDeConsulta($idExp);

$pdf = new FPDF();

//$pdf->AliasNbPages();
$pdf->SetFillColor(232,232,232);
$pdf->SetLinewidth(.6);
$pdf->AddPage('Portrait','Letter');



$pdf->SetY(28); $pdf->SetX(25);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,8,"Fecha: ".$objPaciente->getFechaDeConsulta(),0,1);
$pdf->Ln(2);

$pdf->SetY(34); $pdf->SetX(25);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,8,"Nombre: ".utf8_decode($objPaciente->getNombreCompletoReceta()),0,1);
$pdf->Ln(2);


$pdf->SetY(40); $pdf->SetX(10);
$pdf->Cell(25,8,"T.A:".$objPaciente->getTa(),0,1);

$pdf->SetY(40); $pdf->SetX(37);
$pdf->Cell(20,8,"F.C:".$objPaciente->getFc(),0,1);

$pdf->SetY(40); $pdf->SetX(59);
$pdf->Cell(25,8,"Temp:".$objPaciente->getTemperatura(),0,1);

$pdf->SetY(40); $pdf->SetX(86);
$pdf->Cell(30,8,"Peso:".$objPaciente->getPeso(),0,1);

$pdf->SetY(40); $pdf->SetX(118);
$pdf->Cell(42,8,"Glucosa:".$objPaciente->getGlucosa(),0,1);
$pdf->Ln(2);

// $pdf->SetY(40); $pdf->SetX(180);
// $pdf->Cell(42,8,"T.A:".$objPaciente->getTa(),0,1);

// $pdf->SetY(45); $pdf->SetX(180);
// $pdf->Cell(42,8,"F.C:".$objPaciente->getFc(),0,1);

// $pdf->SetY(50); $pdf->SetX(180);
// $pdf->Cell(42,8,"Temp:".$objPaciente->getTemperatura(),0,1);

// $pdf->SetY(55); $pdf->SetX(180);
// $pdf->Cell(42,8,"Peso:".$objPaciente->getPeso(),0,1);

// $pdf->SetY(60); $pdf->SetX(180);
// $pdf->Cell(42,8,"Glucosa:".$objPaciente->getGlucosa(),0,1);
// $pdf->Ln(2);

$pdf->SetX(10);
$pdf->MultiCell(0,5,utf8_decode($objPaciente->getTratamiento()));
$pdf->Output();
?>