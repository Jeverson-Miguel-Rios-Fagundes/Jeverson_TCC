<?php

if ($_POST) {
    
    include("funcoes.php");

    $n1 = $_POST['temperatura'];
    $n2 = $_POST['escala'];

    echo "A temperatura é : " . temperatura ($n1, $n2);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 5.</title>

</head>

<body>

    <h1>Exercicio 5.</h1>

    <h2>Descrição.</h2>

    <p>5. Escreva um programa onde um usuário digita uma temperatura e seleciona para qual deseja converter, de grau Celsius para Farenheit ou vice-versa. Para cada conversão selecionada, chame a função correta.
    </p>

    <hr>

    <form action="" method="post">

    <h3>Escalas.</h3>

    <p>1 =  Celsius para Farenheit.</p>

    <p>2 =  Farenheit para Celsius.</p>

    <label for="data">Informe a temperatura:</label>
    <input type="number" name="temperatura" id="temperatura"><br><br>

    <label for="escala">Informe a escala:</label>
    <input type="number" name="escala" id="escala"><br><br>

    <input type="submit" value="Enviar"><br>

    <a href="index.php">Voltar</a>
    </form>


    
</body>

</html>