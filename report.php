<?php
require('vendor/autoload.php');
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf -> loadHtml('sadaah, xi rpl 1');
$dompdf -> setPaper('A4','potrait');
$dompdf -> render();
$dompdf -> stream('hasil.pdf');

?>