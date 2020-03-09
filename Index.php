<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - POO</title>
    </head>
    <body>
        <?php
       
        require_once 'caneta.php';
        
        $c1 = new Caneta();
        
        $c1->cor = "Azul";
        $c1->ponta = "0.5";
        $c1->tampada = false;
        $c1->tampar();
        
        $c1->rabiscar();
        
        echo "<br><br>";
        print_r($c1);
        
        echo "<br><br>";
        $c2 = new Caneta();
        $c2->cor = "Rosa";
        $c2->ponta = "0.9";
        print_r($c2);
        
       //  var_dump($c1); mostra estado do objeto
      //   print_r($c1); também mostra estado do objeto

        ?>
    </body>
</html>
