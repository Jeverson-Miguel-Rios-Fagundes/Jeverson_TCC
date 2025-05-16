
<?php

session_start();

if (!isset($_SESSION['user'])) {

    header("location: index.html");

}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial do sistema</title>

</head>

<body>

<h1>Tela inicial do sistema!</h1>

<h2>Bem vindo usuario : <?php echo $_SESSION['user'];?> </h2>

<a href="logout.php" >Voltar</a>
    
</body>

</html>