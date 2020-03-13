<?php

class Luta {
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovado;
   
   
   public function marcarLuta(){
       
   }
   
   public function lutar(){
       
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   function getDesafiado() {
       return $this->desafiado;
   }

   function getDesafiante() {
       return $this->desafiante;
   }

   function getRounds() {
       return $this->rounds;
   }

   function getAprovado() {
       return $this->aprovado;
   }

   function setDesafiado($desafiado) {
       $this->desafiado = $desafiado;
   }

   function setDesafiante($desafiante) {
       $this->desafiante = $desafiante;
   }

   function setRounds($rounds) {
       $this->rounds = $rounds;
   }

   function setAprovado($aprovado) {
       $this->aprovado = $aprovado;
   }


}
