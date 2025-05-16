<?php

//está é a pasta de coneccão com o banco de dados.

$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "remake";

//conectar.
$mysqli = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

//caso de erro.
if ($mysqli->error) {
    die("Falha ao conectar ao banco de dados:" . $mysqli->error);
}