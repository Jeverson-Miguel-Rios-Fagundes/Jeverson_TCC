<?php

//PERFIL.PHP

//incluir o arquivo com as notificações do sistema para os alunos.
require_once "../boasPraticas/notificacoes.php";

// Conectar ao banco de dados jeverson-tcc.
require_once "../conecta.php";

//declarar a variável de conexão com o banco de dados jeverson-tcc. Esta veriavél vem do arquivo conecta.php.
$mysql = conectar();

// atribuir a variavél sql ($sql) a busca pelos dados do aluno que estpa logado no sistema no momento.
$sql = "SELECT nome, matricula, email, id_curso, id_aluno FROM aluno WHERE id_aluno = " . $_SESSION['aluno'][1];

//atribuir a variavél resultado ($resultado) o valor da execução do comando sql ($sql).
$resultado = excutarSQL($mysql, $sql);

//atribuir a variavél a aluno ($launo) o array associativo com os valores retornados da busca pelos dados do aluno.
$aluno = mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../materialize/css/materialize.min.css" media="screen,projection" />

    <title>Editar sua conta</title>


</head>

<body>

    <?php

    require_once "../boasPraticas/headerNav.php";
    ?>

    <main class="container">

        <h1 class="center-align">Informações da sua conta!</h1>
        <?php

        //chamar a função que exibe a notificação
        exibirNotificacoes();

        //chamar a função que limpa a notificação da sessão.
        limpaNotificacoes();
        ?>

        <form action="editarAluno.php" method="post">

            <div class="card-panel">

                <div class="input-field col s12">
                    <i class="material-icons prefix">person_outline</i>
                    <input placeholder="Digite o seu nome" value="<?php echo $aluno['nome']; ?>" id="nome" name="nome" type="text" class="validate" pattern="^.+$" required>
                    <label for="nome">Nome</label>
                    <span class="helper-text" data-error="Você deve preenchar esse campo"></span>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">confirmation_number</i>
                    <input placeholder="Digite sua matricula" value="<?php echo $aluno['matricula']; ?>" id="matricula" name="matricula" type="text" class="validate" pattern="^[0-9]{10}$" required>
                    <label for="mat">Matricula</label>
                    <span class="helper-text" data-error="A sua matricula deve conter 10 caracteres númericos"></span>
                </div>

                <div class="input-field col s12">
                    <i class="material-icons prefix">mail_outline</i>
                    <input placeholder="Digite o seu email" value="<?php echo $aluno['email']; ?>" id="email" name="email" type="text" class="validate" pattern="^(?!\s*$)[^\s@']+@[^\s@']+$" required>
                    <label for="email">Email</label>
                    <span class="helper-text" data-error="O campo deve conter o @, exemplo : user@gmail.com, este campo não deve conter aspas simples."></span>
                </div>

                <?php

                //atribuir a variavél sql2 ($sql2) a busca por todos os cursos cadastrados no sistema e ordená-los por ordem alfabéticaF
                $sql2 = "SELECT id_curso, nome_curso FROM curso ORDER BY nome_curso ASC";

                //atribuir a variavél resultado2 ($resultado2) a excução do comando sql2 ($sql2).
                $resultado2 = excutarSQL($mysql, $sql2);

                ?>

                <label>Qual é o seu curso?</label>
                <!--As tags selects e options são usadas para criar menus suspensos (dropdowns) ou listas de opções em formulários.-->
                <!--SELECT cria um menu suspenso que permite ao usuário escolher uma ou mais opções.-->
                <select name="curso" class="browser-default">
                    <?php

                    //dentro do campo de seleção atribuimos a veriavél dados ($dados) o array associativo com os valores do resultado da excução do comando sql2 ($sql2) que será repetido enquanto houver dados.
                    while ($dados = mysqli_fetch_assoc($resultado2)) {

                    ?>

                        <!--declarar o option que nada mais é do que as opções do select. Este option tem os valores que queremos do array associativo dados ($dados).-->
                        <option <?php

                                //aqui fazemos uma verificação de todos os cursos cadastrados no sistema, qual é o do aluno que está logado no momento e atribuimos o comando selected "seleciionado", ou  seja, a lista de opções já vai vir selecionada com o nome do curso do aluno que está logado no sistema. No caso está verificação sempre vai ser atendida, porque o aluno está logado no sistema, ou seja, ele está cadastrado no banco de dados e se ele esta cadastrado, ele tem que ter abrigatóriamente um curso
                                if ($aluno['id_curso'] == $dados['id_curso']) {

                                    echo "selected";
                                }
                                ?> value="<?php echo $dados['id_curso'] ?>">
                            <?php echo $dados['nome_curso'] ?>
                        </option>
                    <?php
                    }
                    ?>
                </select>
            </div>


            <input type="hidden" value="<?php echo $aluno['id_aluno']; ?>" name="id">

            <div class="row">
                <div class="col s12">
                    <p class="center-align">
                        <button class="btn waves-effect waves-light  #1565c0 blue darken-3 darken-3 lighten-3" type="submit" name="action">Editar conta
                            <i class="material-icons right">create</i> </button>
                    </p>
                </div>
            </div>

        </form>

        <div class="col s12">
            <p class="center-align">
                <a href="#modal<?php echo $aluno['id_aluno']; ?>" class="waves-effect waves-light #e64a19 deep-orange darken-2 lighten-3 btn modal-trigger"><i class="material-icons right">delete</i>Excluir conta</a>
            </p>
        </div>
        </div>

        <!-- Modal Structure -->
        <div id="modal<?php echo $aluno['id_aluno']; ?>" class="modal">
            <div class="modal-content">
                <h2> Atenção! </h2>
                <hr>
                <p>Você confirma a exclusão da sua conta! : <strong><?php echo $aluno['nome']; ?></strong> ?</p>
                <hr>
            </div>

            <div class="modal-footer">
                <form action="excluirAluno.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $aluno['id_aluno']; ?>">

                    <button type="submit" name="btn-deletar" class="modal-action modal-close waves-red btn red darken-1">
                        Excluir </button>

                    <button type="button" name="btn-cancelar" class="modal-action modal-close  btn waves-light green">
                        Cancelar </button>
                </form>
            </div>
    </main>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="../materialize/js/materialize.min.js"></script>

    <script>
        // M.AutoInit();
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.modal');
            var instances = M.Modal.init(elems, {
                opacity: 0.7, // Opacidade do background (0.0 a 1.0)
                inDuration: 1000, // Duração da animação de abertura em milissegundos
                outDuration: 1200, // Duração da animação de fechamento em milissegundos
                dismissible: true, // Permite fechar ao clicar fora do modal
                startingTop: '10%', // Posição inicial do modal em relação ao topo
                endingTop: '15%' // Posição final do modal em relação ao topo
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Inicializa a sidenav
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {
                edge: 'left'
            });

            // Configura a largura da sidenav
            var sidenav = document.querySelector('.sidenav');
            sidenav.style.width = '250px'; // Ajuste a largura conforme necessário
        });
    </script>
</body>

</html>