<?php

include_once("Pagamento.php");

class CartaoCredito extends Pagamento
{

    function __construct($valor, $data)
    {
        parent::__construct($valor, $data);
    }
    
    public function processarPagamento()
    {
        echo "Pagamento no valor de " . $this->getValor() ." ". "realizado com o cartão da crétito na data " . $this->getData();
    }
}
