<?php
// Recebe o id da historia
$id = $_GET['id'];

// Conectar ao BD
include("conecta.php");

// Seleciona os dados da historia da tabela historia
$sql = "SELECT * FROM historia WHERE id_historia=$id";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar historia</title>
</head>
<body>

    <h1> Editar história</h1>

    <form action="editar.php" method="post">
        ID:
        <input type="text" value="<?php echo $dados['id_historia'];?>" name="id"/> <br><br>
        1° escolha:
        <input type="text" value="<?php echo $dados['texto1'];?>" name="texto1"/> <br><br>
        2° escolha:
        <input type="text" value="<?php echo $dados['texto2'];?>" name="texto2"/> <br><br>
        ID de destino da 1° escolha:
        <input type="text" value="<?php echo $dados['escolha1'];?>" name="escolha1"/> <br><br>
        ID de destino da 2° escolha:
        <input type="text" value="<?php echo $dados['escolha2'];?>" name="escolha2"/> <br><br>
        Nome da imagem:
        <input type="text" value="<?php echo $dados['nome_imagem'];?>" name="imagem"/> <br> <br>
        Texto:
        <textarea name="texto" id="texto" cols="30" rows="10"><?php echo $dados['texto'];?></textarea><br><br>
        <input type="submit" value="Editar"/>
    </form>
    
</body>
</html>