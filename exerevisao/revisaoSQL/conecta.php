<?php

$bdServidor = "localhost";
$bdUsuario = "root";
$bdSenha = "";
$bdBanco = "caixa_eletronico";

$mysql = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if ($mysql->error) {
    
    die("falha ao conecftar ao bancod e dados");
}else {
    
}