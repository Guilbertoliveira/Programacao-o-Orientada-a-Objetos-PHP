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
    
    
    function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "Conta criada com sucesso <br>";
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
        if($this->getStatus() == true)
        {
            $this->setSaldo($this->getSaldo() + $x);
        }
        else {
            echo "<p> Conta fechada </p>";
        }
    }
 
    public function sacar($v){
        if($this->getStatus() )
        { if ($this->getSaldo() > $v)
        {
            $this->setSaldo($this->getSaldo() - $v);
            echo "Saque autorizado na conta " .$this->getDono(). "no valor de: ". $v. "<br>";
        } else {
            echo "Saldo insuficiente para saque";
        }
    } else {
        echo "Conta não está aberta";
    }}
    
     public function pagarMensalidade(){
        if($this->getTipo() == "CC")
        {
            $v = 12;
        }
        elseif ($this->getTipo("CP"))
        {
            $v = 20;
        }
        
        if ($this->getStatus())
        {
            $this->setSaldo($this->getSaldo() - $v);
            echo "A mensalidade do cliente ". $this->getDono(). "no valor: ". $v. "<br><br>";
        }
        else{
            echo "Não posso cobrar !";
        }
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
