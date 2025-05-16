<?php

include ("conecta.php");

$sql = "SELECT * FROM arquivos";

$resultado = mysqli_query($mysql, $sql);

if ($resultado != false) {
    
    $arquivos = mysqli_fetch_all($resultado, MYSQLI_BOTH);
   

}else {

    echo "Deu error";
    
}

?>

<!DOCTYPE html>
<html lang="pt-br">        

<head> 

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 

</head>

<body>

    <h1>Informe o arquivo.</h1>

    <form action="upload.php" enctype="multipart/form-data" method="post">

        <label for="arquivo">Informe o seu arquivo</label>
        <input type="file" name="arquivo"><br><br>

        <input type="submit" value="Enviar">
    </form>
    <br><br>

    <hr>

    <table border="2">

    <thead>

        <tr>

            <th>Nome do arquivo</th>
            <th colspan="2">Opções</th>

        </tr>

    </thead>

    <tbody>

    <?php

    foreach ($arquivos as $arquivo) {

        $arqui = $arquivo['nome_arquivo'];

        
        echo "<tr>";//iniciar a linha
        
        echo "<td>$arqui</td>";//1ª coluna com o nome do arquivo

        echo "<td>";

        echo "<a ";//abriu o link
        
        echo "href= 'alterar.php?nome_arquivo= $arqui'>";//inserir o link
        
        echo "Alterar ";//imprimiu o texto da tag a
        
        echo "</a>";//fechei o link

        echo "</td>";//fechei a 2ª coluna.

        echo "<td>";//abri a 3ª coluna.

        echo "<button ";//abrir o botão.

        echo "onclick=";//criou o atributo onclick.

        echo "'excluir(\" $arqui\");'>";//chamamos a função excluir no onclick.
        
        echo "Excluir";//Motramos o texto de excluir do botão
        
        echo "</button>";//fechamos o botão.
        
        echo "</td>";//fechamos a 3ª coluna.

        echo "</td>";//fechamos a linha.
    }

    ?>

    </tbody>

    </table>

    <script>
        function excluir(nome_arquivo) {
            
            confirm("Você tem certeza que quer excluir o arquivo " + nome_arquivo + "?");

        }
    </script>

    

</body>

</html>
