<?php
include 'Elevador.php';

$totAndares = $_POST['totAndares'];
$capTotal = $_POST['capTotal'];

if (isset($_POST['capAtual']))
    $capAtual = $_POST['capAtual'];
else
    $capAtual = 0;

if (isset($_POST['andarAtual']))
    $andarAtual = $_POST['andarAtual'];
else
    $andarAtual = 0;

if (isset($_POST['acao']))
    $acao = $_POST['acao'];
else
    $acao = '';

$elevador = new Elevador($totAndares, $capTotal, $capAtual, $andarAtual);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Elevador</title>
</head>

<body>

<h1> Mensagens do Elevador </h1>

    <?php
    if ($acao == 'Entrar') { $elevador->entrar(); }

    if ($acao == 'Sair') { $elevador->sair(); }

    if ($acao == 'Subir') { $elevador->subir(); }

    if ($acao == 'Descer') { $elevador->descer(); }
    ?>

    <br><br><hr>

    <h1> Status do Elevador </h1>

    Andar atual: <?php echo $elevador->getAndarAtual(); ?>
    de <?php echo $elevador->getTotAndares(); ?> <br>

    Capacidade atual: <?php echo $elevador->getCapAtual(); ?>
    de <?php echo $elevador->getCapTotal(); ?> <br>

    <br><hr>
    <h2> Selecione uma ação: </h2>

    <form method="POST">

        <input type="hidden" name="totAndares" 
            value="<?=$elevador->getTotAndares()?>"/>
        <input type="hidden" name="capTotal" 
            value="<?=$elevador->getCapTotal()?>"/>
        <input type="hidden" name="capAtual" 
            value="<?=$elevador->getCapAtual()?>"/>
        <input type="hidden" name="andarAtual" 
            value="<?=$elevador->getAndarAtual()?>"/>

        <table>
            <tr>
                <td> <input type="submit" value="Entrar" name="acao" /> </td>
                <td> <input type="submit" value="Sair" name="acao" /> </td>
            </tr>
            <tr>
                <td> <input type="submit" value="Subir" name="acao" /> </td>
                <td> <input type="submit" value="Descer" name="acao" /> </td>
            </tr>
        </table>
    </form>
</body>
</html>