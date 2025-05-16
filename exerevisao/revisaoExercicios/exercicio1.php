
<?php

if ($_POST) {
    
    include("funcoes.php");

    $numero1 = $_POST['numero1'];

    $numero2 = $_POST['numero2'];

    echo "O resultado da soma é: ". soma($numero1, $numero2);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1.</title>

</head>

<body>

    <h1>Exercicio 1.</h1>

    <h2>Descrição.</h2>

    <p>1 - Crie uma função que receba 2 valores como argumentos e retorne a sua soma. Se o valor da soma for negativo o método deverá retornar o valor 0.
    </p>

    <hr>

    <form action="" method="post">

        <label for="numero1">Informe o primeiro número:</label>
        <input type="text" name="numero1" id="numero1"><br><br>

        <label for="numero2">Informe o segundo número:</label>
        <input type="text" name="numero2" id="numero2"><br><br>

        <input type="submit" value="Enviar">
        
    </form>

    <a href="index.php">Voltar</a>
</body>

</html>