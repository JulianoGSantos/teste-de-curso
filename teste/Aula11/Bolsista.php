<?php
require_once 'Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
    
    public function renovarBolsa(){
        echo "<p> Bolsa Renovada";
    }
    public function pagarMensalidade(){
        echo"<p>".$this->nome." pagou a mensalidade com desconto pois é bolsista";
    }
    public function getBolsa() {
        return $this->bolsa;
    }

    public function setBolsa($bolsa): void {
        $this->bolsa = $bolsa;
    }


}
