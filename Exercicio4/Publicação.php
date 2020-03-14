<?php


interface Publicação {
 
    public abstract function abrir();
    public function fechar();
    public function folhear();
    public function avançarPag();
    public function voltarPag();
}
