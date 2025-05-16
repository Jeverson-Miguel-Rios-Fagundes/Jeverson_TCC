<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_POST['id'];
$depositarsaldo = $_POST['deposito'];
$saldo = $_POST['saldo'];

$saldoformatado = number_format($depositarsaldo, 2, '.',);

$saldoresultante = $saldo + $saldoformatado;

$sql = "UPDATE saldo SET 
saldo = $saldoresultante WHERE id_saldo = $id";

if ($mysql->error) {

    die("Falha  no sistema:". $mysql->error);

}else {
    header("location: listar.php");
}
// executa o comando no BD
mysqli_query($mysql,$sql); 

?>