<?php

class ContaCorrente extends Conta {
    private $limite;

    public function __construct($numero, $titular, $saldo = 0, $limite = 0) {
        parent::__construct($numero, $titular, $saldo);
        $this->limite = $limite;
    }

    public function usarLimite($valor) {
        if ($valor <= ($this->saldo + $this->limite)) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }
}