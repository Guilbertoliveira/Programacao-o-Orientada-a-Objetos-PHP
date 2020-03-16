<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mamifero
 *
 * @author guilb
 */
require_once './Animal.php';
class Mamifero extends Animal {
    
    private $corPelo;
    
    
    
    
    
    
    
    
    
    
    
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }

    public function alimentar() {
        echo "<br> amamentando";
    }

    public function emitirsom() {
        echo "<br>som de mamifero";
    }

    public function locomover() {
        echo "<br>correndo";
    }

}
