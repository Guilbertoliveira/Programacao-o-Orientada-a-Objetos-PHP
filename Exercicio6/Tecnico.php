<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tecnico
 *
 * @author guilb
 */require_once './Aluno.php';
class Tecnico extends Aluno{
    
    private $registroProfissional;
    
    
    public function praticar()
    {
        echo "<br> Ele está praticando sua função";
    }
    
    function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }


    
    
}
