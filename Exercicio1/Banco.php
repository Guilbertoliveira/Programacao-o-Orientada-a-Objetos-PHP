<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Humano
 *
 * @author guilb
 */
class Banco {
   
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    
    
    public function abrirConta(){
        $this->status = true;
    }
    
     public function fecharConta(){
        $this->status = false;
    }
    
     public function depositar($x){
         $this->setSaldo($x);
    }
    
 
    
     public function pagarMensalidade(){
        
    }




    // gets e seters
    function getNumConta() {
        return $this->numConta;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDono() {
        return $this->dono;
    }

    function getSaldo() {
        return $this->saldo;
    }

    function getStatus() {
        return $this->status;
    }

    function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDono($dono) {
        $this->dono = $dono;
    }

    function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
}
