<?php
abstract class Pessoa {
    protected $nome;
    protected $cpf;
    protected $logradouro;
    protected $numero;
    protected $bairro;
    protected $cidade;
    protected $estado;
    
    public function __construct($nome, $cpf, $logradouro, $numero, $bairro, $cidade, $estado) {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
    }

}
