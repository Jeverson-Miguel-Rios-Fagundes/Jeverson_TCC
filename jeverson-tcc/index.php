<?php

//incluir o arquivo que exibe as mensagens para o usuário
require_once "boasPraticas/notificacoes.php";

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>


    <style>
        .espacamento {
            margin-bottom: 30px;
        }
    </style>


</head>

<body>

    <!--INDEX.PHP-->

    <!--Esta é a tela de login dos usuários do sistema.-->

    <main class="container">

        <h1 class="center-align">Tela de login</h1>

        <?php

        //chamar a função que imprime a notificação para o usuário.
        exibirNotificacoes();

        //chamar a função que limpa a notificação de dentro da sessão.
        limpaNotificacoes();

        ?>
        <form action="login.php" method="post">

            <div class="card-panel">

                <div class="row">

                    <div class="input-field col s12 espacamento">
                        <i class="material-icons prefix">mail_outline</i>
                        <input placeholder="Digite o seu email" id="email" name="email" type="text" class="validate" pattern="^(?!\s*$)[^\s@']+@[^\s@']+$" required>
                        <label for="email">Email</label>
                        <span class="helper-text" data-error="O campo deve conter o @, exemplo : user@gmail.com, este campo não deve conter aspas simples."></span>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix">lock_outline</i>
                        <input id="senha" type="password" placeholder="Digite a seu senha" class="validate" name="senha" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
                        <label for="senha">Senha</label>
                        <span class="helper-text" data-error="Deve ter oito caracteres no mínimo e conter pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial."> </span>
                    </div>
                    <ul>
                        <li><a href="recuperarSenha/form-recuperar-senha.php">Esqueci minha senha</a></li>
                        <li><a href="crudAluno/formcadAluno.php">Não possui conta? Clique aqui!</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col s12">
                    <p class="center-align">
                        <button class="btn waves-effect waves-light #2e7d32 green darken-3 lighten-3" type="submit" name="action">Logar
                            <i class="material-icons right">send</i> </button>
                    </p>
                </div>
            </div>
        </form>

    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

</body>

</html>