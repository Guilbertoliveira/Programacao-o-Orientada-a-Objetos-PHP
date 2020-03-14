<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
        <?php
        require_once './Pessoa.php';
        require_once './Livro.php';
       
                
        $p1 = new Pessoa("jose", 18, "masculino");
        print_r($p1);
        
        
        $p2 = new Pessoa("maria", 19, "feminino");
        print_r($p2);
        
        
        
        $livro1 = new Livro("A Sardinha", "Monteiro Novato", 300, $p1);
        
        $livro1->detalhes();
        $livro1->abrir();
        $livro1->avançarPag();
        $livro1->detalhes();
        ?>
    </body></pre>
</html>
