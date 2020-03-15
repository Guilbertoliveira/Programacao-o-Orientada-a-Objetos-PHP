<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author guilb
 */
require_once './Pessoa.php';
class Aluno extends Pessoa {
    
    
    
    private $matricula;
    private $curso;
    
    
    public function pagarMensalidade()
    {
        echo "<br> mensalidade paga ! $this->nome";
    }
    
    
    function __construct($matricula, $curso, $nome, $idade, $Sexo) {
        $this->nome = $nome;
        $this->sexo = $Sexo;
        $this->idade = $idade;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    
    function getMatricula() {
        return $this->matricula;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


}
