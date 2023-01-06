<?php

class Conta {
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    public function __construct(){
        $this->setSaldo(0);
        $this->setStatus(false);
    }
    public function abrirConta($a){
        $this->setStatus(true);
        $this->setTipo($a);
        if ($a == "cc") {
            echo"Sua conta corrente foi aberta</br>";
            $this->setSaldo(50);
        }elseif ($a == "cp") {
            echo"Sua conta poupança foi aberta</br>";
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        $this->getStatus(true);
        if ($this->getSaldo() > 0) {
            echo"Sua conta não pode ser fechada, tem saldo positivo.<br/>";
        }elseif ($this->getSaldo() < 0) {
            echo"Sua conta não pode ser fechada, tem saldo negativo.<br/>";
        }else{
            $this->getStatus(false);
            echo"Sua conta foi fechada com sucesso<br/>";
        }
    }
    public function depositar($d){
        $this->getStatus(true);
        $this->setSaldo($d);
    }
    public function sacar($s){
        $this->getStatus(true);
        if ($s <= $this->getSaldo()) {
            $this->setSaldo($this->getSaldo() - $s);
        }else{
            echo"você não possui saldo suficiente para essa transação.";
        }
    }
    public function pagarMensal(){
        $this->getStatus(true);
        $this->setSaldo($this->getSaldo()-12);
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


}
