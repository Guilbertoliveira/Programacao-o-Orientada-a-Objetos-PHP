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
        require_once './Vizualizacao.php';
        
        $v[0] = new Video("Naruto");
        $v[1] = new Video("kiba");
     
        
        $p = new Pessoa("jubileu", 18, "Masculino");
     
        
        
        $g = new Gafanhoto("jose", "22", "M", "jubis2");
        
        echo '<hr>';
        $vis = new Vizualizacao($g, $v[0]);
        $vis->avaliar();        
        print_r($vis);
        echo '<hr>';
        
        $vis2 = new Vizualizacao($g, $v[1]);
        $vis2->avaliarPorc(40);
        print_r($vis2);
      
        
        
        
        ?>
    </body></pre>
</html>
