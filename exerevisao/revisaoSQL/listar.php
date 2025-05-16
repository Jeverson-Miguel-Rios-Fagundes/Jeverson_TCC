<?php

//conectar ao banco de dados.
include("conecta.php");

//comando sql.
$sql = "SELECT * FROM saldo";

// Executa o Select
$resultado = mysqli_query($mysql,$sql);

//Lista os itens
echo '<table border=4;">
<tr>
<th>Seu saldo</th>
<th colspan=3>Operações</th>
</tr>';

while ($dados = mysqli_fetch_assoc($resultado)) {
echo '<tr>';    
echo '<td>'.$dados['saldo'] .'</td>';

echo '<td> <a href="depositar.php?id='.$dados['id_saldo'].'"> Depositar </a> </td>';

echo '<td> <a href="sacar.php?id='.$dados['id_saldo'].'"> Sacar</a> </td>';

echo '</tr>';
}

echo '</table> <br><br>';

if ($mysql->error) {
    die("Falha ao listarsaldo no sistema:". $mysql->error);
}

echo "<a href=\"index.html\">Voltar</a>"
?>


