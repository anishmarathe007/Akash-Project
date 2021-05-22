<?php

require("html2fpdf.php");

$htmlFile = "bill.php";
$buffer = file_get_contents($htmlFile);

$pdf = new HTML2FPDF('P', 'mm', 'Letter');
$pdf->AddPage();
$pdf->WriteHTML($buffer);
$pdf->Output('test.pdf', 'F');

?>
