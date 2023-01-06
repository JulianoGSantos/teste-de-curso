<?php


class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;
    
    public function rabiscar(){
        if ($this->tampada == true) {
            echo"<p>Erro. a caneta está tampada</p>";
        }else{
            echo"<p>estou rabiscando...</p>";
        }
        
    }
    private function tampar(){
        $this->tampada = true;
    }
    private function destampar(){
        $this->tampada = false;
    }
}
 