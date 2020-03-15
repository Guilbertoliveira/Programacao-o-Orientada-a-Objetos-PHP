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
 */ require_once "Pessoa.php";
class Aluno extends Pessoa{
   
    private $matr;
    private $curso;
    
    public function cancelarMatr()
    {
        echo "<br> Matricula será cancelada";
    }
    
    function getMatr() {
        return $this->matr;
    }

    function getCurso() {
        return $this->curso;
    }

    function setMatr($matr) {
        $this->matr = $matr;
    }

    function setCurso($curso) {
        $this->curso = $curso;
    }


    
}
