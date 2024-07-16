<?php
require '../vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

// Inicializa Dompdf con opciones
$options = new Options();
$options->set('isHtml5ParserEnabled', true);
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

// Carga el contenido HTML
$html = file_get_contents('ticket.php');

// Carga el HTML en Dompdf
$dompdf->loadHtml($html);

// Configura el tamaño de papel y la orientación
$dompdf->setPaper(array(0, 0, 85, 440), 'portrait');

// Renderiza el PDF
$dompdf->render();

// Muestra el PDF en el navegador (puede ser descargado si se cambia Attachment a 1)
$dompdf->stream("T-ticket_estatico.pdf", array("Attachment"=>0));
