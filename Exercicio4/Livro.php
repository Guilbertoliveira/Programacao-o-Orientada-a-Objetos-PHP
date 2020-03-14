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
        echo "<hr><br> Livro do autor: ". $this->getAutor(). "<br> Com total de paginas de: " .$this->getTotPaginas(). "<br> Sendo lido por: " .$this->leitor->getNome(). "<br> Livro se encontra: ".$this->getAberto(). "<br> E está na pagina: ". $this->getPagAtual();
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
        if($this->getAberto())
        {
            echo "o livro ja está aberto !";
        }
        else
        {
            $this->setAberto(true);    
        }
        
    }

    public function avançarPag() {
         if(($this->getPagAtual() > 0) && ($this->getPagAtual() < $this->getTotPaginas()))
         {
            $this->setPagAtual($this->getPagAtual() + 1);
         }
         else{
             echo "impossivel de avançar";
         }
        
    }

    public function fechar() {
        if($this->getAberto() == false)
        {
            echo "O livro ja está fechado";
        }
        else
        {
            $this->setAberto(false);    
        }
        
    }

    public function folhear($p) {
        if ($p > $this->getTotPaginas())
        {
            echo "<br> Impossível de realizar essa ação o numero de pagina excedida";
        }
        else {
            $this->setPagAtual($p);
        echo "<br> Folhenado ... "; }
    }

    public function voltarPag() {
        if(($this->getPagAtual() > 0) && ($this->getPagAtual() < $this->getTotPaginas()))
        {
            $this->setPagAtual($this->getPagAtual() - 1);
        }
        else{
            echo "<br> Impossivel retornar pagina";
        }
        
    }

}
