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
   
   
   public function apresentar ()
   {
       
   }
   
   public function status ()
   {
       
   }
   
   public function ganharLuta()
   {
       
   }
   
   public function perderLuta()
   {
       
   }
   
   public function empatarLuta()
   {
       
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
   function getNome() {
       return $this->nome;
   }

   function getNacionalidade() {
       return $this->nacionalidade;
   }

   function getIdade() {
       return $this->idade;
   }

   function getAltura() {
       return $this->altura;
   }

   function getPeso() {
       return $this->peso;
   }

   function getCategoria() {
       return $this->categoria;
   }

   function getVitorias() {
       return $this->vitorias;
   }

   function getDerrotas() {
       return $this->derrotas;
   }

   function getEmpates() {
       return $this->empates;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setNacionalidade($nacionalidade) {
       $this->nacionalidade = $nacionalidade;
   }

   function setIdade($idade) {
       $this->idade = $idade;
   }

   function setAltura($altura) {
       $this->altura = $altura;
   }

   function setPeso($peso) {
       $this->peso = $peso;
       $this->setCategoria($peso);
   }

   private function setCategoria($categoria) {
       
       
       if($this->peso<52.2)
       {
           echo "<br> peso invalido";
       }
       else if ($this->peso<70.3) {
           echo "<br> peso leve";
           $this->categoria = "leve";
   }else if ($this->peso<= 83.9) {
           echo "<br> peso médio";
           $this->categoria = "médio";
   } else if ($this->peso<=120.2) {
           echo "<br> peso pesado";
   $this->categoria = "pesado"; }
   else {     $this->categoria = "invalido";}}

   function setVitorias($vitorias) {
       $this->vitorias = $vitorias;
   }

   function setDerrotas($derrotas) {
       $this->derrotas = $derrotas;
   }

   function setEmpates($empates) {
       $this->empates = $empates;
   }


}
