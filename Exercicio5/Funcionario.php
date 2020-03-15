<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Funcionario
 *
 * @author guilb
 */
require_once './Pessoa.php';
class Funcionario extends Pessoa{
    
    private $setor;
    private $trabalhando;
    
    public function mudarTrabalho()
    {
        $this->setTrabalhando(! $this->trabalhando);
    }
    
    
    
    
    
    //getters e setters
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }


    
}
