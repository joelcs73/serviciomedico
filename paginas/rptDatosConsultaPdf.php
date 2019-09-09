<?php 
require('../fpdf/fpdf.php');
include_once '../clases/clsPaciente.php';

$idExp = $_GET["exp"];


$objPaciente = new clsPaciente();

$objPaciente->obtenerDatosDeConsulta($idExp);

$pdf = new FPDF();

//$pdf->AliasNbPages();
$pdf->SetFillColor(232,232,232);
$pdf->SetLinewidth(.6);
$pdf->AddPage('Portrait','Letter');

$pdf->SetY(18); $pdf->SetX(25);
$pdf->SetFont('Times','B',14);
$pdf->Cell(42,8,"Datos completos de la consulta:",0,1);
//$pdf->Ln(2);

// ---------- FECHA ---------- //
$pdf->SetY(28); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"Fecha:",0,1,'R',true);

$pdf->SetY(28); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,5,$objPaciente->getFechaDeConsulta(),0,1);
//$pdf->Ln(2);

// ---------- NOMBRE ---------- //
$pdf->SetY(34); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"Nombre:",0,1,'R',true);
//$pdf->Ln(2);

$pdf->SetY(34); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,5,utf8_decode($objPaciente->getNombreCompletoReceta()),0,1);
//$pdf->Ln(2);

// ---------- T.A ---------- //
$pdf->SetY(40); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"T.A:",0,1,'R',true);

$pdf->SetY(40); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,5,$objPaciente->getTa(),0,1);

// ---------- F.C ---------- //
$pdf->SetY(46); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"F.C:",0,1,'R',true);

$pdf->SetY(46); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,5,$objPaciente->getFc(),0,1);

// ---------- TEMP ---------- //
$pdf->SetY(52); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"Temp:",0,1,'R',true);

$pdf->SetY(52); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,5,$objPaciente->getTemperatura(),0,1);

// ---------- PESO ---------- //
$pdf->SetY(58); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"Peso:",0,1,'R',true);

$pdf->SetY(58); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->Cell(42,5,$objPaciente->getPeso(),0,1);

// ---------- GLUCOSA ---------- //
$pdf->SetY(64); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"Glucosa:",0,1,'R',true);

$pdf->SetY(64); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->Cell(20,5,$objPaciente->getGlucosa(),0,1);

// ---------- DX ---------- //
$pdf->SetY(71); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"DX:",0,1,'R',true);

$pdf->SetY(71); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5,utf8_decode($objPaciente->getDx()),0,'J');

// ---------- RP ---------- //
$pdf->SetY($pdf->getY()+2); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"RP:",0,1,'R',true);

$pdf->SetY($pdf->getY()-5); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5,utf8_decode($objPaciente->getTratamiento()),0,'J');

// ---------- NOTA ---------- //
$pdf->SetY($pdf->getY()+2); $pdf->SetX(25);
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,5,"Nota:",0,1,'R',true);

$pdf->SetY($pdf->getY()-5); $pdf->SetX(45);
$pdf->SetFont('Times','',12);
$pdf->MultiCell(0,5,utf8_decode($objPaciente->getNota()),0,'J');


$pdf->Output();
?>