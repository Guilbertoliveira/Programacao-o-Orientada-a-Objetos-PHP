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
        echo "<br> -----ABRIR MENU ------- <br>";
        echo "<br> Está ligado ?: " . ($this->getLigado()?"Sim":"Não");
        echo "<br> Está tocando ?: " . ($this->getTocando()?"Sim":"Não");
        echo "<br> Volume: ". $this->getTocando();
        for($i=0; $i<= $this->getVolume(); $i+=2)
        {
            echo "|";
        }
    }

    public function desligar() {
        $this->setLigado(false);
        $this->setTocando(false);
        $this->setVolume(0);
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
            $this->setVolume($this->getVolume() + 5);
        }
        else {
            echo "TV não ligada";
        }
    }

    public function menosVolume() {
        if ($this->getLigado())
        {
            $this->setVolume($this->getTocando() - 5);
        }
        else{
            echo "TV desligada";
        }
    }

    public function pause() {
        if($this->getLigado() && $this->getTocando())
        {
            $this->getTocando(false);
        } else {
            echo "não estava tocando nada ! ";
        }
    }

    public function play() {
        if ($this->getLigado() && $this->getTocando() == false)
        {
            $this->setTocando(true);
        }
        
        
    }
    
    
    
    
    
    
    
    
    
    
    
    
    // getters e setters
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    

}
