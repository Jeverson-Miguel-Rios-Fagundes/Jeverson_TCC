<?php
require_once "conecta.php";
require_once "dompdf/autoload.inc.php";

use Dompdf\Dompdf;
use Dompdf\Options;

// Configurar opções do DOMPDF
$options = new Options();

// Permite usar CSS e fontes externas
$options->set('isRemoteEnabled', true);
$dompdf = new Dompdf($options);

// HTML inicial
$dados = '
<html>
<head>
<link rel="StyleSheet" type="Text/css" href="estilo.css">
<style>
body
 { font-family: Arial, sans-serif; }
h1
{
	color:#a1887f;
}
table {
  border-collapse: collapse;
  width: 100%;
}
td,th {
  text-align: left;
  padding: 10px;
}
tr:nth-child(even)
	{background-color: #f2f2f2}
thead 
{
  background-color: #a1887f;
  color: white;
}
</style>
</head>
<body>
';

//cabeçalho 1 com h1.
$dados .= "<h1 style='text-align:center;'>Relatório de clientes</h1>";

//cabeçalho 2 com o h2 mais uma imagem.
$dados .= "<h2 style='text-align:center'>Viajando na maionese
<img src='http://localhost/meterial/IMG_4719.jpg' heigth='35' width='40'></h2>";


$dados .= "<table>

<thead>


</thead>

</table>" ;
// Carrega o HTML no DOMPDF
$dompdf->loadHtml($dados);

// Define tamanho e orientação do papel
$dompdf->setPaper('A4', 'portrait');

// Renderizar o PDF
$dompdf->render();

// Enviar o PDF para o navegador
$dompdf->stream("relatorio.pdf", ["Attachment" => true]); 
// Attachment false para exibir no navegador