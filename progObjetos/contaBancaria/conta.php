<?php

class Conta {
    protected $numero;
    protected $titular;
    protected $saldo;

    public function __construct($numero, $titular, $saldo = 0) {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            return true;
        }
        return false;
    }

    public function consultarSaldo() {
        return $this->saldo;
    }
}