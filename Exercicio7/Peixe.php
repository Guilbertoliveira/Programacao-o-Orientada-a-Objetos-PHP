<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Peixe
 *
 * @author guilb
 */
require_once './Animal.php';
class Peixe extends Animal {
  
    private $corEscama;
    
    
    public function soltarBolha()
    {
        echo "<br>Soltando bolhas: Glub Glub";
    }
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo "<br>aliementar peixinho";
    }

    public function emitirsom() {
        echo "<br>gluuuub som som";
    }

    public function locomover() {
        echo "<br>nadandoo";
    }

}
