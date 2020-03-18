<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gafanhoto
 *
 * @author guilb
 */
require_once './Pessoa.php';
class Gafanhoto extends Pessoa {

    private $login;
    private $totAssistido;
    
    public function viuMaisUm()
    {
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    function getLogin() {
        return $this->login;
    }

    function getTotAssistido() {
        return $this->totAssistido;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }


    
}
