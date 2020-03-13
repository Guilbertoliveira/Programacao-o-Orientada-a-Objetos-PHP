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
    <body> <pre>
        <?php
        
                require_once './Lutador.php';

                
            $l = array();
            $l[0] = new Lutador('jose', 'brasileiro', 22, 1.80, 75.3, 15, 2, 0);
            $l[1] = new Lutador('creude', 'chinês', 45, 1.70, 60.5, 10, 2, 3);
            
            $l[0]->status();
            
            $l[0]->ganharLuta();
            $l[0]->perderLuta();
            $l[0]->empatarLuta();
            $l[0]->status();
            $l[0]->status();
            
            
        ?>
    </body></pre>
</html>
