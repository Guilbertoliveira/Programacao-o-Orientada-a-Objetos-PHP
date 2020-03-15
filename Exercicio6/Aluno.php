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
class Aluno {
    
    
    
    private $matricula;
    private $curso;
    
    
    public function pagarMensalidade()
    {
        echo "<br> mensalidade paga !";
    }
    
    
    function __construct($matricula, $curso) {
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
