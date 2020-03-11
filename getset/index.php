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
    <body>
        <pre> <!-- pre formatamento -->
        <?php
        require_once 'Caneta.php';
        
        $c1 = new Caneta("Bicuda", "Azul", 0.5);
        $c2 = new Caneta("kkkkk", "verde", 0.1);
        print_r($c1);
        print_r($c2);
        //$c1->setModelo("Paraguai");
        //$c1->setPonta(0.5);
       // $c1->ponta = 0.2; erro para demonstrar o private
       //echo "eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}"
            
        
        ?>
        </pre>
        
    </body>
</html>
