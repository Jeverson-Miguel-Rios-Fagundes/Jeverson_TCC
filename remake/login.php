<?php

//conectar ao banco de dados.
include("conecta.php");

//receber os dados.
$nome = $_POST["nome"];


if (isset($_POST['email']) || isset($_POST['senha'])) {
    
    $email = $mysqli->real_escape_string($_POST['email']);

    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha =  '$senha'";

    $sql_query = $mysqli->query($sql) or die("Falha na excução do código:" . $mysqli->error);

    $quantidade = $sql_query->num_rows;

    if ($quantidade ==1) {
        
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {

            session_start();
        }

        $_SESSION['id'] = $usuario['id_usuario'];

        //id_usuario vem do anco de dados.

        $_SESSION['nome'] = $usuario['nome'];

        header("location: protecaoadmi.php");

    }else {
        echo 'Falha ao logar! Você não está cadastrado!<p><a href="formcaduser.html">Criar conta!</a></p>';

    }
}


