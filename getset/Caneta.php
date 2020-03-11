<?php

class Caneta {
   
    public $modelo;
    private $cor;
    private $ponta;
    private $tampada;
    
    
     
  /*  public function __construct() { // metodo construtor mudando para o nome da classe também funciona
        $this->cor = "azul";
        $this->tampar();
    }*/

    public function Caneta($m, $c, $p) // construtor com parametros
    {
        $this->modelo = $m;
        $this->cor = $c;
        $this->ponta = $p;
        $this->tampar();
    }

    
    
    
    
      public function tampar(){
        $this->tampada = true;
    }
    
    // metodos acessores e modificadores 
   
 
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo ($m){
        $this->modelo = $m;
    }
    public function getPonta(){
        return $this->ponta;
    }
    
    public function setPonta ($p){
        $this->ponta = $p;
    }
    
}
