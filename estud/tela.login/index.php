<?php
//conectar ao banco de dados.
include("estud/conexao/conecta.php");

//verificar se exite a variável email e a variável senha.

if (isset($_POST['email']) or isset($_POST['senha'])) {
    
    //[isset]: é uma função do php que verifica se um dado ou dados existem.

    //verificar se o email ou senha foram deixados em branco ou os dois foram deixdos em branco.
    
    if (strlen($_POST['email']) == 0) {
        
        //[strlen]: é uma função que verifica a quantidade de caracteres em um campo de digitação.

        die("Você não preencheu o seu email.");
    }else {
        
        if (strlen($_POST['senha']) == 0) {
            
            die("Você não preencheu a sua senha.");
        }else {
            
            $email = $mysql->real_escape_string($_POST['email']);

            $senha = $mysql->real_escape_string($_POST['senha']);

            //[real_escape_string()]: é uma função que limpa os dados dentro de um campo de digitação.

            //comando sql.
            $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";

            //executar esse comando.
             $query = mysqli_query($mysql, $sql);

             $quantidade = $query->num_rows;

             if ($quantidade == 1) {

                $usuario = $query->fetch_assoc();

                if (!isset($_SESSION)) {
                    
                    session_start();
                }
                //a sesssão está recebendo o id_usuario que vem do banco de dados.
                $_SESSION['id'] = $usuario['id_usuario'];

                $_SESSION['nome'] = $usuario['nome'];

                header("location: protecao.php");

             }else {
                
                die("Falha ao logar! dados incorretos.");
             }

        }
    }
}


?>



<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>

</head>

<body>

<h1>Acessse sua conte!</h1>

<form action="" method="post">

<label for="gmail">Informe o seu email:</label>
<input type="email" name="email" id="email"><br><br>

<label for="senha">Informe sua senha: </label>
<input type="password" name="senha" id="senha"><br><br>

<input type="submit" value="Entrar">
</form>
    
</body>

</html>