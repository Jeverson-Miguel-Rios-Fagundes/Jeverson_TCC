<?php

include_once("CartaoCredito.php");
include_once("Boleto.php");

$cartao_credito = new CartaoCredito(12, "12/12/2022");
$cartao_credito->processarPagamento();

echo "<br><br>";

$boleto = new Boleto(25, "10/10/2006");
$boleto->processarPagamento();