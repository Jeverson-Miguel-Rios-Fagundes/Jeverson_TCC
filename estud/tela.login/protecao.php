<?php

if (!isset($_SESSION)) {
    
    session_start();
}
if (!isset($_SESSION['id'])) {

    die("Você não pode acessar está página porque não esta logado. <p>Quer <a href=\"index.php\">Logar?</a></p>");

}else {
    
    if (isset($_SESSION['id'])) {
        
        $sessao = $_SESSION['id'];

        if ($sessao != 1) {
            
            header("location: norm.php");

        }else{

            header("location:espec.php");
        }
    }
}
session_set_cookie_params(['httponly' => true]);
session_regenerate_id(true);

?>