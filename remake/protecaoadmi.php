<?php
if (!isset($_SESSION)) {
    session_start();
}
    if (isset($_SESSION['id'])) {
       
        $prot =  $_SESSION['id'];

        if ($prot !=1) {
            die("Você não pode acessar está página porque não é o administrador!<p><a href=\"index.html\">Voltar para página inicial</a></p>");
        }

    }


session_regenerate_id(true);

?>