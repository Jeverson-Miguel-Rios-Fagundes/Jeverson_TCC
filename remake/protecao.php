<?php

if (!isset($_SESSION)) {
    session_start();
}

if (!isset( $_SESSION['id'])) {

    die("Você não pode acessar está página porque não está logado!<p><a href=\"index.html\">Entrar</a></p>");
    
}

session_regenerate_id(true);

?>

