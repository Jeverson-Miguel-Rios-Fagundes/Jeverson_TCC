<?php

if ($_POST) {
    
    include("funcoes.php");

    $n1 = $_POST['ano'];
    $n2 = $_POST['mes'];
    $n3 = $_POST['dia'];

    echo "A data está : " . data ($n1, $n2, $n3);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 4.</title>

</head>

<body>

    <h1>Exercicio 4.</h1>

    <h2>Descrição.</h2>

    <p>4 - Crie uma função que receba três valores como argumentos (ano, mês, dia) e verifique se é uma data válida. O ano deverá estar entre 1900 e o presente ano. Deverá retornar uma mensagem de válido ou inválido.</p>

    <hr>

    <form action="" method="post">

    <label for="data">Informe a data:</label>
    
    <input type="text" name="ano" id="data" placeholder="ano">

    <input type="text" name="mes" id="data" placeholder="mes">

    <input type="text" name="dia" id="data" placeholder="dia">

    <input type="submit" value="Enviar"><br>

    <a href="index.php">Voltar</a>
    </form>


    
</body>

</html>