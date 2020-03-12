<?php

require_once './Inter.php';


class Controle implements Inter{
    
    private $volume;
    private $ligado;
    private $tocando;
    
    function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    
    
    
    
    
    public function abrirMenu() {
        echo "<br> Está ligado ?: " . ($this->getLigado()?"Sim":"Não");
        echo "<br> Está tocando ?: " . ($this->getTocando()?"Sim":"Não");
        echo "<br> Volume: ". $this->getTocando();
        for($i=0; i<= $this->getVolume(); $i+=2)
        {
            echo "|";
        }
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado() && $this->getVolume()==0)
        {
            $this->setVolume(50);
        }
        else
        {
            echo "<br> iA TV está deslida ou o volume não está no 0 !";
        }
    }

    public function fecharMenu() {
        echo "<br> fechando menu";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if($this->getLigado() && $this->getVolume()>0)
        {
            $this->setTocando(0);
        }
        else
            
        {
            echo "A TV está deslida ou o volume ja está no zero !";
        }
    }

    public function maisVolume() {
        if ($this->getLigado())
        {
            $this->setVolume($this->getVolume() + 1);
        }
        else {
            echo "TV não ligada";
        }
    }

    public function menosVolume() {
        if ($this->getLigado())
        {
            $this->setVolume($this->getTocando() - 1);
        }
        else{
            echo "TV desligada";
        }
    }

    public function pause() {
        
    }

    public function play() {
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    // getters e setters
    function getVolume() {
        return $this->volume;
    }

    function getLigado() {
        return $this->ligado;
    }

    function getTocando() {
        return $this->tocando;
    }

    function setVolume($volume) {
        $this->volume = $volume;
    }

    function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    

}
