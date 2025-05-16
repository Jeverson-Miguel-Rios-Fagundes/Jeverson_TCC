<?php

if ($_POST) {
    
    if ($_POST) {
    
        include("funcoes.php");
    
        $n1 = $_POST['n1'];
    
        echo "O resultado foi: ". raiz ($n1);
    }
    
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raiz  de valore.</title>

</head>

<body>

    <h1>Raiz quadrada de um valor.</h1>

    <hr>

    <form action="" method="post">

    <label for="n1">Informe o valor:</label>
    <input type="number" name="n1" id="n1"><br><br>

    <input type="submit" value="Enviar"><br>

    <a href="exercicio7.php">Voltar</a>
    </form>


    
</body>

</html>