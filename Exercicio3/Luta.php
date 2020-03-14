<?php
    require_once './Lutador.php';
    

class Luta {
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovado;
   
   
   public function marcarLuta($l1, $l2){
       if ($l1->getCategoria() == $l2->getCategoria()  && ($l1 != $l2)) // == comparando apenas os valores
               // === compara os tipos para ver se ambos são ex: int === int 
       {
           $this->aprovado = true;
           $this->desafiado = $l1;
           $this->desafiante = $l2;
           echo '<BR><BR> LUTA MARCADA <BR><BR>';
       }
       else{
           $this->aprovado = false;
           $this->desafiado = NULL;
           $this->desafiante = NULL;
            echo '<BR><BR> LUTA NAO MARCADA <BR><BR>';
       }
   }
   
   public function lutar(){
       if ($this->aprovado)
       {
           $this->desafiado->status();
           $this->desafiante->status();
           
           
           echo "COMEÇANDO A LUTAAA <br><br>";
           $vencedor = rand(0,2);
           
           switch ($vencedor)
           {
               case 0: 
                   echo "<br><br> EMPATE";
                   $this->desafiado->empatarLuta();
                   $this->desafiante->empatarLuta();
                   break;
               case 1:
                   echo "<br><br> O desafiado ganhou ";
                   $this->desafiado->ganharLuta();
                   $this->desafiante->perderLuta();
                   break;
               case 2:
                   echo "<br><br> O Desafiante ganhou ";
                     $this->desafiado->perderLuta();
                     $this->desafiante->ganharLuta();
                   break;
               default:
                   echo "algo deu errado ! ";
                   break;       
           }
       
       }
       else           echo "luta não pode acontecer";
   }
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   //getters e setters
   function getDesafiado() {
       return $this->desafiado;
   }

   function getDesafiante() {
       return $this->desafiante;
   }

   function getRounds() {
       return $this->rounds;
   }

   function getAprovado() {
       return $this->aprovado;
   }

   function setDesafiado($desafiado) {
       $this->desafiado = $desafiado;
   }

   function setDesafiante($desafiante) {
       $this->desafiante = $desafiante;
   }

   function setRounds($rounds) {
       $this->rounds = $rounds;
   }

   function setAprovado($aprovado) {
       $this->aprovado = $aprovado;
   }


}
