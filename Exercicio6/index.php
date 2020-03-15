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
       
       
      // $p1 = new Pessoa; não pode pois é abstract a classe pessoa
       $v1 = new Visitante(); // visitante herança pobre (sem adição de atributos e metodos)
       $v1->setNome("jose");
       $v1->setIdade(11);
       $v1->setSexo("M");
       print_r($v1);
        
       
       $a = new Aluno("12121", "ads", "Guilbert", 22, "masculino");
       print_r($a);
       echo "<hr>";
       
       $b = new Bolsista("1111",    "ads"   , "Valquiria", 32, "feminino");
       $b->setBolsa(true);
       print_r($b);
     
    
        
        
        ?>
    </body></pre>
</html>
