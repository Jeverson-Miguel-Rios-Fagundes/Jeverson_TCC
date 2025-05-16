<?php

//esta é a pasta de conexão com o banco de dados.
$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "uploads_arquivos";

$mysql = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($mysql->error) {
    
    die ("Falha ao conectar com o banco de dados! " . $mysql->error);
    
}else {
    

}
?>