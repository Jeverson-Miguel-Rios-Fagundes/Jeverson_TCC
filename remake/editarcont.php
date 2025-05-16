<?php

// Conectar ao BD
include("conecta.php");

include("protecao.php");

// receber os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];


$sql = "UPDATE usuario SET 
nome = '$nome', email = '$email', senha = '$senha' WHERE id_usuario = $id";

if ($mysqli->error) {

    die("Falha ao editar usuário no sistema:". $mysqli->error);

}else {
    header("location: conta.php");
}
// executa o comando no BD
mysqli_query($mysqli,$sql);