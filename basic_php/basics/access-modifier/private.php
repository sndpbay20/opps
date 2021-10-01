<?php
class base{
   private $name;

   public function __construct($n){
     $this -> name = $n;
    }

    public function show(){
        echo "Your name: " .$this->name ."<br>";
    }
}
 class derived extends base{
    public function get(){
        echo "Your name: " .$this->name ."<br>";
    }
}

$test = new base("OM");
// $test->name = "mansur  miya";
$test->show(); // to call method