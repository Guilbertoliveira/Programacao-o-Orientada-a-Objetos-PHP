<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lutador
 *
 * @author guilb
 */
class Lutador {
   private $nome;
   private $nacionalidade;
   private $idade;
   private $altura;
   private $peso;
   private $categoria;
   private $vitorias;
   private $derrotas;
   private $empates;
   
   
   
   
   public function status ()
   {
       echo "<br> O Lutador: " .$this->getNome(). "<br> Da Origem de: " .$this->getNacionalidade(). "<br> Com a idade de  " .$this->getIdade(). "<br> Com a altura de: " .$this->getAltura(). "<br> Pesando: " .$this->getPeso(). "<br> Ganhando: " .$this->getVitorias(). "<br> Empatando: " .$this->getEmpates(). "<br> Perdendo: " .$this->getDerrotas(). "<br><br>";
   }
   
   public function ganharLuta()
   {
       $this->setVitorias($this->getVitorias() + 1); 
   }
   
   public function perderLuta()
   {
       $this->setDerrotas($this->getDerrotas() + 1);
   }
   
   public function empatarLuta()
   {
       $this->setEmpates($this->getEmpates() + 1);
   }
   
   // construtor
   function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
       $this->nome = $nome;
       $this->nacionalidade = $nacionalidade;
       $this->idade = $idade;
       $this->altura = $altura;
       $this->setPeso($peso);
       $this->vitorias = $vitorias;
       $this->derrotas = $derrotas;
       $this->empates = $empates;
   }

   // getters e setters
   private function getNome() {
       return $this->nome;
   }

   private function getNacionalidade() {
       return $this->nacionalidade;
   }

   private function getIdade() {
       return $this->idade;
   }

   private function getAltura() {
       return $this->altura;
   }

   private function getPeso() {
       return $this->peso;
   }

   public function getCategoria() {
       return $this->categoria;
   }

   private function getVitorias() {
       return $this->vitorias;
   }

   private function getDerrotas() {
       return $this->derrotas;
   }

   private function getEmpates() {
       return $this->empates;
   }

   private function setNome($nome) {
       $this->nome = $nome;
   }

   private function setNacionalidade($nacionalidade) {
       $this->nacionalidade = $nacionalidade;
   }

   private function setIdade($idade) {
       $this->idade = $idade;
   }

   private function setAltura($altura) {
       $this->altura = $altura;
   }

   private function setPeso($peso) {
       $this->peso = $peso;
       $this->setCategoria($peso);
   }

   private function setCategoria($categoria) {
       
       
       if($this->peso<52.2)
       {
           echo "<br> peso invalido";
       }
       else if ($this->peso<70.3) {
           echo '<br> peso leve ' .$this->getNome();
           echo '<br>';
           $this->categoria = "leve";
   }else if ($this->peso<= 83.9) {
       echo '<br> peso medio '.$this->getNome();
        echo '<br>';
           $this->categoria = "médio" ;
   } else if ($this->peso<=120.2) {
           echo '<br> peso pesado ' .$this->getNome();
            echo '<br>';
   $this->categoria = "pesado"; }
   else {     $this->categoria = "invalido";}}

private function setVitorias($vitorias) {
       $this->vitorias = $vitorias;
   }

   private function setDerrotas($derrotas) {
       $this->derrotas = $derrotas;
   }

   private function setEmpates($empates) {
       $this->empates = $empates;
   }


}
