<?php


class Caneta {
    var $modelo;
    var $cor;
    var $ponta;
    var $carga;
    var $tampada;
    
    function rabiscar(){
        if ($this->tampada == true) {
            echo"<p>Erro. a caneta está tampada</p>";
        }else{
            echo"<p>estou rabiscando...</p>";
        }
        
    }
    function tampar(){
        $this->tampada = true;
    }
    function destampar(){
        $this->tampada = false;
    }
}
 