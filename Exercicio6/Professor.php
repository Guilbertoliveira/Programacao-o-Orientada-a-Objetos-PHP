<?php

require_once './Pessoa.php';
final class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    
    
    public function receberAumento($r)
    {
        $this->setSalario($this->getSalario() + $r);
    }
    
    
    function __construct($especialidade, $salario) {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    
    
    
    //getters e setters
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
