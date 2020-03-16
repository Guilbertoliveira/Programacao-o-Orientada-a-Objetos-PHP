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
        require_once "./Ave.php";
        require_once './Mamifero.php';
        require_once './Peixe.php';
        require_once './Reptil.php';
        echo "<br><br>";
        $p = new Peixe();
        print_r($p);
        $p->alimentar();
        echo "<br><br>";
        $a = new Ave();
        print_r($a);
        $a->alimentar();
        echo "<br><br>";
        $m = new Mamifero();
        print_r($m);
        $m->alimentar();
        
        echo "<br><br>";
        $r = new Reptil();
        print_r($r);
        $r->alimentar();
        
        ?>
    </body></pre>
</html>
