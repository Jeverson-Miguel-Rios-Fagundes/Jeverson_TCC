<?php

$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "criptografia";

$mysql = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($mysql->error) {
    
    echo "Falha ao conectar no banco de dados: " . $mysql->error;
}else {
    
}


?>