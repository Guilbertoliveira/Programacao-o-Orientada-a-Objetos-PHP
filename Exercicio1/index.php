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
        require_once 'Banco.php';
        
        $p1 = new Banco;
        $p2 = new Banco;
        
        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p1->setNumConta(111111);
        
        $p2->abrirConta("CP");
        $p2->setDono("Maria");
        $p2->setNumConta(2222222);
        
        print_r($p1);
        echo "<br>";
        print_r($p2);
        
        $p1->depositar(500);
        $p2->depositar(300);
        
        
        
        print_r($p1);
        echo "<br>";
        print_r($p2);
        

        
        print_r($p1);
        echo "<br>";
        print_r($p2);
        
   
        $p1->sacar(238);
        $p2->sacar(330);
        print_r($p1);
        echo "<br>";
        print_r($p2);
        
        
                $p1->sacar(311);
        $p2->sacar(119);
        print_r($p1);
        echo "<br>";
        print_r($p2);
        
        
        $p1->fecharConta();
        $p2->fecharConta();
          print_r($p1);
        echo "<br>";
        print_r($p2);
        ?>
    </body></pre>
</html>
