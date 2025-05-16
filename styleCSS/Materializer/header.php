<?php

$pagina_corrente = basename($_SERVER['SCRIPT_NAME']);
?>

<div class="navbar-fixed">

    <nav class="light-green lighten-3">
        <div class="nav-wrapper" >
            <a href="#" class="brand-logo"><img class="responsive-img" src="sair.png" height="55" width="60"></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li <?php if ($pagina_corrente == 'index.php') {echo 'class = "active"';}?>> <a class="#00796b teal-text text-darken-2" href="index.php">Home</a></li>
                <li <?php if ($pagina_corrente == 'destinos.php') {echo 'class = "active"';}?>> <a class="#00796b teal-text text-darken-2" href="destinos.php">Destinos</a></li>
                <li <?php if ($pagina_corrente == 'quem.php') {echo 'class = "active"';}?>> <a class="#00796b teal-text text-darken-2" href="quem.php">Quem somos</a></li>
                <li <?php if ($pagina_corrente == 'login.php') {echo 'class = "active"';}?>> <a class="#00796b teal-text text-darken-2" href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>
    #004d40 teal darken-4
</div>