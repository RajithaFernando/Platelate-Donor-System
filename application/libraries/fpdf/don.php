<?php
require('fpdf.php');


$pdf = new FPDF ('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);

$pdf->Cell(95 ,5,'Donation Report',0,0);

$pdf->Cell(95 ,5,$books['title'],1,0);
$pdf->Cell(93 ,5,$books['ISBN'],1,1);
$pdf->Output();
?>