<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bolsista
 *
 * @author guilb
 */
require_once './Aluno.php';

class Bolsista extends Aluno{
   
        
        private $bolsa;

       public function renovarBolsa()
       {
           echo  "<br> Bolsa renovada";
       }
       
       function getBolsa() {
           return $this->bolsa;
       }

       function setBolsa($bolsa) {
           $this->bolsa = $bolsa;
       }


}
