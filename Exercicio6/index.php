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
       require_once './Visitante.php';
       require_once './Aluno.php';
       require_once './Bolsista.php';
       require_once './Professor.php';
       require_once './Tecnico.php';
       
       
      // $p1 = new Pessoa; não pode pois é abstract a classe pessoa
       $v1 = new Visitante(); // visitante herança pobre (sem adição de atributos e metodos)
       print_r($v1);
         echo "<hr>";
       $a = new Aluno();
       print_r($a);
       
       echo "<hr>";
       
       $b = new Bolsista();
       print_r($b);
      echo "<hr>";
       $t = new Tecnico();
       print_r($t);
        echo "<hr>";
       $p = new Professor("Cantor", 1500);
       print_r($p);
    
        
        
        ?>
    </body></pre>
</html>
