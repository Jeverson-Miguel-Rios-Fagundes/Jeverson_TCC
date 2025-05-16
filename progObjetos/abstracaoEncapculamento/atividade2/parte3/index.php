<?php

include_once "produto.php";

/*
$this->descricao = $descricao;
        $this->estoque = $estoque;
        $this->preco = $preco;
        $this->codigo = $codigo;
        $this->marca = $marca;
        $this->corEmbalagem = $corEmbalagem;
        $this->dataFabricacao = $dataFabricacao;
        $this->prazoValidade = $prazoValidade;
        $this->pesoEmbalagem = $pesoEmbalagem;
        $this->pesoProduto = $pesoProduto;

*/
$p1 = new Produto("Arroz", 20, 4.50, 001, "Zaele", "Preto com branco", "12/08/2024", "12/07/2030", 20, 400);

//$p1->setDescricao("Feijão");

echo "A descrição do produto é : " . $p1->getDescricao() . "<br><br>";
echo "A quantidadeem estoque é: " . $p1->getEstoque() . "<br><br>";
echo "O preço do produto é: " . $p1->getPreco() ."R$" . "<br><br>";
echo "O código do produto é: " . $p1->getCodigo() . "<br><br>";
echo "A marca do produto é: " . $p1->getMarca() . "<br><br>";
echo "A cor da embalagem é: " . $p1->getCorEmbalagem() . "<br><br>";
echo "A data de fabricação foi: " . $p1->getDataFabricacao() . "<br><br>";
echo "O prazo de validade é: " . $p1->getPrazoValidade() . "<br><br>";
echo "O peso da embalagem do produto é: " . $p1->getPesoEmbalagem() ."g" . "<br><br>";
echo "O peso do produto é: " . $p1->getPesoProduto() . "g". "<br><br>";

echo "O peso total somando o peso da embalagem e peso do produto é: " . $p1->pesoTotal() . "g". "<br><br>";