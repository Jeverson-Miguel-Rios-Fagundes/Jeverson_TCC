<?php

//Incluir o composer.
include("vendor/autoload.php");

//Referênciar o namespace Dompdf.
use Dompdf\Dompdf;

//Instânciar e usar o Dompdf.
$dompdf = new Dompdf();

//Instânciar o método.
$dompdf->loadHtml('Eu sou o melhor de todos!!!');

//Configurar o tamanho e a orienação do papel.
//landscape - Imprimir no formato paisagem.
$dompdf->setPaper('A4', 'landscape');

//Redenrizar o html como pdf.
$dompdf->render();

//Gerar o pdf.
$dompdf->stream();
?>