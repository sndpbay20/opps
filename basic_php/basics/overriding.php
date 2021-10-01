<?php

class base {
    public $name= "Parent class";
    public function calc($a, $b){
        return $a * $b;
    }
}
class derived extends base{
    public $name= "child class";
    public function calc($a, $b){
        return $a + $b;
    }
}
$test = new base(0); 
// echo $test-> name; 
echo $test->calc(6 , 10);

?>