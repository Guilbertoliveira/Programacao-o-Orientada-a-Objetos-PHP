<?php

require_once './Pessoa.php';
require_once './Publicacao.php';


class Livro implements Publicação{
   

   
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;
    
    
    public function detalhes()
    {
        echo "<br> Livro do autor: ". $this->getAutor(). "<br> Com total de paginas de: " .$this->getTotPaginas(). "<br> Sendo lido por: " .$this->leitor->getNome(). "<br> Livro se encontra: ".$this->getAberto(). "<br> E está na pagina: ". $this->getPagAtual();
    }
    
    
    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->aberto = false;
        $this->pagAtual = 0;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //getters e setters
    private function getTitulo() {
        return $this->titulo;
    }

    private function getAutor() {
        return $this->autor;
    }

    private function getTotPaginas() {
        return $this->totPaginas;
    }

    private function getPagAtual() {
        return $this->pagAtual;
    }

    private function getAberto() {
        return $this->aberto;
    }

    private function getLeitor() {
        return $this->leitor;
    }

    private function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    private function setAutor($autor) {
        $this->autor = $autor;
    }

    private function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    private function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    private function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    private function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

  
    
    
    
    
        // clases que necessitam ser feitaaas
    public function abrir() {
        $this->setAberto(true);
    }

    public function avançarPag() {
        $this->setPagAtual($this->getPagAtual() + 1);
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) {
        if ($p > $this->getTotPaginas())
        {
            echo "<br> impossível de realizar essa ação o numero de pagina excedida";
        }
        else {
            $this->setPagAtual($p);
        echo "<br> Folhenado ... "; }
    }

    public function voltarPag() {
        $this->setPagAtual($this->getPagAtual() - 1);
    }

}
