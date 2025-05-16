<!DOCTYPE html>
<html lang="pt-br">
<html>

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

    <br><br>
    <table>

      <h1 class="container">Lista de clientes</h1>

      <br><br>

      <a href="formcadClientes.php" class="waves-effect waves-light btn"><i class="material-icons right">add</i>Inserir</a>

      <br><br>

      <thead>
        <tr>
          <th>ID</th>
          <th>Nome do cliente</th>
          <th>cpf</th>
          <th>Data de nascimento</th>
          <th>Editar</th>
          <th>Excluir</th>
        </tr>
      </thead>

      <tbody>

        <?php

        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($mysql, $sql);

        while ($dados = mysqli_fetch_array($resultado)) {

        ?>

          <tr>
            <td><?php echo $dados['id']; ?></td>
            <td><?php echo $dados['nomeCliente']; ?></td>
            <td><?php echo $dados['CPF']; ?></td>
            <td><?php $dataNasc = date('d/m/Y', strtotime($dados['dataNasc']));
                echo $dataNasc; ?></td>
            <td> <a class="btn-floating btn-small waves-effect waves-light greenyellow"><i class="material-icons">edit</i></a></td>
            <td> <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating btn-small waves-effect waves-light red modal-trigger"><i class="material-icons">delete</i></a></td>

            <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id']; ?>" class="modal">
              <div class="modal-content">
                <h4>Atenção</h4>
                <p>Você confirma a exclusão do usuário <?php echo $dados['nomeCliente']; ?> ?</p>
              </div>
              <div class="modal-footer">

                <form action="excluir.php" method="post">

                  <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                  <button type="submit" name="btn-deletar" class="modal-action modal-close waves-red btn red darken-1">
                    Excluir </button>

                  <button type="button" name="btn-cancelar" class="modal-action modal-close  btn waves-light green">
                    Cancelar </button>

                </form>
              </div>
            </div>

          </tr>
      </tbody>
    <?php
        }
    ?>

    </table>

  </main>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

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

    // Verifica se o parâmetro 'deletado' está na URL
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('deletado')) {
      M.toast({
        html: 'Registro apagado!',
        displayLength: 4000
      });
      // Retira o parâmetro 'deletado' da URL
      urlParams.delete('deletado');
      // Atualiza a URL sem recarregar a página
      window.history.replaceState({}, document.title, window.location.origin + window.location.pathname);
    }
  </script>


</body>

</html>