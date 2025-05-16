<?php

if (isset($_POST['email']) and isset($_POST['senha'])) {
    
    if (strlen($_POST['senha']) == 0) {
        
        echo "Por favor digite sua senha!";
    }else {

        if (strlen($_POST['senha']) == 0) {
        
            echo "Por favor digite sua senha!";
        }else {
            
            include("conecta.php");

            $email = $_POST['email'];

            $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    
            $sql = "INSERT INTO teste (email, senha) VALUES ('$email','$senha')";
    
            mysqli_query($mysql, $sql);
    
            if ($mysql->error) {
                
                echo "Falha ao cadastrar no banco de dados: " . $mysql->error;
    
            }else {
                header("location: login.php");
            }
        }
       
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando criptografia.</title>

</head>

<body>

<h1>Realizar cadastro.</h1>

<form action="" method="post">

<label for="email">Informe o seu email:</label>
<input type="text" name="email" id="email"><br><br>

<label for="senha">Informe a sua senha:</label>
<input type="text" name="senha" id="senha"><br><br>

<button type="submit">Cadastrar</button>

</form>
    
</body>

</html>

