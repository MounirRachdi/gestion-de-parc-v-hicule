
<?php
require("pdf/fpdf.php");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',20);
$pdf->Write(5,'Pour découvrir les nouveautés de ce tutoriel, cliquez ');
$pdf->SetFont('','U');
$link = $pdf->AddLink();
$pdf->Write(5,'ici',$link);
$pdf->SetFont(''); $pdf->Text(120,48,"mmmmmmmmmmmmmmmmmmmmmmmmm");
 $pdf->Output("rapport.pdf","I");


 ?>