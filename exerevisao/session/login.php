<?php

//receber os dados.
$user = $_POST['user'];
$senha = $_POST['senha'];

if ($user == "Jeverson" and $senha = "1234") {
    
    //criar a session.
    session_start();

    $_SESSION['user'] = $user;

    header("location: inicial.php");

}else {
    
    echo "Este usuário não exisye no sistema!";
}
?>