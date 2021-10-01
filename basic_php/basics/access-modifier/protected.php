<?php
class base{
   protected $name;

   public function __construct($n){
     $this -> name = $n;
    }

    protected function show(){
        echo "Your name: " .$this->name ."<br>";
    }
}
 class derived extends base{
    public function get(){
        echo "Your name: " .$this->name ."<br>";
    }
}

// $test = new base("Dhananjay");
$test = new derived("OM");
// $test->name = "mansur miya";
$test->get(); // to call method