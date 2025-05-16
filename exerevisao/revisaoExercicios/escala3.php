<?php

if ($_POST) {
    
    if ($_POST) {
    
        include("funcoes.php");
    
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
    
        echo "A divisão deu: ". div($n1, $n2);
    }
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dividir valores.</title>

</head>

<body>

    <h1>Dividir valores.</h1>

    <hr>

    <form action="" method="post">

    <label for="n1">Dividendo:</label>
    <input type="number" name="n1" id="n1"><br><br>

    <label for="n2">Divisor:</label>
    <input type="number" name="n2" id="n2"><br><br>

    <input type="submit" value="Enviar"><br>

    <a href="exercicio7.php">Voltar</a>
    </form>


    
</body>

</html>