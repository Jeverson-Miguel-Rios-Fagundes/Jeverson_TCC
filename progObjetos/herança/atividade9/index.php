<?php

include_once "contaPoupanca.php";

$poupanca = new Poupanca("17/10/2024", 10000);
echo "O dia de rendimento é: ". $poupanca->getDiaRendimento() . "<br><br>";
$poupanca->depositarSaldo(10000);
$poupanca->sacarSaldo(15000);
echo "O seu saldo é: " . $poupanca->getSaldo() . "<br><br>";
