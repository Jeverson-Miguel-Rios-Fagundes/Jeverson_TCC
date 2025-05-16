
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JOGO</title>

<style>

        body{
            
            font-family: Arial, sans-serif;
            font-size:40px;
            background-image: url(imagem/R.jpeg);
            height: 100%;
            background-size: cover;
            
            
        }
            
        a{
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration:none;
        }
        a:hover{
            color: red;
            text-shadow: 6px 6px 10px red;
        }

        p {
        color: white;
        font-size: 40px;
        display: inline-block;
        white-space: pre-line;
        animation: appear 3s forwards;
        margin-top: 70px;
        margin-left: 30px;
    
    }
    .p1{
        margin-right: 1200px;
        font-size:20px;
        
    }

     p {
    opacity: 0;
   }

   @keyframes appear {
    to {
        opacity: 1;
    }
}

</style>

</head>
<body>
    

<?php 
// Recebe o id da historia

$id = (isset($_GET["id"]) ? $_GET["id"] : 0);

// Conectar ao BD
include("conecta.php");

// Seleciona os dados da historia da tabela historia
$sql = "SELECT * FROM historia WHERE id_historia=$id";

// Executa o Select
$resultado = mysqli_query($conexao,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

// Gerar variáveis para o texto
$texto= $dados['texto'];
$texto1 =  $dados['texto1'];
$escolha1 =  $dados['escolha1'];
$texto2 =  $dados['texto2'];
$escolha2 =  $dados['escolha2'];

echo '<p>'.$texto.'</p><br><br>';

if ($id == 6) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 10) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 1) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 23) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 18) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 21) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 26) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 28) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 38) {
    echo '<a href="morte12.php">Prosseguir</a>';
}

if ($id == 40) {
    echo '<a href="morte12.php">Prosseguir</a>';
}
if ($id == 41) {
    echo '<a href="morte12">Prosseguir</a>';
    
}
//35 e 36 mortes finais
if ($id == 35) {
    echo '<a href="morte13.php">Prosseguir</a>';
}
if ($id == 36) {
    echo '<a href="morte13.php">Prosseguir</a>';
}


if ($id == 106) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 110) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 101) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 123) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 118) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 121) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 126) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 128) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 138) {
    echo '<a href="morte14.php">Next</a>';
}

if ($id == 140) {
    echo '<a href="morte14.php">Next</a>';
}
if ($id == 141) {
    echo '<a href="morte14">Next</a>';
    
}
//35 e 36 mortes finais
if ($id == 135) {
    echo '<a href="morte15.php">Next</a>';
}
if ($id == 136) {
    echo '<a href="morte15.php">Next</a>';
}

else {
   
    echo '<a href="game.php?id='.$escolha1.'"> '.$texto1.' </a> <br><br>';
    echo '<a href="game.php?id='.$escolha2.'"> '.$texto2.' </a> <br>';
    echo '<a class="p1" href="index.html">Voltar ao incio</a>';
    echo '<a class="p1" href="ingles.html">Back to start</a>';
    
}
?>

</body>
</html>





