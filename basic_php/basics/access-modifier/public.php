<?php
class base{
   public $name;

   public function __construct($n){
     $this -> name = $n;
    }

    public function show(){
        echo "Your name: " .$this->name ."<br>";
    }
}

$test = new base("Dhananjay");

$test->name = "mansur miya"; // overide property must be public
$test->show(); // to call method