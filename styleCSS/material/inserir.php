<?php
include_once "conecta.php";
$CPF = $_POST['cpf'];
$nomeCliente = $_POST['nome'];
$dataNasc = $_POST['dataNasc'];
echo "$dataNasc";
$dataNasc = implode("-",array_reverse(explode("/",$dataNasc)));
echo "$dataNasc";

$sql = "INSERT INTO clientes(CPF,nomeCliente,dataNasc) 
VALUES ('$CPF','$nomeCliente','$dataNasc')";

$resultado = mysqli_query($mysql,$sql);
var_dump($resultado);
mysqli_close($mysql);

if ($resultado)
{
	header("Location:clientes.php");
} 
?>