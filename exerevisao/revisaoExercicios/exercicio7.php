
<?php

if ($_POST) {
    
    $num = $_POST['num'];

    if ($num < 1 or $num > 5) {
       
        echo "Não temos essa operação no menu de opções.";

    }else{

        if ($num == 1) {
            
            header("location: escala1.php");
        }else {
            
            if ($num == 2) {
                
                header("location: escala2.php");
            }else {
                
                if ($num == 3) {
                
                    header("location: escala3.php");
                }else {
                    
                    if ($num == 4) {
                
                        header("location: escala4.php");
                    }else {
                        
                        if ($num == 5) {
                
                            header("location: escala5.php");
                        }
                    }
                }
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7.</title>

</head>

<body>

    <h1>Exercicio 7.</h1>

    <h2>Descrição.</h2>

    <p>Faça um programa onde o usuário possa selecionar quais das opções ele gostaria de executar, recebendo a opção do usuário e os dados necessários em cada operação. Para cada opção, uma função deverá ser implementada.
   Menu opções:</p>

    <p>1. Verifique se um número é par ou ímpar.</p>

	<p>2. Multiplicar dois números.</p>

	<p>3. Dividir dois números.</p>

	<p>4. Raiz quadrada de um número.</p>

	<p>5. Elevar um número a uma potência.</p>

    <hr>

    <form action="" method="post">

    <label for="num">Informa um dos números aciam para poder realizar uma das operações:</label>
    <input type="number" name="num" id="num"><br><br>

    <input type="submit" value="Enviar"><br><br>

    <a href="index.php">Voltar</a>

    </form>

    

</body>

</html>