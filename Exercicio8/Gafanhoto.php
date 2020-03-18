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
        $this->totAssistido ++; 
    }
    
    function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo); // super do java aqui é utilizando parent
        $this->login = $login;
        $this->setTotAssistido(0);
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
