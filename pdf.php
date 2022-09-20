<?php
require('fpdf183/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Hello World!');

$mydir = "ETATS/";
$file = "output.pdf";

if (!is_dir($mydir)) :
    mkdir($mydir, 0777, true);
endif;

$var = $pdf->Output("F", $mydir . $file);

echo "file generated";