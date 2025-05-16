<?php

if ($_POST) {
    
    include("funcoes.php");

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    echo "O maior número é : " . maiorNumero($num1, $num2, $num3);
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2.</title>

</head>

<body>

    <h1>Exercicio 2.</h1>

    <h2>Descrição.</h2>

    <p>2 - Crie uma função que receba 3 valores como argumento e retorne o maior valor.</p>

    <hr>

    <form action="" method="post">

        <label for="num1">Informe o primeiro número:</label>
        <input type="text" name="num1" id="num1"><br><br>

        <label for="num2">Informe o segundo número:</label>
        <input type="text" name="num2" id="num2"><br><br>

        <label for="num3">Informe o terceiro número:</label>
        <input type="text" name="num3" id="num3"><br><br>

        <input type="submit" value="Enviar"><br><br>

        <a href="index.php">Voltar</a>
        
    </form>
    
    
</body>

</html>