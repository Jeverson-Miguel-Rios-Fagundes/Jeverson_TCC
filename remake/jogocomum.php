<?php

include("protecao.php");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do usuário</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            display: flex;
            background: greenyellow;
        }
        .caixa{
            position: absolute;
            border: 1px solid black;
            border-radius: 4px;
            padding: 30px;
            top: 50%;
            left:50%;
            transform: translate(-50%, -50%);
        }
        .caixa a{
            display: flex;
            text-align: justify;
            margin-top: 10px;
            margin-bottom: 15px;
            text-decoration: none;
            font-size: 25px;
            color: black;

        }
        .caixa a:hover{
            text-decoration: underline;
        }
        .caixa h2{
            font-size: 60px;
            text-shadow: 10px 10px 10px red;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .caixa h3{
            font-size: 50px;
            text-shadow: 15px 15px 15px brown;
            margin-bottom: 30px;
        }
        h4{
            display: flex;
            margin-top: 20px;
            margin-left: 25px;
            font-size: 20px;
            position:absolute;
        }
    </style>
</head>

<body>

<h4>Bem vindo usuário: <?php echo $_SESSION['nome']; ?> </h4>

<div class="caixa">

<h2>REMAKE</h2>
<h3>A sobrevivência de Etham</h3>

<a href="#">Jogar</a>

<a href="sinopse.php">Sinopse</a>

<a href="#">Créditos</a>

<a href="conta.php">Configurações da minha conta</a>

<a href="logout.php">Sair</a>

</div>
    
</body>

</html>