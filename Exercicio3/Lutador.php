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
       $this->peso = $peso;
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
   }

   function setCategoria($categoria) {
       $this->categoria = $categoria;
   }

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
