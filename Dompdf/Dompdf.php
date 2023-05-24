<?php
require_once "vendor/autoload.php";

use Dompdf\Dompdf;

$domPdf = new Dompdf();
$html = 'Nuevo archivo PDF con DomPdf';
$domPdf->loadHtml($html);
$domPdf->render();
$domPdf->stream("example.pdf");
