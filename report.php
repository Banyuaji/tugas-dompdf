<?php
    require 'vendor/autoload.php';
    use Dompdf\Dompdf;
    $dom = new Dompdf();
    $dom->loadHtml('Menggunakan Library DOMpdf untuk membuat Report PDF dengan DOM pdf');
    $dom->setPaper('A4','landscape');
    $dom->render();
    $dom->stream('hasil_report.pdf');
?>