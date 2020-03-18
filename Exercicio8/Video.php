<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Video
 *
 * @author guilb
 */
require_once './AcoesVideo.php';
class Video implements AcoesVideo{
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;
    
    
    function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    
    
    public function like() {
        $this->setCurtidas($this->getCurtidas() + 1);
    }

    public function pause() {
        $this->setReproduzindo(false);  
    }

    public function play() {
        $this->setReproduzindo(true);      
    }
    
    
    function getTitulo() {
        return $this->titulo;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getViews() {
        return $this->views;
    }

    function getCurtidas() {
        return $this->curtidas;
    }

    function getReproduzindo() {
        return $this->reproduzindo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAvaliacao($av) {

        $media = ($this->avaliacao + $av)/$this->views;
        $this->avaliacao = $media;
    }

    function setViews($views) {
        $this->views = $views;
    }

    function setCurtidas($curtidas) {
        $this->curtidas = $curtidas;
    }

    function setReproduzindo($reproduzindo) {
        $this->reproduzindo = $reproduzindo;
    }



}
