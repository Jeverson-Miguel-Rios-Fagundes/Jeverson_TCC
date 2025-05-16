<?php

class Produto
{

    private $descricao;
    private $estoque;
    private $preco;
    private $codigo;
    private $marca;
    private $corEmbalagem;
    private $dataFabricacao;
    private $prazoValidade;
    private $pesoEmbalagem;
    private $pesoProduto;

    public function __construct($descricao, $estoque, $preco, $codigo, $marca, $corEmbalagem, $dataFabricacao, $prazoValidade, $pesoEmbalagem, $pesoProduto) {

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
        
    }
    public function setDescricao($descricao) {
        
        $this->descricao = $descricao;
    }
    public function pesoTotal(){
        
        $pesoTotal = $this->pesoEmbalagem + $this->pesoProduto;

        return $pesoTotal;
    }
    public function getDescricao(){
        
        return $this->descricao;
    }
    public function getEstoque(){

        return $this->estoque;
    }
    public function getPreco(){
        
        return $this->preco;
    }
    public function getCodigo(){
        
        return $this->codigo;
    }
    public function getMarca(){
        
        return $this->marca;
    }
    public function getCorEmbalagem(){
        
        return $this->corEmbalagem;
    }
    public function getDataFabricacao(){
        
        return $this->dataFabricacao;
    }
    public function getPrazoValidade(){
        
        return $this->prazoValidade;
    }
    public function getPesoEmbalagem(){
        
        return $this->pesoEmbalagem;
    }
    public function getPesoProduto(){
        
        return $this->pesoProduto;
    }
}
