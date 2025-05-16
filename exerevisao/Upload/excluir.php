<?php

include("conecta.php");

$nome_arquivo = $_GET['nome_arquivo'];

$sql = "DELETE FROM arquivos WHERE nome_arquivo = $nome_arquivo";

mysqli_query($mysql, $sql);

if ($mysql->error) {
    
    die ("Falha ao excluir do banco de dados!" . $mysql->error);

}else {
    
    header("location: index.php");
}
?>