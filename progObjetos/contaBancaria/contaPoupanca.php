<?php

class ContaPoupanca extends Conta {
    public function renderJuros($taxa) {
        $this->saldo += $this->saldo * ($taxa / 100);
    }
}