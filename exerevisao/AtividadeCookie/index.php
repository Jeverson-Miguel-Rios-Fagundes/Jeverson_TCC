<?php

if ($_POST) {

    $tema = $_POST['tema'];

    $cookie = "Teste";

    setcookie($tema, $tema, time() + 3600);

    if (isset($_COOKIE[$tema]) == $tema) {
        
        $cor = $_COOKIE[$tema];

        ?>

        <style>

            body{
                background-color: <?php echo $cor ?>;
            }
        </style>

        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha o seu tema</title>

</head>

<body>

<h1>Escolha o tema!</h1>

<form action="" method="post">

<label for="escuro">Escuro:</label>
<input type="radio" name="tema"  id="escuro" value="grey" ><br><br>

<label for="claro">Branco:</label>
<input type="radio" name="tema" id="claro" value="greenyellow"><br><br>

<input type="submit" value="Enviar escolha">

</form>

<?php

if (isset($cor) ) {
    
    if ($cor == "grey") {
        
        echo '<h2> ' . 'O tema é escuro:' . ' ' . $cor .'</h2>';

    }else {
        
        if ($cor == "greenyellow") {
            
            echo '<h2> ' . 'O tema é claro:' . ' ' . $cor .'</h2>';

        }
    }
    
}else {

}

?>
    
</body>

</html>