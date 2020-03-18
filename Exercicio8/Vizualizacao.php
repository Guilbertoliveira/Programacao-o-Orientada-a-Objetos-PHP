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
       $this->filme->setViews(+1);
       $this->espectador->setTotAssistido($this->espectador->getTotAssistido() + 1);
       
   }

   
   
   public function avaliar()
   {
       
   }
   
   public function avaliarNota($nota)
   {
       
   }
   
   public function avaliarPorc($porc)
   {
       
   }
}
