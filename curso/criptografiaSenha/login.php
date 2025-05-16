<?php

if (isset($_POST['senha'])) {
    
    if (strlen($_POST['senha']) == 0) {
        
        echo "Por favor digite sua senha corretamente!";

    }else {

        if (strlen($_POST['email']) == 0) {
        
            echo "Por favor digite o seu email corretamente!";

        }else {
            
            include("conecta.php");

            $email = $_POST['email'];
            $senha = $_POST['senha'];

            $sql = "SELECT * FROM teste WHERE email = '$email'";

            $query = mysqli_query($mysql, $sql);

            $usuario = $query->fetch_assoc();

            if (password_verify($senha, $usuario['senha'])) {

                echo "Deu certo e o usuário realizou o seu login com sucesso!";
            }else {
                
                echo "Falha ao logor, email ou senha incorretos!!";
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
    <title>Tela de login.</title>

</head>

<body>

<h1>Digite sua senha para realizar o seu login.</h1>

<form action="" method="post">

<label for="email">Informe o seu email:</label>
<input type="text" name="email" id="email"><br><br>

<label for="senha">Informe sua senha:</label>
<input type="text" name="senha" id="senha"><br><br>

<input type="submit" value="Logar">
</form>
    
</body>

</html>