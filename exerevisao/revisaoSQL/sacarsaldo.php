<?php

// Conectar ao BD
include("conecta.php");

// receber os dados do formulário
$id = $_POST['id'];
$sacar = $_POST['saque'];
$saldo = $_POST['saldo'];

$sacarformatado = number_format($sacar, 2, '.',);

if ($sacar > $saldo) {
    
    echo "O valor que você quer sacar é menor que o seu saldo atual. Para realizar essa operção <p><a href=\"depositar.php?id=1\">Deposite mais saldo!</a></p>";
}else {
    
    $saqueresultante = $saldo - $sacarformatado;

    $sql = "UPDATE saldo SET 
    saldo = $saqueresultante WHERE id_saldo = $id";

if ($mysql->error) {

    die("Falha  no sistema:". $mysql->error);

}else {
    header("location: listar.php");
}
// executa o comando no BD
mysqli_query($mysql,$sql); 
}



?>