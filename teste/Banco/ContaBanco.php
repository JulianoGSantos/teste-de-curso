<?php

class ContaBanco {
    public $numConta;
    protected $tipo;
    private $dono;
    public $saldo;
    private $status;
    
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
    }
    
    public function abrirConta($a){
        $this->setTipo($a);
        $this->setStatus(true);
        if ($a == "cc") {
            $this->setSaldo(50);
        }elseif ($a == "cp") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        $this->setStatus(true);
        if ($this->getSaldo() == 0) {
            $this->setStatus(false);
            echo"Conta encerrada";
        } else {
            echo"Saldo pendente";
        }
    }
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo()+$v);
        }
    }
    public function sacar($s){
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo()-$s);
        }
    }
    public function pagarMensal(){
        if ($this->getSaldo()) {
            $this->setSaldo($this->getSaldo()-12);
        }
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