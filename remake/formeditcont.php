<?php
// Recebe o id da historia
$id = $_GET['id'];

// Conectar ao BD
include("conecta.php");

include("protecao.php");

// Seleciona os dados da historia da tabela historia
$sql = "SELECT * FROM usuario WHERE id_usuario = $id";

// Executa o Select
$resultado = mysqli_query($mysqli,$sql);

// Gera o vetor com os dados buscados
$dados = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuario</title>

    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            background-image: linear-gradient(45deg, cyan, greenyellow);
        }
        .caixa{
            position: relative;
            width: 380px;
            height: 420px;
            border: 1px solid black;
            border-radius: 8px;
        }
        .caixa form{
            position: absolute;
            inset: 4px;
            padding: 50px 40px;
            border-radius: 8px;
            z-index: 2;
            display: flex;
            flex-direction: column;
        }
        .caixa form h2{
            color: black;
            font-weight: 500;
            text-align: center;
            letter-spacing: 0.1em;
        }
        .caixa form .caixaTexto{
            position: relative;
            width: 300px;
            margin-top: 35px;
        }
        .caixa form .caixaTexto input{
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            border: none;
            box-shadow: none;
            color: black;
            font-size: 1em;
            letter-spacing: 0.5em;
            transition: 0.5s;
            z-index: 10;
        }
        .caixa form .caixaTexto span{
            position: absolute;
            left: 0;
            padding: 20px 0px 10px;
            pointer-events: none;
            color: black;
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }
        .caixa form .caixaTexto input:valid ~ span,
        .caixa form .caixaTexto input:focus ~ span
        {
            color: black;
            font-size: 0.75em;
            transform: translateY(-34px);
        }
        .caixa form .caixaTexto i{
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 2px;
            background: black;
            border-radius: 4px;
            overflow: hidden;
            transition: 0.5s;
            pointer-events: none;
        }
        .caixa form input[type="submit"]{
            outline: none;
            padding: 9px 25px;
            cursor: pointer;
            font-size: 0.9em;
            border-radius: 4px;
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .caixa form input[type="submit"]:hover{
            padding: 10px 26px;
        }
        
        .btn{
            color: white;
            border: none;
            margin-top:800px;
            position: absolute;
        }
        
    </style>
</head>
<body>

    <div class="caixa">

<form action="editarcont.php" method="post">

    <h2>Editar usuário</h2>

    <div class="caixaTexto">
    <input type="text" value="<?php echo $dados['nome'];?>" name="nome" id="nome"/> 
        <span>Nome</span>
        <i></i>
    </div>

    <div class="caixaTexto">
    <input type="email" value="<?php echo $dados['email'];?>" name="email" id="email"/>
        <span>Email</span>
        <i></i>
    </div>

    <div class="caixaTexto">
    <input type="text" value="<?php echo $dados['senha'];?>" name="senha" id="senha"/>
        <span>Senha</span>
        <i></i>
    </div>

    <input type="submit" value="Editar"/>

    <p>Deseja <a href="conta.php">Voltar!</a></p>

    <input class="btn" type="text" value="<?php echo $dados['id_usuario'];?>" name="id"/> <br><br>

</form>

</div>
    
</body>
</html>

