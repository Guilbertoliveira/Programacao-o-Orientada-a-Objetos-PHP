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
class Aluno extends Pessoa {  //colocar final antes do class faz com que bolsista não possa herdar a classe aluno
    
    
    
    private $matricula;
    private $curso;
    
    
    public  function pagarMensalidade() //faz com que não possa ser sobreposto esse metodo "final" public final function pagarMensalidade()
    {
        echo "<br> mensalidade paga ! $this->nome";
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
