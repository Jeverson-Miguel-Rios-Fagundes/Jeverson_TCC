<?php

//Caso o formulário tenha sido enviado.
if ($_POST) {

    $numero = $_POST['numero'];

    $bala = $_POST['bala'];

    $marciano = $_POST['marciano'];

    $direita = "Estou mais a direita!";

    $esquerda = "Estou mais a esquerda!";

    if ($numero > 100 or $numero < 1) {

      echo "Há apenas 100 árvores nessa floresta, digite um número de 1 a 100";

    }else {
      if ($numero == $marciano) {
        
        echo "Você acertou o Marciano na posição:" . $marciano . '<br><br>';

        echo "Com o número de tentaivas restantes = $bala" . '<br><br>'; 


      }else {
        
        if ($numero > $marciano ) {

          echo "Você errou. $esquerda" . '<br><br>';

          $bala = $bala -1;

          if ($bala < 1) {

            echo "Você disperdiçou todas as suas chances de acertar o Marciano e ele acaba o raptando e o levando para Marte a fim de fazer estudos com você. O Marciano estava na posição " . $marciano;

          }else {

            echo "Você ainda tem $bala tentativas.";
          }
        }else {
          
          if ($numero < $marciano) {
             echo "Você errou. $direita" . '<br><br>';

             $bala = $bala -1;

             if ($bala < 1) {

              echo "Você disperdiçou todas as suas chances de acertar o Marciano e ele acaba o raptando e o levando para Marte a fim de fazer estudos com você. O Marciano estava na posição " . $marciano;

            }else {
              echo "Você ainda tem $bala tentativas.";
            }

          } 
        }
      }
    }
       
}else {
    //Caso tenha um erro.
    $bala = 5;
    $marciano = rand(1,100);
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marciano</title>

</head>

<body>

<h1>Programação 3, exercícios de revisão.</h1>

<h2>Exercicio 1.</h2>

<h2>Marciano.</h2>

<p>Um Marciano envadiu a Terra e se escondeu em uma floresta com 100 árvores, você descobriu e foi com uma arma até lá, cada vez que você erra o tiro ele diz estou mais a direita ou a esquerda. Você tem 5 tentativas.</p>

<hr>

<form action="" method="post">

<label for="numero">Informe um número:</label>

<input type="text" name="numero" id="numero">

<input type="hidden" name="bala" value="<?php echo $bala; ?>">

<input type="hidden" name="marciano" value="<?php echo $marciano; ?>">


<input type="submit" value="Atirar">
</form> 

<h2>Exercicicios de funçoes.</h2>

<ul>

  <li> <a href="exercicio1.php">Exercicio 1.</a> </li> <br><br>

  <li> <a href="exercicio2.php">Exercicio 2.</a> </li> <br><br>

  <li> <a href="exercicio3.php">Exercicio 3.</a> </li> <br><br>

  <li> <a href="exercicio4.php">Exercicio 4.</a> </li><br><br>

  <li> <a href="exercicio5.php">Exercicio 5.</a> </li><br><br>

  <li> <a href="exercicio6.php">Exercicio 6.</a> </li><br><br>

  <li> <a href="exercicio7.php">Exercicio 7.</a> </li><br><br>

</ul>

<a href=""></a>

</body>

</html>