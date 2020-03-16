<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ave
 *
 * @author guilb
 */
require_once './Animal.php';
class Ave extends Animal{
    
    private $corPena;
    
    
    public function fazerNinho(){
        echo "fazendo ninho";
    }
    
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }

    public function alimentar() {
        echo "<br>comendooo frutas";
    }

    public function emitirsom() {
        echo "<br>emitindo som ave";
    }

    public function locomover() {
        echo "<br>voandoo";
        
    }

}
