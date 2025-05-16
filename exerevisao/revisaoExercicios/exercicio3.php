
<?php

if ($_POST) {
    
    include("funcoes.php");

    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    echo "O valor é : " . vardadeiroFalso($n1, $n2, $n3);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3.</title>

</head>

<body>

    <h1>Exercicio 3.</h1>

    <h2>Descrição.</h2>

    <p>3 - Crie uma função que receba 3 valores (a, b, c) e retorne verdadeiro se a>b>c e falso em caso contrário.</p>

    <hr>

    <form action="" method="post">

        <label for="n1">Informe o primeiro número:</label>
        <input type="text" name="n1" id="n1"><br><br>

        <label for="n2">Informe o segundo número:</label>
        <input type="text" name="n2" id="n2"><br><br>

        <label for="n3">Informe o terceiro número:</label>
        <input type="text" name="n3" id="n3"><br><br>

        <input type="submit" value="Enviar"><br>

        <a href="index.php">Voltar</a>
        
    </form>


    
</body>

</html>