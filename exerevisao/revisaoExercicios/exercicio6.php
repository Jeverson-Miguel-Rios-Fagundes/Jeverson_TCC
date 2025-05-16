<?php

if ($_POST) {
    
    include("funcoes.php");

    $n1 = $_POST['n1'];

    echo "A sequência é : " . sequencia ($n1);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 6.</title>

</head>

<body>

    <h1>Exercicio 6.</h1>

    <h2>Descrição.</h2>

    <p>Dado um valor n informado pelo usuário. Use uma função que receba um valor n e imprima até a n-ésima linha.</p>

    <hr>

    <form action="" method="post">

    <label for="n1">Informe o número:</label>
    <input type="number" name="n1" id="n1"><br><br>

    <input type="submit" value="Enviar"><br>

    <a href="index.php">Voltar</a>
    </form>


    
</body>

</html>