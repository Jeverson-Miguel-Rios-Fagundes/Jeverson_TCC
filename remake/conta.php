<?php
//conectar ao banco de dados.
include("conecta.php");

include("protecao.php");

if (!isset($_SESSION)) {
    session_start();
}

if (!isset( $_SESSION['id'])) {

    die("Você não pode acessar está página porque não está logado!<p><a href=\"index.html\">Entrar</a></p>");
    
}else {
    $sessao = $_SESSION['id'];
}

session_regenerate_id(true);

// Seleciona todos os dados da tabela usuário
$sql = "SELECT * FROM usuario WHERE id_usuario = $sessao";

// Executa o Select
$resultado = mysqli_query($mysqli,$sql);


//Lista os itens
echo '<table border=4;">
<tr>
<th>Nome</th>
<th>Email</th>
<th>Senha</th>
<th colspan=3>Opções</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['nome'].'</td>';
echo '<td>'.$dados['email'] .'</td>';
echo '<td>'.$dados['senha'] .'</td>';

echo '<td> <a href="formeditcont.php?id='.$dados['id_usuario'].'"> <img src="icone/editar.png" width="40" height="40"> </a> </td>';

echo '<td> <a href="excluircont?id='.$dados['id_usuario'].'"> <img src="icone/lixeira.png" width="40" height="40"> </a> </td>';

echo '</tr>';
}

echo '</table> <br>';

echo "<p><a href=\"logout.php\">Voltar</a></p>";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados da sua conta</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        table{
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%, -50%);
            font-size:30px;
        }

        a{
            font-size:30px;
            margin-left:30px;
        }
    </style>
</head>

<body>
    
</body>

</html>