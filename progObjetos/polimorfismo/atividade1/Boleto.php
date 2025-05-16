<?php

include_once("Pagamento.php");

class Boleto extends Pagamento
{

    function __construct($valor, $data)
    {
        parent::__construct($valor, $data);
    }

    public function processarPagamento()
    {
        echo "Pagamento no valor de " . $this->getValor() . " " . "realizado via boleto com vencimento em " . $this->getData();
    }
}
