<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

</head>

<body>
    <?php
    include_once "header.php";
    require_once "conecta.php";
    ?>

    <main class="container">

        <h1 class="center-align">Cadastrar</h1>

        <form action="inserir.php" method="post">
            <div class="card-panel">

                <div class="row">

                    <div class="input-field col s12">
                        <input placeholder="Digite no formato XXX.XXX.XXX-XX" id="cpf" name="cpf" type="text" class="validate" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" required>
                        <label for="cpf">CPF</label>
                        <span class="helper-text" data-error="O campo deve ser preenchido no formato XXX.XXX.XXX-XX"></span>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Digite o seu nome" id="nome" name="nome" type="text" class="validate" required>
                        <label for="nome">Nome Completo</label>
                        <span class="helper-text" data-error="Você deve preencher corretamente esse campo"></span>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="Digite sua matricula" id="matricula" type="text" class="validate" pattern="^[0-9]{10}$" required>
                        <label for="mat">Matricula</label>
                        <span class="helper-text" data-error="A sua matricula deve conter 10 caracteres númericos"></span>
                    </div>
                    <div class="input-field col s12">
                        <input id="dataNasc" type="text" class="datepicker" name="dataNasc" required>
                        <label for="dataNasc">Data do seu nascimento</label>
                    </div>

                    <div class="input-field col s12">
                        <i class="material-icons prefix"> lock</i>
                        <input id="senha" type="password" class="validate" name="senha" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" required>
                        <label for="senha">Senha</label>
                        <span class="helper-text" data-error="Deve ter 8 caracteres, no mínimo e  conter pelo menos 1 letra maiuscula,1 letra minuscula, 1 número e 1 caracter especial;."> </span>
                    </div>

                    <div class="row">
                        <div class="input-field col s6">
                            <select>
                                <option value="" disabled selected>Escolha a sua Opção</option>
                                <option value="Cardeal">Cardeal</option>
                                <option value="Ema">Ema</option>
                                <option value="Gansos">Gansos</option>
                            </select>
                            <label style="font-size: 14px;">Qual a sua ave preferida?</label>
                        </div>
                    </div>

                    <div class="col s12">
                        <i class="material-icons prefix"> flight</i>
                        <span style="margin-left: 12px;"> Escolha uma companhia: </span>

                        <p>
                            <label>
                                <input class="with-gap" name="cia" type="radio" />
                                <span>Latam</span>
                            </label>

                            <label>
                                <input class="with-gap" name="cia" type="radio" />
                                <span>Gol</span>
                            </label>

                            <label>
                                <input class="with-gap" name="cia" type="radio" />
                                <span>Azul</span>
                            </label>
                        </p>
                    </div>

                    <span> Doces preferidos: </span>
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in checkbox-black" checked="checked" /> <span>Red</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in checkbox-black" checked="checked" />
                            <span>Yellow</span>
                        </label>
                    </p>
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in checkbox-black" checked="checked" />
                            <span>Filled in</span>
                        </label>
                    </p>

                </div>

            </div>

            <div class="row">
                <div class="col s12">
                    <p class="center-align">
                        <button class="btn waves-effect waves-light brown  lighten-3" type="submit" name="action">Submit
                            <i class="material-icons right">send</i> </button>
                    </p>
                </div>
            </div>
        </form>
    </main>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
        // Inicializa o date picker
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            M.Datepicker.init(elems, {
                autoClose: true, // Fecha o date picker automaticamente após a seleção
                format: 'dd/mm/yyyy', // Define o formato da data
                yearRange: [1900, 2100], // Define o intervalo de anos
                onSelect: function(date) {
                    console.log('Data selecionada: ', date);
                }
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
</body>

</html>