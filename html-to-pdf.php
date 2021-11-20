<?php
require_once 'vendor/autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;
if ( isset( $_POST["html"] ) ) {
    $_POST["html"] = mb_convert_encoding($_POST["html"], 'HTML-ENTITIES', 'UTF-8');
    $_POST["html"] = stripslashes($_POST["html"]);
    $options = new Options();
    $options->set('isJavascriptEnabled', true);
    $options->setIsHtml5ParserEnabled(true);
    $options->setIsRemoteEnabled(true);
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml($_POST["html"],'UTF-8');
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();
    $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
}
exit;
?>