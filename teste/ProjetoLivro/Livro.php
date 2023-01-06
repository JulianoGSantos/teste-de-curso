<?php
require_once 'Pessoa.php';
class Livro {
   private $titulo;
   private $autor;
   private $totPaginas;
   private $pagAtual;
   private $aberto;
   private $leitor;
   
   public function detalhes(){
       echo"Detalhes:.";
       echo"<p>Livro: ".$this->titulo." escrito por ".$this->autor;
       echo"com ".$this->totPaginas." está sendo lido por ".$this->leitor->getNome();
   }
   public function abrir(){
       $this->aberto = true; 
   }
   public function fechar(){
       $this->aberto = false;
   }
   public function folhear($p){
       $this->aberto = true;
       if($p > $this->totPaginas){
           echo"Livro não tem essa página";
       }else{
           $this->pagAtual = $p;
       }
   }
   public function avancarPag(){
       $this->pagAtual ++;
   }
   public function voltarPag(){
       $this->pagAtual --;
   }
   public function __construct($titulo, $autor, $totPaginas, $leitor) {
       $this->titulo = $titulo;
       $this->autor = $autor;
       $this->totPaginas = $totPaginas;
       $this->aberto = false;
       $this->leitor = $leitor;
   }
   public function getTitulo() {
       return $this->titulo;
   }

   public function getAutor() {
       return $this->autor;
   }

   public function getTotPaginas() {
       return $this->totPaginas;
   }

   public function getPagAtual() {
       return $this->pagAtual;
   }

   public function getAberto() {
       return $this->aberto;
   }

   public function getLeitor() {
       return $this->leitor;
   }

   public function setTitulo($titulo): void {
       $this->titulo = $titulo;
   }

   public function setAutor($autor): void {
       $this->autor = $autor;
   }

   public function setTotPaginas($totPaginas): void {
       $this->totPaginas = $totPaginas;
   }

   public function setPagAtual($pagAtual): void {
       $this->pagAtual = $pagAtual;
   }

   public function setAberto($aberto): void {
       $this->aberto = $aberto;
   }

   public function setLeitor($leitor): void {
       $this->leitor = $leitor;
   }



}
