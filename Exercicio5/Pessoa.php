<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pessoa
 *
 * @author guilb
 */
class Pessoa {
    private $nome;
    private $idade;
    private $caractere;
    
    public function fazerAniv()
    {
        $this->setIdade($this->getIdade() + 1);  
    }
    
    
    
    
    
    
    
    // getters e seterrs
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getCaractere() {
        return $this->caractere;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setCaractere($caractere) {
        $this->caractere = $caractere;
    }


}
