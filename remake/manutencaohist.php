<?php

include("protecao.php");

include("protecaoadmi.php");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manutencao de história</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: linear-gradient(45deg,greenyellow, cyan, yellow);
        }
        .caixa h1{
            font-size: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 23px;
        }
        .caixa a{
            font-size: 35px;
            text-decoration: none;
            color: black;
            display: flex;
            margin-bottom: 15px;
        }
        .caixa a:hover{
            text-decoration: underline;
            
        }
        .caixa{
            border: 1px solid black;
            border-radius: 8px;
            padding: 40px;
            position: absolute;
        }
    </style>

</head>

<body>

    <div class="caixa">
        <h1>Manutenção de história</h1>

        <a href="formcadhist.php">Cadastrar história</a>

        <a href="listarhist.php">Alterar história</a>

        <a href="jogoadmi.php">Voltar</a>
    </div>
    
</body>

</html>