<?php
require_once 'Video.php';
require_once 'Usuario.php';
class Visualizacao {
    private $espectador;
    private $filme;
    
    public function avaliar(){
        $this->filme->setAvaliacao(5);
    }
    public function avaliarNota($nota){
        $this->filme->setAvaliacao($nota);
    }
    public function avaliarPorc($porc){
        $nova = 0;
        if ($porc <= 20) {
            $nova = 3;    
        }elseif($porc <= 50){
            $nova = 5;
        }elseif($porc <= 90){
            $nova = 8;
        }else{
            $nova = 10;
        }
    }
}
