<?php

//arquivo de conexão com o banco de dados.

//dados necessários.
$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha= "";
$bdBanco = "estudioso";

//conectar.
$mysql = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

//em caso de erro.

if ($mysql->error) {
    
    die("Falha ao conectar com o banco: " . $mysql->error);
}else {
    //não acontece nada.
}

?>