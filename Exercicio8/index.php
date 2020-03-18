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
        require_once './Video.php';
        require_once './Pessoa.php';
        require_once './Gafanhoto.php';
        
        $v[0] = new Video("Naruto");
        print_r($v);
        print_r($v[0]);
        
        
        $p = new Pessoa("jubileu", 18, "Masculino");
        print_r($p);
        
        
        $g = new Gafanhoto("jose", "22", "M", "jubis2");
        print_r($g);
        ?>
    </body></pre>
</html>
