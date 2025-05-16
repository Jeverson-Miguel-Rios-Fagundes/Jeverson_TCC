<?php

$nome_arqivo = $_GET['nome_arquivo'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>

</head>

<body>

<form action="upload.php" method="post" enctype="multipart/form-data">


Alterando o arquivo <?php echo $nome_arqivo ?> <br><br>

<input type="hidden" name="nome_arquivo" value="<?php echo $nome_arqivo; ?>">

<input type="file" name="arquivo"><br><br>

<input type="submit" value="Upload do arquivo">
</form>
    
</body>

</html>