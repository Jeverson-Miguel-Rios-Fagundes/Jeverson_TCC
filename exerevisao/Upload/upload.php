
<?php

include ("conecta.php");

$pastaDestino = "./arquivos/";

//varificar se o tamanho do arquivo é maior do que 2MB.
if ($_FILES['arquivo'] ['size'] > 2000000) {
    
    echo "Este arquivo é maior do que o permitido!";

    die();

}else {

     $extencao = strtolower(pathinfo($_FILES['arquivo'] ['name'], PATHINFO_EXTENSION));

     if (
        $extencao != "png" and $extencao != "jpeg" and 

        $extencao != "gif" and $extencao != "jfif" and 

        $extencao != "svg"
        
        ) {

        //condição de guarda.
        
        echo "Este arquivo não é aceito aqui neste projeto, por não se tratar de uma imagem! Selecione um arquivo com as seguintes extenções: .png, .jpeg, .gif, .jfif ou .svg";

        die ();

     }else {
        
        //verificar se o arquivo é uma imagem de fato.
        if (getimagesize($_FILES['arquivo'] ['tmp_name']) === false) {
            
            echo "Problemas ao enviar  a imagem. Tente novamente!";

            die ();

        }else {

            $nome_arquivo = uniqid();
            
            //se deu certo até aqui, faz o upload.
            $fez_upload = move_uploaded_file($_FILES['arquivo']['tmp_name'], $pastaDestino . $nome_arquivo . "." . $extencao);
            
            if ($fez_upload == true) {

                $sql = "INSERT INTO arquivos (nome_arquivo) VALUES ('$nome_arquivo.$extencao')";

                $resultado = mysqli_query($mysql, $sql); 

                if (isset($_POST['nome_arquivo'])) {

                    //se for uma alteraçãode arqiivos
                    
                    $apagou = unlink($pastaDestino .  $_POST['nome_arquivo']);

                    if ($apagou == true) {
                        
                        $sql2 =  "DELETE FROM arquivos WHERE nome_arquivo ='"
                        . $_POST['nome_arquivo'] . "'";

                        $resultado2 = mysqli_query($mysql, $sql2);

                        if ($resultado2 == false) {
                            
                            echo "Erro ao apagar o arquivo do banco de dados!";

                            die ();

                        }

                    }else {
                        
                        echo "Erro ao apagar o arquivo!";

                        die ();
                    }
                }

                header("location: index.php");
                
            }else {
                
                echo "Erro ao registrar o arquivo no banco de dados!";
            }
        }
     }

     
}
?>