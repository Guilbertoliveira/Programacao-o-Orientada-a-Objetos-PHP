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
        require_once './Cachorro.php';
        require_once './Canguru.php';
        require_once './Cobra.php';
        require_once './Tartaruga.php';
        require_once './Arara.php';
        require_once './Goldfish.php';
        
        
        
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
        
        echo "<br><br>";
        $gold = new Goldfish();
        $gold->locomover();
        print_r($gold);
        
        echo "<br><br>";
        $cachorro = new Cachorro();
        $cachorro->abanarRabo();
        print_r($cachorro);
        
        echo "<br><br>";
        $c = new Canguru();
        $c->locomover();
        $c->alimentar();
        print_r($c);
        
        echo "<br><br>";
        $tar = new Tartaruga();
        $tar->locomover();
        print_r($tar);

        
        ?>
    </body></pre>
</html>
