<?php

//conectar ao banco de dados.
include("conecta.php");

//recerber os dados.
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];

//comando sql.
$sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

//excutar o comando.
mysqli_query($mysqli, $sql);

//caso de erro.
if ($mysqli->error) {
    die("Falha ao cadastrar no banco de dados:" . $mysqli->error);

    header("location: index.html");

}else {
    header("location: index.html");
}