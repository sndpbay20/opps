<?php

class calculation {
     public $a,$b,$c;
     function sum(){
         $this-> c = $this -> a + $this-> b;
         return $this-> c;
     }
     function sub(){
         $this-> c = $this -> a - $this -> b;
         return $this-> c;
     }
     
 }  
 
 $A = new calculation();
 $A->a = 4;
 $A ->b = 8;
 $B = new calculation();
 $B->a = 30;
 $B->b = 20;
 $C = new calculation();
 $C -> a = 60;
 $C -> b = 35;

 echo"Sum value of A: " .$A->sum()."<br>";
 
 echo"Subtraction value of B: " .$B->sub() .'<br>';

 echo"Subtraction value of C: " .$C->sub();

 ?>