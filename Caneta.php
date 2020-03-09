<?php


class Caneta {
  var $modelo;
  var $cor;
  var $ponta;
  var $tampada;
  
  function rabiscar(){ 
        if ($this->tampada == true)
  {
      echo  "não posso rabiscar \n";
  }
  
    else { echo "posso rabiscar ! \n";}
  }
  
  
  
  function tampar(){
      $this->tampada = true;
  }
  
  function destampar(){
      $this->tampada = false;
  }
}
