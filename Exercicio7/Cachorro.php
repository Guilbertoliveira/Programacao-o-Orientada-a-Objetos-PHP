<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cachorro
 *
 * @author guilb
 */

require_once './Mamifero.php';
class Cachorro extends Mamifero {
    
    public function enterrarOsso ()
    {
        echo "<br> enterrando osso";
    }
    
    public function abanarRabo()
    {
        echo "abanando rabo";
    }
}
