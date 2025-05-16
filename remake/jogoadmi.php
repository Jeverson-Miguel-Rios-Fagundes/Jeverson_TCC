
<?php

include("protecao.php");

include("protecaoadmi.php");

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
            background-image: linear-gradient(90deg, cyan, yellow);
        }
        .caixa{
            position: absolute;
            border: 1px solid black;
            border-radius: 4px;
            padding: 30px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size:20px;
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
        .caixa h4{
            font-size: 40px;
            text-shadow: 15px 15px 15px red;
            margin-bottom: 30px;
        }
        .casa{
            display: flex;
            flex-direction: column;
            margin-top: 100px;
            margin-left: 75%;
            font-size: 25px;
        }
        .casa a{
            text-decoration: none;
            margin-bottom: 40px;
            color: black;

        }
        .casa a:hover{
            text-decoration: underline;
            font-size: 22px;
        }
        h3{
            display: flex;
            margin-top: 20px;
            margin-left: 25px;
            font-size: 20px;
            position:absolute;
        }
        .jogo{
            position: absolute;
            font-size:18px;
            margin-top:650px;
            margin-right: 900px;
            margin-left:35px;
        }
        .jogo:hover{
            font-size:19px;
        }

        

    </style>
</head>

<body>

    <h3>Bem vindo administrador: <?php echo $_SESSION['nome']; ?> </h3>

    <div class="casa">

    <a href="manutencaouser.php">Manutenção de usuários</a>

    <a href="manutencaohist.php">Manutenção de história</a>

    </div>

<div class="caixa">

<h2>REMAKE</h2>
<h4>A sobrevivência de Etham</h4>

<a href="game.php">Jogar</a>

<a href="sinopse.php">Sinopse</a>

<a href="#">Créditos</a>

<a href="conta.php">Configurações da minha conta</a>

<a href="logout.php">Sair</a>

</div>

<div class="jogo">
<a href="jogocomum.php">Deseja trocar de conta?</a>
</div>




    
</body>

</html>