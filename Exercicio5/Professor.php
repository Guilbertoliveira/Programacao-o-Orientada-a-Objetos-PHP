<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author guilb
 */

require_once './Pessoa.php';
class Professor extends Pessoa {
    
    private $especialidade;
    private $salario;
    
    public function ReceberAum($a)
    {
        $this->setSalario($this->getSalario() + $a);
    }
    
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


   
    
    
}
