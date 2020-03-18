<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vizualizacao
 *
 * @author guilb
 */
require_once './Video.php';
require_once './Gafanhoto.php';

class Vizualizacao {
   private $espectador;
   private $filme;
   
   
   
   function __construct($espectador, $filme) {
       $this->espectador = $espectador;
       $this->filme = $filme;
       $this->filme->setViews($this->filme->getViews() + 1);
       $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
       
   }

   
   
   public function avaliar()
   {
       $this->filme->setAvaliacao(5);
   }
   
   public function avaliarNota($nota)
   {
       $this->filme->setAvaliacao($nota);
       
   }
   
   public function avaliarPorc($porc)
   {
       $nova = 0;
       if ($porc <= 20)
       {
           $nova = 3;
       }
       elseif ($porc <=50)
       {
           $nova = 5;}
       else{
           $nova = 10;
       }
       $this->filme->setAvaliacao($nova);
   }
}
