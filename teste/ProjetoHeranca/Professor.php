<?php
class Professor extends Pessoa{
    private $especialidade;
    private $salario;
    
    public function receberAum($au){
        $this->salario = $this->salario + $au;
    }
}
