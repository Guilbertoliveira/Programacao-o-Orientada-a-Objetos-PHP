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
    
    
    function __construct($saldo, $status) {
        $this->saldo = 0;
        $this->status = FALSE;
    }

  
    // metodos especificos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if ($t == 'CC')
        {
            $this->setSaldo(50);
        }
        elseif ($t == "CP")
        {
            $this->setSaldo(150);
        }
    }
    
     public function fecharConta(){
         if ($this->getSaldo() > 0)
         {
             echo "<p> Conta ainda possui dinheiro </p> <br>";
         } elseif ($this->getSaldo() < 0){
             echo "<p> Conta está em debito impossível encerrala </p> <br>";
         }
         else{
            $this->setStatus(false);
         }
        
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
