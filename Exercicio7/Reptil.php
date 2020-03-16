<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Reptil
 *
 * @author guilb
 */
require_once './Animal.php';
class Reptil extends Animal {
   
    private $corEscama;
    
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }

    public function alimentar() {
        echo "<br> Reptil comendo";
    }

    public function emitirsom() {
        echo "<br> Reptil rugindo";
    }

    public function locomover() {
        echo "<br> Reptil andando";
    }

}
