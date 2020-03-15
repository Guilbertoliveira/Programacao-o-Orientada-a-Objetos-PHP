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

        require_once "./Pessoa.php";
        require_once "./Funcionario.php";
        require_once './Aluno.php';
        require_once './Professor.php';
        
        $p = new Pessoa();
        $p1 = new Aluno;
        $p2 = new Professor();
        $p3 = new Funcionario();
        
        
        $p->setNome("jose");
        $p1->setNome("arlindo");
        $p2->setNome("clerivaldo");
        $p3->setNome("pedro");
        
        print_r($p1);
        print_r($p);
        print_r($p2);
        print_r($p3);
        ?>
    </body></pre>
</html>
