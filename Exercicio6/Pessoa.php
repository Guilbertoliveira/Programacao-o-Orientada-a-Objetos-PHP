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
abstract class Pessoa  { //não pode ser instanciada no index
 
    protected $nome;
    protected $idade;
    protected $sexo;
    
    public function fazerAniversario() //metodo final não pode ser sobrescrito
    {
        $this->setIdade($this->getIdade() + 1 );
    }
    
    
    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }


    
    
}
