<?php

include("protecao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela especial</title>

</head>
<body>

<h1>Bem vindo <?php echo $_SESSION['nome']; ?> usuário especial.</h1>

<p><a href="logout/logout.php">Voltar</a></p>
    
</body>
</html>