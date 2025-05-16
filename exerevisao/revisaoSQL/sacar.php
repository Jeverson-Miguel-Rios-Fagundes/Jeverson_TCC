<?php
// Recebe o id do usuário
$id = $_GET['id'];

// Conectar ao BD
include("conecta.php");


// Seleciona os dados do usuário da tabela usuáriio
$sql = "SELECT * FROM saldo WHERE id_saldo = $id";

// Executa o Select
$resultado = mysqli_query($mysql,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sacar saldo</title>
    
</head>
<body>

<form action="sacarsaldo.php" method="post">

    <h2>Sacar</h2>

    <input  type="hidden" value="<?php echo $dados['id_saldo'];?>" name="id"/>

    <label for="saldo">Seu saldo:</label>
    <input type="text" readonly value="<?php echo $dados['saldo'];?>" name="saldo" id="saldo"/><br><br>
        
    <label for="saque">Informe o valor do saque:</label>
    <input type="text" name="saque" id="saque" placeholder="Use como exemplo 1.50"><br><br>
       
    <input type="submit" value="Sacar"/>

    <p>Deseja <a href="index.html">Voltar!</a></p>

</form>
    
</body>
</html>
